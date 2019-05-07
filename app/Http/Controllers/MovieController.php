<?php

namespace App\Http\Controllers;

use App\movie;
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
        $movies = Movie::get();

        echo json_encode($movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->genre = $request->input('genre');
        $movie->year = $request->input('year');
        $movie->duration = $request->input('duration');

        $movie->save();

        echo json_encode($movie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $movie)
    {
        $movie = Movie::find($movie);

        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->genre = $request->input('genre');
        $movie->year = $request->input('year');
        $movie->duration = $request->input('duration');

        $movie->save();

        echo json_encode($movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($movie)
    {
        $movie = Movie::find($movie);

        $movie->delete();
    }
}
