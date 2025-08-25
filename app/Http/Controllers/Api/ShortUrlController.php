<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ShortUrl;
use App\Http\Requests\StoreShortUrlRequest;
use App\Http\Requests\UpdateShortUrlRequest;
use App\Http\Resources\ShortUrlResource;

class ShortUrlController extends Controller
{
    public function index()
    {
        return ShortUrlResource::collection (ShortUrl::all());
    }

    public function store (StoreShortUrlRequest $request)
    {
        $shortUrl = ShortUrl::create([
            'original_url' => $request->original_url,
            'short_code' => ShortUrl::generateCode(),
        ]);

        return new ShortUrlResource($shortUrl);
    }
    public function show($id)
    {
        $shortUrl = ShortUrl::find($id);

        if (!$shortUrl) {
            return response()->json(['error' => 'Short URL not found.'], 404);
        }
        return new ShortUrlResource($shortUrl);
    }
    public function update(UpdateShortUrlRequest $request, $id)
    {
        $shortUrl = ShortUrl::findorFall($id);
        $shortUrl ->update($request->only('original_url'));

        return new ShortUrlResource($shortUrl);
    }
    public function destroy($id)
    {
        $shortUrl = ShortUrl::findorFall($id);
        $shortUrl ->delete();

        return response()->noContent();
    }

}
