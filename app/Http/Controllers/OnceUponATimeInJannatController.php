<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OnceUponATimeInJannatController extends Controller
{
    public function index(): View
    {
        return view(
            'past-events.cycle-1.once-upon-a-time-in-jannat'
        );
    }
}
