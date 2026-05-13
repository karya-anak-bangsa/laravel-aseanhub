<?php

namespace App\Services;

use App\Models\Participants;

class ParticipantsService
{
    public function getStatistics()
    {
        return [
            'total_participants'    => Participants::where('status_data', 'Active')->count(),
            'verified'              => Participants::where('status_data', 'Active')->where('status_registration', 'Verified')->count(),
            'pending'               => Participants::where('status_data', 'Active')->where('status_registration', 'Pending')->count(),
            'rejected'              => Participants::where('status_data', 'Active')->where('status_registration', 'Rejected')->count(),
            'countries'             => Participants::where('status_data', 'Active')->distinct('participants_country')->count('participants_country'),
        ];
    }

    public function getAll()
    {
        return Participants::where('status_data', 'Active')
            ->orderByRaw("
                CASE status_registration
                    WHEN 'Verified' THEN 1
                    WHEN 'Pending' THEN 2
                    WHEN 'Rejected' THEN 3
                END
            ")
            ->orderBy('team_name', 'asc')
            ->get();
    }

    public function findById(string $id)
    {
        return Participants::where('status_data', 'Active')->findOrFail($id);
    }
}
