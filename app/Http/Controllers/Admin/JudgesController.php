<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\JudgesService;
use Illuminate\Http\Request;

class JudgesController extends Controller
{
    protected JudgesService $service;

    public function __construct(JudgesService $service)
    {
        $this->service = $service;
    }

    #--------------------------------------------------------------------------
    # INDEX + SHOW
    #--------------------------------------------------------------------------
    public function index()
    {
        $data = $this->service->getAll();
        $stats = $this->service->getStatistics();
        return view('modules.judges.index', compact('data', 'stats'));
    }

    public function show(string $id)
    {
        $data = $this->service->findById($id);
        return view('modules.judges.show', compact('data'));
    }

    #--------------------------------------------------------------------------
    # CREATE + STORE
    #--------------------------------------------------------------------------
    public function create()
    {
        return view('modules.judges.create');
    }

    public function store(Request $request)
    {
        $this->service->store($request);
        return redirect()
            ->route('admin.judges.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Data has been successfully added',
            ]);
    }

    #--------------------------------------------------------------------------
    # EDIT + UPDATE
    #--------------------------------------------------------------------------
    public function edit(string $id)
    {
        $data = $this->service->findById($id);
        return view('modules.judges.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $this->service->update($id, $request->all());
        return redirect()
            ->route('admin.judges.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Data has been successfully updated',
            ]);
    }

    public function destroy(string $id)
    {
        $this->service->destroy($id);
        return redirect()
            ->route('admin.judges.index')
            ->with('notify', [
                'status' => 'info',
                'text'   => 'Data has been successfully deleted',
            ]);
    }
}
