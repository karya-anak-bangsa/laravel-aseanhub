<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OpeningSpeeches;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class OpeningSpeechesController extends Controller
{

    #--------------------------------------------------------------------------
    # INDEX + SHOW
    #--------------------------------------------------------------------------
    public function index()
    {
        $data = OpeningSpeeches::where('status_data', 'Active')->orderBy('sort_order', 'asc')->get();
        return view('modules.opening-speeches.index', compact('data'));
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
        $data = OpeningSpeeches::findOrFail($id);
        return view('modules.opening-speeches.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $data = OpeningSpeeches::findOrFail($id);

        $request->validate([
            'name'      => 'required',
            'position'  => 'required',
            'message'   => 'required',
            'photo'     => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ]);

        $updateData = $request->only(['name', 'position', 'message']);
        // $updateData = [
        //     'name'      => $request->name,
        //     'position'  => $request->position,
        //     'message'   => $request->message,
        // ];

        if ($request->hasFile('photo')) {
            $updateData['photo'] = $request->file('photo')->store('opening-speeches', 'public');
        }

        $data->update($updateData);

        return redirect()
            ->route('admin.opening-speeches.index')
            ->with('notify', [
                'status' => 'info',   // success | error | warning | info
                'text'   => 'Data successfully updated',
            ]);
    }

    public function destroy(string $id)
    {
        //
    }
}
