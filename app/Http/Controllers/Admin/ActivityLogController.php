<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ActivityLogController extends Controller
{
    public function index(Request $request): View
    {
        $logs = ActivityLog::with('user')
            ->when($request->q, fn ($q, $term) => $q->where(fn ($x) => $x
                ->where('action', 'like', "%{$term}%")
                ->orWhere('description', 'like', "%{$term}%")))
            ->latest()
            ->paginate(30)
            ->withQueryString();

        return view('admin.activity.index', compact('logs'));
    }
}
