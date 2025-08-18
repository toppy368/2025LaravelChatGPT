Artisan 指令建立Model、Migration、Factory、Seeder、
Resource、Test

```bash
php artisan make:model Models/ShortUrl -mfsr
php artisan make:controller Api/ShortUrlController --api
php artisan make: request StoreShortUrlRequest
php artisan make: request UpdateShortUrlRequest
php artisan make:test ShortUrlApiTest
