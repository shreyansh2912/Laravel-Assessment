<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin-pages/admin-addsongs');
    }

    public function list(){
        $data = Songs::all();
        return view('admin-pages/admin-song_list',compact('data'));
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
    public function store(Request $request , Songs $songs)
    {
        // echo "<pre>";
        // print_r($request->all());

        $request->validate([
            'song_name' => 'required',
            'singer' => 'required',
            'album' => 'required',
            'genre' => 'required',
            'song_file' => 'required',
            'image' => 'required|image',
        ]);
        $img = "Thumbnail/".time()."-image.".$request->file('image')->getClientOriginalExtension();
         $request->file('image')->storeAs('public/uploads',$img);

        $song = "Song/".time()."-song.".$request->file('song_file')->getClientOriginalExtension();
         $request->file('song_file')->storeAs('public/uploads',$song);

        $songs = new Songs;
        $songs->song_name = $request->song_name;
        $songs->singer = $request->singer;
        $songs->album = $request->album;
        $songs->genre = $request->genre;
        $songs->song_file = $song;
        $songs->image = $img;
        $songs->save();
        return redirect('admin-addSongs');
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
        $data = Songs::find($id);
        // @dd($data);
        return view('admin-pages/admin-update-song',compact('data'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Songs::find($id);
        // $song->
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Songs::destroy($id);
        return redirect('/admin-SongList');
    }
}
