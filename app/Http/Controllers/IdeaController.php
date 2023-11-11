<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ide = Idea::where('user_id', Auth::user()->id)->get();
        return view('layouts.idea.data', ['ide' => $ide]);
        // return view('layouts.idea.data', compact(['ide']));
    }

    public function create() {
        return view('layouts.idea.add');
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
            'app_name' => 'required',
            'description' => 'required',
            'excellence' => 'required',
            'app_user' => 'required',
            'feature' => 'required',
        ]);

        $save = new Idea;
        $save->app_name = $request->app_name;
        $save->description = $request->description;
        $save->excellence = $request->excellence;
        $save->app_user = $request->app_user;
        $save->feature = $request->feature;
        $save->user_id = Auth::user()->id;
        $save->save();


        // $ide = Idea::where('user_id', Auth::user()->id)->get();
        // return view('layouts.idea.data', ['ide' => $ide])->with('success', 'Post created successfully!');
        return redirect('idea');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function show(Idea $idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idea $idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idea  $idea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idea $idea)
    {
        //
    }
}