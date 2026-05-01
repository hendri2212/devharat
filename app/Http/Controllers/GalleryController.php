<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function indexPublic()
    {
        $galleries = Gallery::latest()->get();
        return view('gallery', compact('galleries'));
    }

    public function index()
    {
        $galleries = Gallery::with('event')->get();
        return view('layouts.gallery.index', compact('galleries'));
    }

    public function create()
    {
        $events = Event::all();
        return view('layouts.gallery.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'event_id' => $request->event_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('gallery-manage.index')->with('success', 'Gallery item created successfully.');
    }

    public function edit(Gallery $gallery_manage)
    {
        $gallery = $gallery_manage;
        $events = Event::all();
        return view('layouts.gallery.edit', compact('gallery', 'events'));
    }

    public function update(Request $request, Gallery $gallery_manage)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['event_id', 'title', 'description']);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($gallery_manage->image) {
                Storage::disk('public')->delete($gallery_manage->image);
            }
            $data['image'] = $request->file('image')->store('gallery', 'public');
        }

        $gallery_manage->update($data);

        return redirect()->route('gallery-manage.index')->with('success', 'Gallery item updated successfully.');
    }

    public function destroy(Gallery $gallery_manage)
    {
        if ($gallery_manage->image) {
            Storage::disk('public')->delete($gallery_manage->image);
        }
        $gallery_manage->delete();
        return redirect()->route('gallery-manage.index')->with('success', 'Gallery item deleted successfully.');
    }
}
