<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\ContactSubmission;
use App\Models\Event;
use App\Models\GirlsRegistration;
use App\Models\Registration;
use App\Models\User;
use App\Models\VolunteerSubmission;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'registrations' => Registration::count(),
            'girls_registrations' => GirlsRegistration::count(),
            'contacts' => ContactSubmission::count(),
            'unread_contacts' => ContactSubmission::where('status', 'unread')->count(),
            'events' => Event::count(),
            'published_events' => Event::where('status', 'published')->count(),
            'draft_events' => Event::where('status', 'draft')->count(),
            'admin_users' => User::whereHas('roles')->count(),
            'volunteers' => VolunteerSubmission::count(),
        ];

        $activityTrend = collect(range(5, 0))->map(function (int $monthsAgo) {
            $month = now()->startOfMonth()->subMonths($monthsAgo);
            $start = $month->copy()->startOfMonth();
            $end = $month->copy()->endOfMonth();
            return [
                'label' => $month->format('M'),
                'registrations' => Registration::whereBetween('created_at', [$start, $end])->count()
                    + GirlsRegistration::whereBetween('created_at', [$start, $end])->count(),
                'contacts' => ContactSubmission::whereBetween('created_at', [$start, $end])->count(),
                'volunteers' => VolunteerSubmission::whereBetween('created_at', [$start, $end])->count(),
            ];
        });

        $trendMax = max(1, $activityTrend->map(fn ($row) => $row['registrations'] + $row['contacts'] + $row['volunteers'])->max());

        return view('admin.dashboard', [
            'stats' => $stats,
            'recentRegistrations' => Registration::latest()->limit(6)->get(),
            'recentContacts' => ContactSubmission::latest()->limit(6)->get(),
            'recentActivity' => ActivityLog::with('user')->latest()->limit(10)->get(),
            'recentVolunteers' => VolunteerSubmission::latest()->limit(5)->get(),
            'activityTrend' => $activityTrend,
            'trendMax' => $trendMax,
        ]);
    }
}
