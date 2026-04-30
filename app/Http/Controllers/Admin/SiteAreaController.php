<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteArea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class SiteAreaController extends Controller
{
    public function index()
    {
        $data = SiteArea::orderBy('sort_order')->get();
        return view('modules.site-area.index', compact('data'));
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
        $data = SiteArea::findOrFail($id);
        return view('modules.site-area.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'image'         => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'file_path'     => 'nullable|file|max:10240',
        ]);

        $data = SiteArea::findOrFail($id);

        $updateData = [
            'title'         => $request->title,
            'description'   => $request->description,
        ];

        if ($request->hasFile('image')) {
            $updateData['image'] = $request->file('image')->store('site-area', 'public');
        }

        if ($request->hasFile('file_path')) {
            $updateData['file_path'] = $request->file('file_path')->store('site-area', 'public');
        }

        $data->update($updateData);

        return redirect()
            ->route('admin.site-area.index')
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
