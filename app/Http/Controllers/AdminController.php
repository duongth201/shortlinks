<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $urls = ShortUrl::latest()->paginate(10);
        return view('admin.urls', compact('urls'));
    }

    public function destroy(ShortUrl $url)
    {
        $url->delete();
        return redirect()->route('admin.urls')->with('success', 'URL deleted successfully.');
    }
}
