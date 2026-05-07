<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class PhotoGalleryController extends Controller
{

    #--------------------------------------------------------------------------
    # INDEX + SHOW
    #--------------------------------------------------------------------------
    public function index()
    {
        $data = PhotoGallery::where('status_data', 'Active')->orderBy('sort_order', 'asc')->get();
        return view('modules.photo-gallery.index', compact('data'));
    }

    public function show(string $id)
    {
        //
    }


    #--------------------------------------------------------------------------
    # CREATE + STORE
    #--------------------------------------------------------------------------
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    #--------------------------------------------------------------------------
    # EDIT + UPDATE
    #--------------------------------------------------------------------------
    public function edit(string $id)
    {
        $data = PhotoGallery::findOrFail($id);
        return view('modules.photo-gallery.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        //
    }


    #--------------------------------------------------------------------------
    # DESTROY
    #--------------------------------------------------------------------------
    public function destroy(string $id)
    {
        //
    }
}
