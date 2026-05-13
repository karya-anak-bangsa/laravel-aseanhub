<?php

namespace App\Http\Controllers\Participants;

use App\Http\Controllers\Controller;
use App\Services\ParticipantsService;
use Illuminate\Http\Request;

class UpdateProfileController extends Controller
{
    protected ParticipantsService $service;

    public function __construct(ParticipantsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        //
    }

    public function show(string $id)
    {
        $data = $this->service->findById($id);
        return view('modules.participants.show', compact('data'));
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
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
