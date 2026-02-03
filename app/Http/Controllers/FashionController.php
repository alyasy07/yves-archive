<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Telegram\Bot\Laravel\Facades\Telegram;

class FashionController extends Controller
{
    public function index(Request $request)
    {
        try {
            $botToken = config('telegram.bot_token');
            
            if (!$botToken) {
                return view('dashboard', [
                    'posts' => [],
                    'error' => 'Please configure TELEGRAM_BOT_TOKEN in your .env file'
                ]);
            }

            // Configure Telegram API
            $telegram = new \Telegram\Bot\Api($botToken);
            
            // Cache the updates for 5 minutes to avoid repeated API calls
            $fashionPosts = Cache::remember('telegram_fashion_posts', 300, function () use ($telegram, $botToken) {
                // Get updates (messages sent to the bot)
                $updates = $telegram->getUpdates([
                    'timeout' => 30,
                    'limit' => 100,
                ]);
                
                $posts = [];
                
                foreach ($updates as $update) {
                    // Get regular messages sent to the bot
                    $message = $update->getMessage();
                    
                    if (!$message) continue;
                    
                    // Only process messages with photos
                    if ($message->has('photo')) {
                        $photos = $message->getPhoto();
                        
                        // Skip if no photos found
                        if (empty($photos)) continue;
                        
                        $caption = $message->getCaption() ?? '';
                        
                        // Extract Shopee links from caption
                        preg_match_all('/https?:\/\/[^\s]*shopee[^\s]*/i', $caption, $matches);
                        $shopeeLinks = $matches[0] ?? [];
                        
                        // Get the largest photo size (last element in array)
                        $largestPhoto = $photos[count($photos) - 1];
                        
                        // Get sender information
                        $from = $message->getFrom();
                        $senderName = $from ? ($from->getFirstName() . ' ' . ($from->getLastName() ?? '')) : 'Unknown';
                        
                        $posts[] = [
                            'photo_id' => $largestPhoto->getFileId(),
                            'caption' => $caption,
                            'shopee_links' => $shopeeLinks,
                            'date' => $message->getDate(),
                            'sender_name' => trim($senderName),
                            'message_id' => $message->getMessageId(),
                        ];
                    }
                }
                
                // Sort by date (newest first)
                usort($posts, function($a, $b) {
                    return $b['date'] - $a['date'];
                });
                
                return $posts;
            });
            
            // Pagination - do this BEFORE fetching file URLs
            $perPage = 20;
            $page = $request->get('page', 1);
            $total = count($fashionPosts);
            $totalPages = ceil($total / $perPage);
            $offset = ($page - 1) * $perPage;
            $paginatedPosts = array_slice($fashionPosts, $offset, $perPage);
            
            // Only get photo URLs for the current page (much faster!)
            foreach ($paginatedPosts as &$post) {
                // Cache each photo URL for 1 hour
                $cacheKey = 'photo_url_' . $post['photo_id'];
                $post['photo_url'] = Cache::remember($cacheKey, 3600, function () use ($telegram, $botToken, $post) {
                    $file = $telegram->getFile(['file_id' => $post['photo_id']]);
                    return 'https://api.telegram.org/file/bot' . $botToken . '/' . $file->getFilePath();
                });
            }
            
            return view('dashboard', [
                'posts' => $paginatedPosts,
                'error' => null,
                'currentPage' => $page,
                'totalPages' => $totalPages,
                'total' => $total
            ]);
            
        } catch (\Exception $e) {
            return view('dashboard', [
                'posts' => [],
                'error' => 'Error fetching posts: ' . $e->getMessage()
            ]);
        }
    }
}
