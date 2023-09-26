#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

# Установка Node Version Manager (nvm)
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash

# Закрыть и открыть новое терминальное окно или выполнить source ~/.bashrc, чтобы активировать nvm
source ~/.bashrc

# Установка Node.js с помощью nvm
nvm install node

# Убедитесь, что Node.js установлен правильно
node --version

# Установка npm
npm install -g npm

echo "Building frontend assets with Vite..."
npm run build

echo "Building frontend assets with Vite..."
npm run build
