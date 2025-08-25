
向 ChatGPT 發問：  
在 Laravel 12 ，沒有 Resource 檔案，如何用 php artisan 生成

回答如下：
在 Laravel 12 中，Resource 依然存在，只是名稱是 **API Resource**，而且 artisan 指令不是 `make:resource` 嗎？

✅ 正確的方式：
```bash
php artisan make:resource UserResource
```
會在 `app/Http/Resources/` 下生成一個 `UserResource.php`，內容大致如下：
```php
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'email'=> $this->email,
        ];
    }
}
```

