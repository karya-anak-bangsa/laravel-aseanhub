<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Judges;
use App\Models\Participants;
use App\Models\Voters;

class AuthService
{
    public static function emailExists(string $email): bool
    {
        return Admin::where('email', $email)->exists()
            || Judges::where('email', $email)->exists()
            || Participants::where('email', $email)->exists()
            || Voters::where('email', $email)->exists();
    }
}
