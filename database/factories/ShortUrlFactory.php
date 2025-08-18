<?php

namespace Database\Factories;

use App\Models\ShortUrl;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShortUrlFactory extends Factory
{

    public function definition(): array
    {
        return [
            'original_url' => $this->faker->url(),
            'short_code' => ShortUrl::generateCode(),
        ];
    }

}
