<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ParticipantsService;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    protected ParticipantsService $service;

    public function __construct(ParticipantsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->getAll();
        $stats = $this->service->getStatistics();
        return view('modules.participants.index', compact('data', 'stats'));
    }

    public function show(string $id)
    {
        $data = $this->service->findById($id);
        return view('modules.participants.show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
