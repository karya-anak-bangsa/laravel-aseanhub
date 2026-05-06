<?php

namespace App\Services;

use App\Models\Voters;

class VotersService
{
    public function getStatistics()
    {
        $total          = Voters::where('status_data', 'Active')->count();
        $hasVoted       = Voters::where('status_data', 'Active')->where('has_voted', true)->count();
        $notVoted       = $total - $hasVoted;
        $percentage     = $total > 0 ? round(($hasVoted / $total) * 100, 2) : 0;

        return [
            'total'      => $total,
            'has_voted'  => $hasVoted,
            'not_voted'  => $notVoted,
            'percentage' => $percentage,
        ];
    }

    public function getAll()
    {
        return Voters::where('status_data', 'Active')->orderBy('voters_name', 'asc')->get();
    }

    public function findById($id)
    {
        return Voters::where('status_data', 'Active')->findOrFail($id);
    }
}
