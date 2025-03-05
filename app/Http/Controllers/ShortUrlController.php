<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Illuminate\Support\Facades\Validator;

class ShortUrlController extends Controller {
    public function index()
    {
        return view('welcome');
    }

    public function shorten(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'url' => 'required|url'
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        $originalUrl = $request->input('url');
        $existingUrl = ShortUrl::where('original_url', $originalUrl)->first();

        if ($existingUrl) {
            return redirect('/')->with('short_url', url($existingUrl->short_code));
        }

        do {
            $shortCode = ShortUrl::generateShortCode();
        } while (ShortUrl::where('short_code', $shortCode)->exists());

        $url = ShortUrl::create([
            'original_url' => $originalUrl,
            'short_code' => $shortCode
        ]);

        return redirect('/')->with('short_url', url($url->short_code));
    }

    public function redirect($code)
    {
        $url = ShortUrl::where('short_code', $code)->firstOrFail();
        return redirect($url->original_url);
    }
}
