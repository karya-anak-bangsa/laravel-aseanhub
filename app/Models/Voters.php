<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Voters extends Authenticatable
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table        = 'tb_voters';
    protected $primaryKey   = 'id_voters';

    // ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    #
    protected $fillable = [
        'voters_name',
        'voters_country',
        'ip_address',
        'mac_address',
        'device_hash',
        'has_voted',
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
}
