<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view("Home");
    // }
    public function index() { 
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, post $post)
    {
        $validatedData = $request->validate([ 'title' => 'required|max:255', 'content' => 'required','image' => 'image|mimes:jpeg,png,jpg,gif|max:2048','author_id' =>'required' ]);
        $post = new post;
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->author_id = $validatedData['author_id'];
        // $post->author_id = auth()->user()->id;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $post->image = str_replace('public/', '', $imagePath);
            }
        $post->save();

        return redirect(route('posts.index'));
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
