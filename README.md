# l11_reverb_example
 Laravel 11 Simple Reverb Project

1. composer create-project --prefer-dist laravel/laravel l11_reverb_example
2. composer require pusher/pusher-php-server
3. npm install --save laravel-echo pusher-js
4. composer require beyondcode/laravel-websockets
5. php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider"
6. php artisan websockets:serve
7. npm install && npm run dev
