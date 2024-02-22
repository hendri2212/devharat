<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate();
        return view('backend.news.index', [
            'title' => 'Manajemen Berita',
            'data' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create', [
            'title' => 'Tambah Berita'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->storeAs('news', $image->hashName(), 'public');
        }

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path ?? null,
            'slug' => $request->slug,
            'user_id' => auth()->user()->id ?? null
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Berita baru ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('backend.news.edit', [
            'title' => 'Edit Berita',
            'data' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'image' => 'mimes:png,jpg,jpeg'
        ]);

        $news = News::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $news->image = $image->storeAs('news', $image->hashName(), 'public');
        }

        $news->title = $request->title;
        $news->content = $request->content;
        $news->slug = $request->slug;
        $news->user_id = auth()->user()->id ?? null;
        $news->save();

        return redirect()->route('admin.news.index')->with('success', 'Berita di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita di hapus');
    }
}
