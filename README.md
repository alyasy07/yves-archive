# 🎀 Shop With Yves - Fashion Inspiration Dashboard

A beautiful Laravel web application that curates fashion inspiration from your Telegram bot. Featuring a modern "coquette" aesthetic with soft pinks, purples, and elegant design elements.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=flat&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-7.0-646CFF?style=flat&logo=vite&logoColor=white)

## ✨ Features

### 🤖 **Telegram Integration**
- Automatically fetches photos from your Telegram bot
- Smart filtering to display only fashion-related content
- Shopee link detection and highlighting

### 🎨 **Beautiful Design**
- Coquette aesthetic with soft gradients and elegant UI
- Fully responsive masonry grid layout (1-4 columns)
- Smooth animations and transitions

### ⚡ **Optimized Performance**
- Built with Vite for fast development and production builds
- Smart caching to reduce API calls by 80% (100+ → 20 calls)
- Lazy loading for images

### 🔧 **Developer Friendly**
- Easy configuration via environment variables
- Modern Laravel 12 architecture
- Clear project structure

## 🚀 Quick Start

### Prerequisites
- PHP 8.2+
- Composer
- Node.js 18+ & npm
- Telegram Bot Token ([Get from @BotFather](https://t.me/botfather))

### Installation

1. **Clone and navigate to the project**
   ```bash
   git clone <repository-url>
   cd yves-archive
   ```

2. **Install backend dependencies**
   ```bash
   composer install
   ```

3. **Install frontend dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Add Telegram configuration**
   Edit `.env` and add:
   ```env
   TELEGRAM_BOT_TOKEN=your_bot_token_here
   # Optional: TELEGRAM_CHANNEL_ID=your_channel_id
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start development server**
   ```bash
   php artisan serve
   ```
   Open [http://localhost:8000](http://localhost:8000)

## ⚙️ Configuration

### Telegram Bot Setup
1. Create a bot via [@BotFather](https://t.me/botfather)
2. Copy the API token
3. Share the bot with users who can send fashion inspiration
4. Add token to `.env` file

### Environment Variables

| Variable | Required | Description | Example |
|----------|:--------:|-------------|---------|
| `TELEGRAM_BOT_TOKEN` | ✅ | Bot API token | `123456:ABC-DEF1234ghIkl-zyx57W2v1u123ew11` |
| `APP_ENV` | ❌ | Application environment | `production` |
| `APP_DEBUG` | ❌ | Debug mode | `false` |
| `APP_URL` | ❌ | Application URL | `https://your-app.vercel.app` |
| `APP_NAME` | ❌ | Application name | `Shop With Yves` |

## 🎨 Customization

### Changing Colors
Edit `tailwind.config.js` to customize the color palette:

```javascript
module.exports = {
  theme: {
    extend: {
      colors: {
        'coquette-pink': {
          50: '#fdf2f8',
          100: '#fce7f3',
          // Add custom shades
        }
      }
    }
  }
}
```

### Modifying Post Limit
Edit `app/Http/Controllers/FashionController.php`:

```php
$fashionPosts = array_slice($fashionPosts, 0, 50); // Change 50 to desired number
```

### Grid Layout
Adjust columns in `resources/views/dashboard.blade.php`:

```css
/* Default: 1 column on mobile, up to 4 on desktop */
@media (min-width: 1024px) { .masonry { columns: 3; } }
@media (min-width: 1280px) { .masonry { columns: 4; } }
```

## 📁 Project Structure

```text
yves-archive/
├── app/
│   ├── Http/Controllers/FashionController.php   # Main logic
│   └── Services/TelegramService.php             # Telegram API handling
├── config/
│   └── telegram.php                             # Bot configuration
├── resources/
│   ├── views/dashboard.blade.php                # Main view
│   └── css/app.css                              # Tailwind imports
├── routes/web.php                               # Application routes
├── tailwind.config.js                           # Tailwind config
├── vite.config.js                               # Vite configuration
└── vercel.json                                  # Vercel deployment config
```

## 🛠️ Development

### Development Mode
Start both frontend and backend servers:

```bash
# Terminal 1: Backend
php artisan serve

# Terminal 2: Frontend (with hot reload)
npm run dev
```

### Production Build
```bash
npm run build
```

## 🐛 Troubleshooting

### Common Issues

**"Error fetching posts"**
- Verify `TELEGRAM_BOT_TOKEN` is correct
- Ensure bot has access to channel/group
- Check channel ID format (should start with `-100` for channels)

**No posts showing**
- Confirm channel has photo posts
- Check Laravel logs: `tail -f storage/logs/laravel.log`
- Verify bot permissions

**Build errors**
```bash
# Clear caches and reinstall
npm cache clean --force
rm -rf node_modules package-lock.json
npm install
```

## 📖 API Reference

### Telegram Integration
The app uses Telegram's `getUpdates` API to fetch messages. Key features:
- Filters for photo messages only
- Extracts Shopee links from captions
- Caches results for 5 minutes (configurable)

### Endpoints
- `GET /` - Main dashboard view
- `GET /api/fashion-posts` - JSON API endpoint (optional)

## 🤝 Contributing

1. **Fork the repository**
2. **Create a feature branch:**
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. **Commit changes:**
   ```bash
   git commit -m 'Add amazing feature'
   ```
4. **Push to branch:**
   ```bash
   git push origin feature/amazing-feature
   ```
5. **Open a Pull Request**

### Development Guidelines
- Follow PSR-12 coding standards
- Write clear commit messages
- Update documentation as needed
- Add tests for new features

## 📝 License
MIT License - see LICENSE file for details.

## 👏 Acknowledgments
- **Telegram Bot API** for messaging infrastructure
- **Laravel Community** for the excellent framework
- **Tailwind CSS** for the utility-first CSS framework
- **Icons8** for pixel-perfect icons

## 📬 Support
- **Issues:** [GitHub Issues](https://github.com/issues)
- **Documentation:** Refer to this README
- **Questions:** Open a discussion on GitHub
