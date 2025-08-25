Artisan 指令建立Model、Migration、Factory、Seeder、
Resource、Test

```bash
php artisan make:model Models/ShortUrl -mfsr
php artisan make:controller Api/ShortUrlController --api
php artisan make:request StoreShortUrlRequest
php artisan make:request UpdateShortUrlRequest
php artisan make:test ShortUrlApiTest
```

修正AI誤導指令
```bash
php artisan make:model ShortUrl -mfsr
```

在 app/Http/Requests/ 新增 UpdateShortUrlRequest.php
```bash
php artisan make:request UpdateShortUrlRequest
```

向 ChatGPT 發問：  
在 Laravel 12 ，沒有 Resource 檔案，如何用 php artisan 生成

回答如下：
在 Laravel 12 中，Resource 依然存在，只是名稱是 **API Resource**，而且 artisan 指令不是 `make:resource` 嗎？

✅ 正確的方式：
```bash
php artisan make:resource UserResource
```
註解：因專案需要，以下把 UserResource 更改為 `ShortUrlResource`
