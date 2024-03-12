<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function list()
    {
        return view('frontend.news.list', ['news' => News::paginate()]);
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('frontend.news.show', ['news' => $news]);
    }
}
