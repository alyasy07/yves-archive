<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop With Yves Archive </title>
    <link rel="icon" type="image/png" href="https://img.icons8.com/ios-filled/50/F25081/pixel-star.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Righteous&family=Poppins:wght@300;400;500&family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFF9FC;
            background-image: radial-gradient(#FFD6E7 2px, transparent 2px), radial-gradient(#FFE4F2 1px, transparent 1px);
            background-size: 60px 60px, 30px 30px;
            background-position: 0 0, 15px 15px;
            color: #5A2A44;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .petal {
            position: fixed;
            background: #FFD6E7;
            border-radius: 50% 0 50% 50%;
            opacity: 0.3;
            z-index: -1;
            animation: fall linear infinite;
        }

        @keyframes fall {
            to { transform: translateY(100vh) rotate(360deg); }
        }

        .ribbon-nav {
            background: linear-gradient(135deg, #FFB6D9, #FF8EC7);
            padding: 20px 40px;
            border-radius: 0 0 40px 40px;
            box-shadow: 0 5px 20px rgba(255, 182, 217, 0.3);
            position: relative;
            margin-bottom: 40px;
        }

        .ribbon-nav::before, .ribbon-nav::after {
            content: '';
            position: absolute;
            width: 50px;
            height: 50px;
            background: #FF8EC7;
            border-radius: 50%;
            top: -25px;
            box-shadow: 0 5px 15px rgba(255, 142, 199, 0.4);
        }

        .ribbon-nav::before { left: 30px; }
        .ribbon-nav::after { right: 30px; }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 40px;
            list-style: none;
        }

        .nav-links a {
            color: #FFF9FC;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 8px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-shadow: 1px 1px 2px rgba(90, 42, 68, 0.2);
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .nav-links a.active {
            background: #FFE4F2;
            color: #FF8EC7;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
            animation: fadeInDown 1s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dashboard-header h1 {
            font-family: 'Fredoka', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #FF8EC7, #FFB6D9, #FFA8D6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            letter-spacing: 2px;
            animation: headerPulse 3s ease-in-out infinite;
            position: relative;
            display: inline-block;
        }
        
        @keyframes headerPulse {
            0%, 100% {
                transform: scale(1);
                filter: drop-shadow(0 2px 10px rgba(255, 142, 199, 0.3));
            }
            50% {
                transform: scale(1.03);
                filter: drop-shadow(0 4px 20px rgba(255, 142, 199, 0.5));
            }
        }
        
        .dashboard-header h1 img {
            animation: starRotate 4s linear infinite;
            display: inline-block;
        }
        
        @keyframes starRotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .dashboard-header h2 {
            font-family: 'Quicksand', sans-serif;
            font-size: 1.8rem;
            font-weight: 500;
            color: #FFB6D9;
            animation: fadeIn 1.5s ease-out 0.3s both;
            letter-spacing: 1px;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Search Bar */
        .search-section {
            margin-bottom: 40px;
            text-align: center;
        }

        .search-box {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }

        .search-input {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border-radius: 50px;
            border: 2px solid #FFD6E7;
            background: white;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 182, 217, 0.1);
        }

        .search-input:focus {
            outline: none;
            border-color: #FF8EC7;
            box-shadow: 0 8px 20px rgba(255, 142, 199, 0.2);
        }

        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #FF8EC7;
        }

        .search-results {
            margin-top: 10px;
            color: #FF8EC7;
            font-size: 0.9rem;
        }

        .ribbon-separator {
            height: 3px;
            background: linear-gradient(90deg, transparent, #FFB6D9, #FF8EC7, #FFB6D9, transparent);
            margin: 40px 0;
            position: relative;
        }

        .ribbon-separator::before {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #FFF9FC;
            padding: 0 15px;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .ribbon-separator::before img {
            width: 100%;
            height: 100%;
        }

        .collection-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: #FF8EC7;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .collection-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #FFA8D6, transparent);
        }

        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
        }

        .hero-section {
            background: linear-gradient(135deg, #FFE4F2, #FFD6E7);
            border-radius: 30px;
            padding: 60px 40px;
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(255, 182, 217, 0.2);
        }

        .hero-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: #FF8EC7;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #5A2A44;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.8;
        }

        .hero-emoji {
            font-size: 4rem;
            margin-bottom: 20px;
            display: block;
        }

        .feature-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 25px;
            text-align: center;
            border: 2px solid #FFD6E7;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(255, 182, 217, 0.3);
        }

        .feature-card h3 {
            font-family: 'Playfair Display', serif;
            color: #FF8EC7;
            font-size: 1.5rem;
            margin: 20px 0 15px;
        }

        .feature-card p {
            color: #5A2A44;
            line-height: 1.6;
        }

        .list-view .image-card {
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 200px;
        }

        .list-view .card-image {
            width: 300px;
            height: 100%;
            flex-shrink: 0;
        }

        .list-view .card-buttons {
            flex-direction: column;
            height: 100%;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .list-view .image-card {
                flex-direction: column;
                height: auto;
            }
            .list-view .card-image {
                width: 100%;
                height: 300px;
            }
        }

        .page-btn {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            border: 2px solid #FFD6E7;
            border-radius: 50%;
            color: #FF8EC7;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(255, 182, 217, 0.15);
            cursor: pointer;
        }
        
        .page-btn:hover {
            background: linear-gradient(135deg, #FFB6D9, #FF8EC7);
            color: white;
            transform: scale(1.1);
            border-color: #FF8EC7;
            box-shadow: 0 4px 15px rgba(255, 142, 199, 0.3);
        }
        
        .page-btn.active {
            background: linear-gradient(135deg, #FFB6D9, #FF8EC7);
            color: white;
            border-color: #FF8EC7;
            transform: scale(1.15);
            box-shadow: 0 4px 15px rgba(255, 142, 199, 0.4);
            position: relative;
        }
        
        .page-btn.active::before {
            content: '';
            position: absolute;
            top: -8px;
            right: -8px;
            width: 16px;
            height: 16px;
            background-image: url('https://img.icons8.com/ios-filled/50/F25081/pixel-star.png');
            background-size: contain;
            background-repeat: no-repeat;
            filter: brightness(0) invert(1);
        }
        
        .page-btn.prev-btn,
        .page-btn.next-btn {
            background: linear-gradient(135deg, #FFE4F2, #FFD6E7);
            font-size: 1.2rem;
        }
        
        .page-btn.prev-btn:hover,
        .page-btn.next-btn:hover {
            background: linear-gradient(135deg, #FFB6D9, #FF8EC7);
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .image-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
            border: 2px solid #FFD6E7;
            transform: rotate(var(--rotate, 0deg));
            opacity: 0;
            animation: fadeInCard 0.5s ease forwards;
        }

        @keyframes fadeInCard {
            to { opacity: 1; }
        }

        .image-card:nth-child(odd) { --rotate: -1deg; }
        .image-card:nth-child(even) { --rotate: 1deg; }

        .image-card:hover {
            transform: rotate(0deg) scale(1.05);
            box-shadow: 0 20px 40px rgba(255, 182, 217, 0.3);
        }

        .card-image {
            width: 100%;
            height: 500px;
            background: linear-gradient(45deg, #FFE4F2, #FFD6E7);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ribbon-corner {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(255, 168, 214, 0.9);
            color: white;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            padding: 8px;
            box-shadow: 0 2px 8px rgba(255, 142, 199, 0.3);
        }
        
        .ribbon-corner img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: drop-shadow(0 1px 2px rgba(0,0,0,0.1));
        }

        .card-buttons {
            padding: 15px;
            display: flex;
            gap: 10px;
        }

        .bow-button {
            flex: 1;
            background: linear-gradient(135deg, #FFA8D6, #FF8EC7);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 25px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.85rem;
        }

        .bow-button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(255, 168, 214, 0.4);
        }

        .telegram-button {
            background: linear-gradient(135deg, #FF8EC7, #FFA8D6);
        }

        /* Modals */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.active { display: flex; }

        .modal-content {
            background: white;
            border-radius: 30px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(255, 142, 199, 0.3);
            animation: modalSlideIn 0.3s ease;
        }

        @keyframes modalSlideIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal-header {
            background: linear-gradient(135deg, #FFA8D6, #FF8EC7);
            padding: 20px 30px;
            border-radius: 30px 30px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            color: white;
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
        }

        .close-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .close-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 30px;
            max-height: 60vh;
            overflow-y: auto;
        }

        .modal-body img {
            max-width: 100%;
            max-height: 60vh;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(255, 142, 199, 0.2);
        }

        .caption-text {
            color: #5A2A44;
            line-height: 1.6;
            white-space: pre-wrap;
        }

        .caption-text a {
            color: #FF8EC7;
            text-decoration: none;
            font-weight: 500;
        }

        .caption-text a:hover {
            text-decoration: underline;
        }

        .modal-footer {
            padding: 20px 30px;
            background: #FFF9FC;
            border-radius: 0 0 30px 30px;
            text-align: right;
        }

        .modal-footer button {
            background: linear-gradient(135deg, #FFA8D6, #FF8EC7);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .modal-footer button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 168, 214, 0.4);
        }

        .error-message {
            background: #FFE4F2;
            border: 2px solid #FFB6D9;
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            color: #FF8EC7;
            margin: 40px 0;
        }

        @media (max-width: 768px) {
            .dashboard-header h1 { font-size: 2.5rem; letter-spacing: 1px; }
            .nav-links { flex-direction: column; gap: 15px; }
            .ribbon-nav { padding: 15px 20px; }
            .image-grid { grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px; }
        }
    </style>
</head>
<body>
    <div id="petals-container"></div>

    <nav class="ribbon-nav">
        <div style="text-align: center;">
            <h2 style="color: white; font-family: 'Fredoka', sans-serif; font-size: 2rem; margin: 0; font-weight: 600; letter-spacing: 1px;">Shop With Yves Fashion Archive</h2>
            <p style="color: #FFE4F2; margin-top: 8px; font-size: 0.95rem; font-family: 'Quicksand', sans-serif; font-weight: 400;">Curated Fashion Inspiration from Telegram</p>
        </div>
    </nav>

    <div class="dashboard-container">
        <header class="dashboard-header">
            <h1>
                <img src="https://img.icons8.com/ios-filled/50/F25081/pixel-star.png" style="width: 32px; height: 32px; display: inline-block; vertical-align: middle; margin-right: 8px;" alt="star">
                Shop With Yves
                <img src="https://img.icons8.com/ios-filled/50/F25081/pixel-star.png" style="width: 32px; height: 32px; display: inline-block; vertical-align: middle; margin-left: 8px;" alt="star">
            </h1>
            <h2>Fashion Inspiration Dashboard</h2>
        </header>

        @if($error)
            <div class="error-message">
                <h3>{{ $error }}</h3>
            </div>
        @endif

        @if(count($posts) > 0)
            <div class="search-section">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" id="searchInput" class="search-input" placeholder="Search fashion posts..." onkeyup="filterPosts()">
                </div>
                <p id="searchResults" class="search-results"></p>
            </div>

            <div class="ribbon-separator">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #FFF9FC; padding: 0 15px; width: 30px; height: 30px; display: flex; align-items: center; justify-content: center;">
                    <img src="https://img.icons8.com/ios-filled/50/F25081/pixel-star.png" alt="star" style="width: 100%; height: 100%;">
                </div>
            </div>

            <h2 class="collection-title">Latest Fashion Inspiration</h2>

            <div class="image-grid">
                @foreach($posts as $index => $post)
                    <div class="image-card" data-caption="{{ strtolower($post['caption'] ?? '') }}" style="animation-delay: {{ $index * 0.1 }}s">
                        <div class="card-image" onclick="showImageModal('{{ $post['photo_url'] }}')">
                            <img src="{{ $post['photo_url'] }}" alt="Fashion inspiration" loading="lazy">
                        </div>
                        <div class="ribbon-corner">
                            <img src="https://img.icons8.com/wired/64/F25081/pixel-cat.png" alt="pixel-cat">
                        </div>
                        <div class="card-buttons">
                            @if($post['caption'])
                                <button class="bow-button" onclick="showCaptionModal(this)" data-caption="{{ str_replace('"', '&quot;', $post['caption']) }}">
                                    <img src="https://img.icons8.com/fluency-systems-filled/48/FFFFFF/pixel-heart.png" alt="pixel-heart" style="width: 18px; height: 18px; display: inline-block; vertical-align: middle; margin-right: 6px;">
                                    View
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            
            @if($totalPages > 1)
                <div class="pagination-container" style="display: flex; flex-direction: column; align-items: center; margin-top: 40px; gap: 15px;">
                    <div class="pagination-info" style="background: linear-gradient(135deg, #FFE4F2, #FFD6E7); padding: 8px 20px; border-radius: 25px; color: #5A2A44; font-size: 0.9rem; font-weight: 500; box-shadow: 0 2px 10px rgba(255, 182, 217, 0.2);">
                        {{ $currentPage }} / {{ $totalPages }} <span style="opacity: 0.7;">• {{ $total }} posts</span>
                    </div>
                    
                    <div class="pagination-buttons" style="display: flex; gap: 8px; align-items: center;">
                        @if($currentPage > 1)
                            <a href="?page={{ $currentPage - 1 }}" class="page-btn prev-btn" style="text-decoration: none;">
                                ←
                            </a>
                        @endif
                        
                        @php
                            $start = max(1, $currentPage - 2);
                            $end = min($totalPages, $currentPage + 2);
                        @endphp
                        
                        @if($start > 1)
                            <a href="?page=1" class="page-btn" style="text-decoration: none;">1</a>
                            @if($start > 2)
                                <span style="color: #FF8EC7; padding: 0 5px;">...</span>
                            @endif
                        @endif
                        
                        @for($i = $start; $i <= $end; $i++)
                            <a href="?page={{ $i }}" class="page-btn {{ $i == $currentPage ? 'active' : '' }}" style="text-decoration: none;">
                                {{ $i }}
                            </a>
                        @endfor
                        
                        @if($end < $totalPages)
                            @if($end < $totalPages - 1)
                                <span style="color: #FF8EC7; padding: 0 5px;">...</span>
                            @endif
                            <a href="?page={{ $totalPages }}" class="page-btn" style="text-decoration: none;">{{ $totalPages }}</a>
                        @endif
                        
                        @if($currentPage < $totalPages)
                            <a href="?page={{ $currentPage + 1 }}" class="page-btn next-btn" style="text-decoration: none;">
                                →
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        @else
            <div class="error-message">
                <h3>✨ No posts found</h3>
                <p style="margin-top: 10px;">Send photos to your bot on Telegram to display them here!</p>
            </div>
        @endif
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="modal" onclick="closeImageModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <div class="modal-header">
                <h3>Fashion Inspiration</h3>
                <button class="close-btn" onclick="closeImageModal()">×</button>
            </div>
            <div class="modal-body" style="text-align: center;">
                <img id="modalImage" src="" alt="Fashion inspiration">
            </div>
            <div class="modal-footer">
                <button onclick="closeImageModal()">Close</button>
            </div>
        </div>
    </div>

    <!-- Caption Modal -->
    <div id="captionModal" class="modal" onclick="closeCaptionModal()">
        <div class="modal-content" onclick="event.stopPropagation()">
            <div class="modal-header">
                <h3>Caption</h3>
                <button class="close-btn" onclick="closeCaptionModal()">×</button>
            </div>
            <div class="modal-body">
                <div id="captionContent" class="caption-text"></div>
            </div>
            <div class="modal-footer">
                <button onclick="closeCaptionModal()">Close</button>
            </div>
        </div>
    </div>

    <script>
        function createPetals() {
            const container = document.getElementById('petals-container');
            const petalCount = 15;
            
            for (let i = 0; i < petalCount; i++) {
                const petal = document.createElement('div');
                petal.classList.add('petal');
                const size = Math.random() * 20 + 10;
                const startX = Math.random() * 100;
                const duration = Math.random() * 10 + 10;
                const delay = Math.random() * 5;
                
                petal.style.width = `${size}px`;
                petal.style.height = `${size}px`;
                petal.style.left = `${startX}vw`;
                petal.style.animationDuration = `${duration}s`;
                petal.style.animationDelay = `${delay}s`;
                
                container.appendChild(petal);
            }
        }

        function filterPosts() {
            const searchInput = document.getElementById('searchInput');
            const searchTerm = searchInput.value.toLowerCase();
            const posts = document.querySelectorAll('.image-card');
            const searchResults = document.getElementById('searchResults');
            let visibleCount = 0;
            
            posts.forEach(post => {
                const caption = post.getAttribute('data-caption');
                if (caption.includes(searchTerm)) {
                    post.style.display = 'block';
                    visibleCount++;
                } else {
                    post.style.display = 'none';
                }
            });
            
            if (searchTerm) {
                searchResults.textContent = `Found ${visibleCount} post${visibleCount !== 1 ? 's' : ''}`;
            } else {
                searchResults.textContent = '';
            }
        }

        function showImageModal(imageUrl) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = imageUrl;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        function showCaptionModal(button) {
            const caption = button.getAttribute('data-caption');
            const modal = document.getElementById('captionModal');
            const content = document.getElementById('captionContent');
            
            const urlRegex = /(https?:\/\/[^\s]+)/g;
            const captionWithLinks = caption.replace(urlRegex, '<a href="$1" target="_blank">$1</a>');
            
            content.innerHTML = captionWithLinks;
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeCaptionModal() {
            const modal = document.getElementById('captionModal');
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeCaptionModal();
                closeImageModal();
            }
        });

        window.addEventListener('load', function() {
            createPetals();
            animatePagination();
        });
        
        function animatePagination() {
            const pageButtons = document.querySelectorAll('.page-btn');
            if (pageButtons.length === 0) return;
            
            pageButtons.forEach((btn, index) => {
                btn.style.opacity = '0';
                btn.style.transform = 'scale(0) rotate(180deg)';
                
                setTimeout(() => {
                    btn.style.transition = 'all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    btn.style.opacity = '1';
                    btn.style.transform = 'scale(1) rotate(0deg)';
                }, index * 50);
            });
            
            const info = document.querySelector('.pagination-info');
            if (info) {
                info.style.opacity = '0';
                info.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    info.style.transition = 'all 0.6s ease';
                    info.style.opacity = '1';
                    info.style.transform = 'translateY(0)';
                }, 100);
            }
        }
    </script>
</body>
</html>
