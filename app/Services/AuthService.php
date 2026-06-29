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

    public static function isVerified(string $email): bool
    {
        $participants = Participants::where('email', $email)->first();
        if ($participants) {
            return $participants->email_verified_at !== null;
        }

        $voters = Voters::where('email', $email)->first();
        if ($voters) {
            return $voters->email_verified_at !== null;
        }

        // Admin & Judges tidak menggunakan OTP
        return true;
    }

    public static function getGuardByEmail(string $email): ?string
    {
        if (Admin::where('email', $email)->exists()) {
            return 'admin';
        }

        if (Judges::where('email', $email)->exists()) {
            return 'judges';
        }

        if (Participants::where('email', $email)->exists()) {
            return 'participants';
        }

        if (Voters::where('email', $email)->exists()) {
            return 'voters';
        }

        return null;
    }
}
