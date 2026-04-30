<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $service;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function showAdmin()
    {

        $admin          = Auth::guard('admin')->user();
        $stats          = $this->service->getSummaryStats();
        $summary_judges = $this->service->getSummaryJudges();
        $summary_participants = $this->service->getSummaryParticipants();

        return view('modules.dashboard.admin', compact(
            'admin',
            'stats',
            'summary_judges',
            'summary_participants',
        ));
    }

    public function showJudges()
    {
        $judges = Auth::guard('judges')->user();
        return view('modules.dashboard.judges', compact('judges'));
    }

    public function showParticipants()
    {
        $participants = Auth::guard('participants')->user();
        return view('modules.dashboard.participants', compact('participants'));
    }

    public function showVoters()
    {
        $voters = Auth::guard('voters')->user();
        return view('modules.dashboard.voters', compact('voters'));
    }
}
