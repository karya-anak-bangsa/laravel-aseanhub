<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timeline;

class TimelineController extends Controller
{

    public function index()
    {
        $data = Timeline::where('status_data', 'Active')->orderBy('date_start', 'asc')->get();
        return view('modules.timeline.index', compact('data'));
    }

    public function show(string $id)
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {

        $data = Timeline::findOrFail($id);
        return view('modules.timeline.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = Timeline::findOrFail($id);

        $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'nullable|string',
            'date_start'   => 'required|date',
            'date_end'     => 'required|date|after_or_equal:date_start',
            'phase_key'    => 'required|string',
        ]);

        $data->update([
            'title'        => $request->title,
            'description'  => $request->description,
            'date_start'   => $request->date_start,
            'date_end'     => $request->date_end,
            'phase_key'    => $request->phase_key,
        ]);

        return redirect()
            ->route('admin.timeline.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Data successfully updated',
            ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
