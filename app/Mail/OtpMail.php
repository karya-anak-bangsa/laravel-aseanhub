<?php

namespace App\Mail;

use App\Models\Participants;
use App\Models\Voters;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class OtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public Participants|Voters $user;

    public function __construct(Participants|Voters $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('ASEAN Hub - Email Verification')->view('auth.otp')->with([
            'user' => $this->user,
        ]);
    }
}
