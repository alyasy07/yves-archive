# 🎀 Shop With Yves - Fashion Inspo Dashboard

A beautiful Laravel-based web application that showcases fashion inspiration sent to your Telegram bot. Built with a modern "coquette" aesthetic featuring soft pinks, purples, and elegant design elements.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=flat&logo=tailwind-css&logoColor=white)

## ✨ Features

- 🤖 **Telegram Bot Integration** - Automatically fetches photos sent to your bot
- 📸 **Photo Filtering** - Displays only messages containing fashion photos
- 🛍️ **Shopee Link Extraction** - Automatically detects and highlights shopping links
- 🎨 **Coquette Aesthetic** - Beautiful gradient backgrounds, rounded corners, and soft shadows
- 📱 **Responsive Masonry Grid** - Adapts from 1 to 4 columns based on screen size
- ⚡ **Built with Vite** - Fast development and optimized production builds

## 🚀 Quick Start

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & npm
- A Telegram Bot Token (from [@BotFather](https://t.me/botfather))

### Installation

1. **Clone the repository**
   ```bash
   cd c:\laragon\www\yves-archive
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Set up Telegram credentials**
   
   Edit your `.env` file and add:
   ```env
   TELEGRAM_BOT_TOKEN=your_bot_token_from_botfather
   ```

6. **Build frontend assets**
   ```bash
   npm run build
   ```

7. **Run the application**
   ```bash
   php artisan serve
   ```

   Visit [http://localhost:8000](http://localhost:8000) to see your fashion dashboard!

## � Deploy to Vercel

### One-Click Deploy

[![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https://github.com/alyasy07/yves-archive)

### Manual Deployment

1. **Install Vercel CLI**
   ```bash
   npm install -g vercel
   ```

2. **Login to Vercel**
   ```bash
   vercel login
   ```

3. **Deploy**
   ```bash
   vercel
   ```

4. **Set Environment Variables on Vercel**
   
   Go to your project settings on Vercel Dashboard and add:
   - `APP_KEY` - Generate with `php artisan key:generate --show`
   - `TELEGRAM_BOT_TOKEN` - Your bot token from BotFather
   - `APP_ENV` - Set to `production`
   - `APP_DEBUG` - Set to `false`

5. **Deploy to Production**
   ```bash
   vercel --prod
   ```

### Important Notes for Vercel

- Cache files are stored in `/tmp` directory (ephemeral)
- For persistent storage, consider using external cache services (Redis, Memcached)
- Sessions use cookie driver for serverless compatibility
- Build assets before deploying: `npm run build`

## 🔧 Configuration

### Getting Your Telegram Bot Token

1. Open Telegram and search for [@BotFather](https://t.me/botfather)
2. Send `/newbot` and follow the instructions
3. Copy the bot token provided
4. Users can now send photos directly to your bot

### Environment Variables

| Variable | Description | Example |
|----------|-------------|---------|
| `TELEGRAM_BOT_TOKEN` | Your bot token from BotFather | `123456789:ABCdefGHIjklMNOpqrsTUVwxyz` |
| `APP_NAME` | Application name | `Shop With Yves` |
| `APP_URL` | Application URL | `http://localhost` or your Vercel URL |
| `APP_KEY` | Application encryption key | `base64:...` (generate with artisan) |
| `APP_ENV` | Environment | `local` or `production` |
| `APP_DEBUG` | Debug mode | `true` or `false` |

## 🎨 Customization

### Changing Colors

Edit [tailwind.config.js](tailwind.config.js) to customize the color palette:

```javascript
theme: {
  extend: {
    colors: {
      pink: {
        // Your custom pink shades
      },
      purple: {
        // Your custom purple shades
      },
    },
  },
}
```

### Modifying Post Count

Edit [app/Http/Controllers/FashionController.php](app/Http/Controllers/FashionController.php), line 48:

```php
$fashionPosts = array_slice($fashionPosts, 0, 50); // Change 50 to your desired limit
```

### Grid Layout

Adjust the masonry grid in [resources/views/dashboard.blade.php](resources/views/dashboard.blade.php):

```css
.masonry {
    column-count: 1; /* Mobile: 1 column */
}

@media (min-width: 640px) {
    .masonry {
        column-count: 2; /* Tablet: 2 columns */
    }
}

@media (min-width: 1024px) {
    .masonry {
        column-count: 3; /* Desktop: 3 columns */
    }
}

@media (min-width: 1280px) {
    .masonry {
        column-count: 4; /* Large desktop: 4 columns */
    }
}
```

## 📁 Project Structure

```
yves-archive/
├── app/
│   └── Http/
│       └── Controllers/
│           └── FashionController.php    # Main controller for fetching posts
├── config/
│   └── telegram.php                     # Telegram configuration
├── resources/
│   ├── css/
│   │   └── app.css                      # Tailwind CSS imports
│   └── views/
│       └── dashboard.blade.php          # Main dashboard view
├── routes/
│   └── web.php                          # Application routes
├── .env                                 # Environment configuration
├── tailwind.config.js                   # Tailwind CSS configuration
└── vite.config.js                       # Vite build configuration
```

## 🛠️ Development

### Watch mode for frontend development

```bash
npm run dev
```

This will start Vite's development server with hot module replacement.

### Running Laravel development server

```bash
php artisan serve
```

## 📦 Tech Stack

- **Backend Framework**: Laravel 12
- **Telegram SDK**: [irazasyed/telegram-bot-sdk](https://github.com/irazasyed/telegram-bot-sdk)
- **Frontend Framework**: Tailwind CSS 4.0
- **Build Tool**: Vite 7
- **Template Engine**: Blade
- **PHP Version**: 8.2+

## 🤝 Contributing

Contributions are welcome! Feel free to:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 🎓 Skills Learned

Building this project provided hands-on experience with:

### Backend Development
- **Laravel Framework** - MVC architecture, routing, controllers, and blade templating
- **PHP 8.2+** - Modern PHP features and best practices
- **API Integration** - Working with Telegram Bot API (getUpdates, getFile)
- **Caching Strategies** - Implementing Laravel Cache for performance optimization
- **Data Processing** - Filtering, sorting, and pagination of API responses

### Frontend Development
- **CSS Animations** - Keyframes, transforms, and transitions for smooth UI effects
- **Responsive Design** - Mobile-first approach with CSS Grid and Flexbox
- **Custom UI Design** - Creating a cohesive "coquette" aesthetic from scratch
- **Gradient & Effects** - Advanced CSS gradients, shadows, and backdrop filters
- **Icon Integration** - Using external icon libraries (Icons8 pixel icons)

### Performance Optimization
- **API Call Reduction** - Smart caching to minimize external requests (100+ → 20 calls)
- **Pagination** - Implementing efficient data pagination (20 items per page)
- **Lazy Loading** - Image loading optimization with browser native lazy loading
- **Cache Management** - Time-based cache expiration (5 min updates, 1 hour photos)

### UX/UI Patterns
- **Modal Interactions** - Building accessible modals for image preview and captions
- **Loading States** - Managing asynchronous data fetching and error handling
- **Visual Feedback** - Hover effects, active states, and smooth animations
- **Typography & Fonts** - Selecting and pairing Google Fonts (Fredoka, Quicksand)

### Tools & Workflow
- **Composer** - PHP dependency management
- **npm** - JavaScript package management
- **Vite** - Modern frontend build tool
- **Git** - Version control and project documentation
- **Environment Config** - Managing sensitive credentials with .env files

### Problem Solving
- **Debugging API Issues** - Troubleshooting Telegram API responses
- **Performance Bottlenecks** - Identifying and fixing slow page loads
- **Cross-browser Compatibility** - Ensuring consistent rendering across browsers
- **Data Extraction** - Regex patterns for extracting Shopee links from captions

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).

## 💖 Acknowledgments

- Built with love for fashion enthusiasts
- Inspired by the coquette aesthetic
- Powered by the Telegram Bot API
- Special thanks to the Laravel and Tailwind CSS communities

## 🐛 Troubleshooting

### "Error fetching posts" message

1. Verify your `TELEGRAM_BOT_TOKEN` is correct
2. Ensure your bot is added as an admin to your channel
3. Check that `TELEGRAM_CHANNEL_ID` starts with `-100`
4. Make sure your bot has permission to read messages

### No posts showing

1. Confirm your channel has posts with photos
2. Verify the bot can access channel history
3. Check Laravel logs in `storage/logs/laravel.log`

### Build errors

```bash
# Clear npm cache
npm cache clean --force

# Reinstall dependencies
rm -rf node_modules
npm install

# Rebuild
npm run build
```

## 📧 Contact

For questions or support, please open an issue on GitHub.

---

Made with 💖 for fashion lovers
#   F o r c e   V e r c e l   R e d e p l o y 
 
 
