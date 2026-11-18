<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventCycle;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class EventCycleController extends Controller
{
    public function index(): View
    {
        return view('admin.cycles.index', [
            'cycles' => EventCycle::withCount('events')->orderBy('sort_order')->orderBy('name')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.cycles.form', ['cycle' => new EventCycle()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $cycle = EventCycle::create($this->validated($request));
        ActivityLogger::record('cycle.create', $cycle, 'Event cycle created');
        return redirect()->route('admin.cycles.index')->with('success', 'Cycle created.');
    }

    public function edit(EventCycle $cycle): View
    {
        return view('admin.cycles.form', compact('cycle'));
    }

    public function update(Request $request, EventCycle $cycle): RedirectResponse
    {
        $cycle->update($this->validated($request, $cycle));
        ActivityLogger::record('cycle.update', $cycle, 'Event cycle updated');
        return redirect()->route('admin.cycles.index')->with('success', 'Cycle updated.');
    }

    public function destroy(EventCycle $cycle): RedirectResponse
    {
        if ($cycle->events()->exists()) {
            return back()->withErrors(['cycle' => 'Move or remove events from this cycle before deleting it.']);
        }
        ActivityLogger::record('cycle.delete', $cycle, 'Event cycle deleted');
        $cycle->delete();
        return back()->with('success', 'Cycle deleted.');
    }

    private function validated(Request $request, ?EventCycle $cycle = null): array
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string', 'max:120', Rule::unique('event_cycles', 'slug')->ignore($cycle?->id)],
            'description' => ['nullable', 'string', 'max:2000'],
            'sort_order' => ['nullable', 'integer', 'min:0', 'max:65535'],
            'is_active' => ['nullable', 'boolean'],
        ]);
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['is_active'] = $request->boolean('is_active');
        return $data;
    }
}
