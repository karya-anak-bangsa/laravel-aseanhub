<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAseanHub;

class AboutAseanHubController extends Controller
{
    public function index()
    {
        $data = AboutAseanHub::first();
        return view('modules.about-aseanhub.index', compact('data'));
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
        $data = AboutAseanHub::findOrFail($id);
        return view('modules.about-aseanhub.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = AboutAseanHub::findOrFail($id);

        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $updateData = [
            'title'         => $request->title,
            'description'   => $request->description,
        ];

        // handle upload image
        if ($request->hasFile('image')) {
            $updateData['image'] = $request->file('image')->store('about-aseanhub', 'public');
        }

        $data->update($updateData);

        return redirect()
            ->route('admin.about-aseanhub.index')
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
