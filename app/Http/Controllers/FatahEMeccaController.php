<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FatahEMeccaController extends Controller
{
    public function index(): View
    {
        return view('past-events.cycle-2-2026-onwards.fatah-e-mecca');
    }
}
