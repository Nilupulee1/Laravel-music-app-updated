<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index(){
        $songs = Song::all();
        return view('songs.index', ['songs' => $songs]);
       
    }

    public function create(){
        return view('songs.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'genre' => 'required|string|max:50',
            'year' => 'required|integer',
        ]);

        $song = Song::create($validated);
        return redirect(route('song.index'));
    }

    public function edit(Song $song){
        return view('songs.edit', ['song' => $song]);
    }

    public function update(Song $song, Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'genre' => 'required|string|max:50',
            'year' => 'required|integer',
        ]);

        $song->update($validated);

        return redirect(route('song.index'))->with('success', 'Song Updated Successfully');
    }

    public function destroy(Song $song){
        $song->delete();

        return redirect(route('song.index'))->with('success', 'Song Deleted Successfully');
    }
}
