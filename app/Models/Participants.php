<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Participants extends Authenticatable
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table      = 'tb_participants';
    protected $primaryKey = 'id_participants';

    // ...
    protected $keyType   = 'int';
    public $incrementing = true;

    // ...
    protected $fillable = [
        'team_name',
        'participants_name_1',
        'participants_name_2',
        'participants_name_3',
        'participants_name_4',
        'participants_name_5',
        'participants_country',
        'participants_phone',

        'status_registration',
        'status_urban_design',
        'status_assessment_one',
        'status_assessment_two',
        'status_final_assessment',

        'email',
        'password',

        'otp_code',
        'otp_expired_at',
        'email_verified_at',

        'status_data',
    ];

    // ...
    protected $hidden = [
        'password',
        'otp_code',
    ];

    // ...
    protected $attributes = [
        'status_data' => 'Active',
    ];

    // ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function getBadgeRegistrationAttribute()
    {
        return match ($this->status_registration) {
            'Verified'          => '<span class="badge badge-success badge-custom">Verified</span>',
            'Pending'           => '<span class="badge badge-warning badge-custom">Pending</span>',
            'Rejected'          => '<span class="badge badge-danger badge-custom">Rejected</span>',
            default             => '<span class="badge badge-secondary">Unknown</span>',
        };
    }

    public function getBadgeUrbanDesignAttribute()
    {
        return match ($this->status_urban_design) {
            'Submitted'         => '<span class="badge badge-success badge-custom">Submitted</span>',
            'Not Submitted'     => '<span class="badge badge-danger badge-custom">Not Submitted</span>',
            default             => '<span class="badge badge-secondary">Unknown</span>',
        };
    }

    public function getBadgeAssessmentOneAttribute()
    {
        return match ($this->status_assessment_one) {
            'Approved'          => '<span class="badge badge-success badge-custom">Approved</span>',
            'Pending'           => '<span class="badge badge-warning badge-custom">Pending</span>',
            'Rejected'          => '<span class="badge badge-danger badge-custom">Rejected</span>',
            default             => '<span class="badge badge-secondary">Unknown</span>',
        };
    }

    public function getBadgeAssessmentTwoAttribute()
    {
        return match ($this->status_assessment_one) {
            'Approved'          => '<span class="badge badge-success badge-custom">Approved</span>',
            'Pending'           => '<span class="badge badge-warning badge-custom">Pending</span>',
            'Rejected'          => '<span class="badge badge-danger badge-custom">Rejected</span>',
            default             => '<span class="badge badge-secondary">Unknown</span>',
        };
    }

    public function getBadgeAssessmentFinalAttribute()
    {
        return match ($this->status_assessment_one) {
            'Approved'          => '<span class="badge badge-success badge-custom">Approved</span>',
            'Pending'           => '<span class="badge badge-warning badge-custom">Pending</span>',
            'Rejected'          => '<span class="badge badge-danger badge-custom">Rejected</span>',
            default             => '<span class="badge badge-secondary">Unknown</span>',
        };
    }
}
