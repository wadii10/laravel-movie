<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('movie.create', compact('categories'));
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
            'name' => 'required',
            'catId' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'trailer' => 'required'
        ]);

        $inputs = $request->all();

        if ($image = $request->file('image')) {
            $newfile = time() . "." . $image->getClientOriginalExtension();
            $image->move('images/', $newfile);
            $inputs['image'] = $newfile;
        }
        Movie::create($inputs);

        return redirect()->route('movie.index')->with('message', 'Movie created succesfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $categories = Category::all();
        return view('movie.edit', compact('movie','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'name' => 'required',
            'catId' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'trailer' => 'required'
        ]);
        $inputs = $request->all();

        if ($image = $request->file('image')) {
            $newfile = time() . "." . $image->getClientOriginalExtension();
            $image->move('images/', $newfile);
            $inputs['image'] = $newfile;
        }
        $movie->update($inputs);
        return redirect()->route('movie.index')->with('message', 'movie updated succefully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie.index')->with('message', 'movie deleted succefully!');
    }
}
