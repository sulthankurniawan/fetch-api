<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Route::currentRouteName() == 'index') {
            $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
            // Get all data from api
            return view('welcome', ['news' => json_decode($news)]);
        } else if (Route::currentRouteName() == 'business') {
            $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=business&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
            // Get all business data from api
            return view('welcome', ['news' => json_decode($news)]);
        } else if (Route::currentRouteName() == 'entertainment') {
            $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=entertainment&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
            // Get all business data from api
            return view('welcome', ['news' => json_decode($news)]);
        } else if (Route::currentRouteName() == 'health') {
            $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
            // Get all business data from api
            return view('welcome', ['news' => json_decode($news)]);
        } else if (Route::currentRouteName() == 'science') {
            $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=science&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
            // Get all business data from api
            return view('welcome', ['news' => json_decode($news)]);
        } else if (Route::currentRouteName() == 'sports') {
            $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=sports&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
            // Get all business data from api
            return view('welcome', ['news' => json_decode($news)]);
        } else if (Route::currentRouteName() == 'technology') {
            $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=technology&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
            // Get all business data from api
            return view('welcome', ['news' => json_decode($news)]);
        }
    }

    public function news()
    {
        $news = Http::get('https://newsapi.org/v2/top-headlines?country=id&apiKey=9e156d80708c4c3fbf18c17d260f4a70');
        // Get all data from api
        return view('news', ['news_json' => json_decode($news), 'news' => $news]);
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
