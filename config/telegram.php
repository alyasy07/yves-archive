<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Telegram Bot Token
    |--------------------------------------------------------------------------
    |
    | Your Telegram Bot Token from BotFather
    |
    */
    'bot_token' => env('TELEGRAM_BOT_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | Telegram Channel ID
    |--------------------------------------------------------------------------
    |
    | The ID of your Telegram channel (starts with -100)
    |
    */
    'channel_id' => env('TELEGRAM_CHANNEL_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | HTTP Client Configuration
    |--------------------------------------------------------------------------
    |
    | Custom configurations for the HTTP client
    |
    */
    'http_client_handler' => [
        'verify' => false, // Disable SSL verification for local development
    ],
];
