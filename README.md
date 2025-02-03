# l11_reverb_example
 Laravel 11 Simple Reverb Project

1. composer create-project --prefer-dist laravel/laravel l11_reverb_example
2. composer require pusher/pusher-php-server (this is legacy method)
3. php artisan install:broadcasting (this is the new method)
4. npm install --save laravel-echo pusher-js
5. npm install && npm run dev
6. php artisan reverb:start --debug (the end --debug part is optional and only required if you want to actually see what reverb is doing)
