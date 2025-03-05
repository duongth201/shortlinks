# URL Shortener

A lightweight and efficient URL shortening service that allows users to generate short, easy-to-share links.

## Features

- Shorten long URLs into a 6-character code
- Redirect from short URL to original URL
- Basic validation for URL input
- Simple Bootstrap-based UI

## Requirements

- PHP >= 8.1
- Composer
- Laravel 10.x
- MySQL/PostgreSQL/SQLite

## Installation

Follow these steps to set up the application:

```bash
# 1. Clone the repository and navigate to the project folder
git clone https://github.com/[your-username]/shortlinks.git
cd shortlinks

# 2. Install dependencies
composer install

# 3. Copy environment file
cp .env.example .env

# 4. Configure database in .env file with your credentials:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=your_database_name
# DB_USERNAME=your_database_user
# DB_PASSWORD=your_database_password

# 5. Generate application key
php artisan key:generate

# 6. Run database migrations
php artisan migrate

# 7. Start the development server
php artisan serve
