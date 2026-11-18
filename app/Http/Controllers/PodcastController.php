<?php

namespace App\Http\Controllers;

class PodcastController extends Controller
{
    public function index()
    {
        return view('Home.podcast');
    }
}
