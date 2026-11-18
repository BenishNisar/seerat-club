<?php

namespace App\Http\Controllers;

class PastEventsController extends Controller
{
    public function index()
    {
        return view('past-events.index');
    }
}
