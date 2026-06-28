<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Judges;
use App\Models\Participants;
use App\Models\Voters;

class DashboardService
{
    public function getSummaryStats()
    {
        $stats = [
            'admin'         => 0,
            'judges'        => 0,
            'participants'  => 0,
            'voters'        => 0,
        ];

        $stats['admin']         = Admin::where('status_data', 'Active')->count();
        $stats['judges']        = Judges::where('status_data', 'Active')->count();
        $stats['participants']  = Participants::where('status_data', 'Active')->count();
        $stats['voters']        = Voters::where('status_data', 'Active')->count();

        return $stats;
    }

    public function getSummaryJudges()
    {
        $summary_judges = [
            'assessment_one'    => 0,
            'assessment_two'    => 0,
            'final_assessment'  => 0,
        ];

        $base                                   = Judges::where('status_data', 'Active');
        $summary_judges['assessment_one']       = (clone $base)->where('judges_task', 'Assessment One')->count();
        $summary_judges['assessment_two']       = (clone $base)->where('judges_task', 'Assessment Two')->count();
        $summary_judges['final_assessment']     = (clone $base)->where('judges_task', 'Final Assessment')->count();

        return $summary_judges;
    }

    public function getSummaryParticipants()
    {
        $summary_participants = [
            'verified'  => 0,
            'pending'   => 0,
            'rejected'  => 0,
            'countries' => 0,
        ];

        $summary_participants['verified']   = Participants::where('status_data', 'Active')->where('status_registration', 'Verified')->count();
        $summary_participants['pending']    = Participants::where('status_data', 'Active')->where('status_registration', 'Pending')->count();
        $summary_participants['rejected']   = Participants::where('status_data', 'Active')->where('status_registration', 'Rejected')->count();
        $summary_participants['countries']  = Participants::where('status_data', 'Active')->distinct('participants_country')->count('participants_country');

        return $summary_participants;
    }
}
