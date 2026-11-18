<?php

namespace App\Http\Controllers;

class FirstRespondersController extends Controller
{
    public function index()
    {
        return view('past-events.cycle-1.the-first-responders');
    }
}
