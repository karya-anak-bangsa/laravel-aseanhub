<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutCompetition;

class AboutCompetitionController extends Controller
{
    public function index()
    {
        $data = AboutCompetition::first();
        return view('modules.about-competition.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = AboutCompetition::findOrFail($id);
        return view('modules.about-competition.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = AboutCompetition::findOrFail($id);

        $request->validate([
            'tag'               => 'required|string|max:255',
            'title'             => 'required|string|max:255',
            'description'       => 'required|string',
            'event_date'        => 'required|date',
            'title_tor'         => 'required|string|max:255',
            'description_tor'   => 'required|string',
            'file_path'         => 'nullable|file|mimes:pdf|max:5120',
        ]);

        $updateData = $request->only([
            'tag',
            'title',
            'description',
            'event_date',
            'title_tor',
            'description_tor',
        ]);

        if ($request->hasFile('file_path'))
            $updateData['file_path'] = $request->file('file_path')->store('about-competition', 'public');

        $data->update($updateData);

        return redirect()
            ->route('admin.about-competition.index')
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
