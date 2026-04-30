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
        ]);

        $data = SiteArea::findOrFail($id);
        $data->update([
            'title'         => $request->title,
            'description'   => $request->description,
        ]);

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
