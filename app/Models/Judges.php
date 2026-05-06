<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Judges extends Authenticatable
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table        = 'tb_judges';
    protected $primaryKey   = 'id_judges';

    // ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    // ...
    protected $fillable = [
        'judges_name',
        'origin_country',
        'origin_institution',
        'judges_task',
        'judges_photo',
        'email',
        'password',
        'status_data',
    ];

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

    # -------------------------------------------------------------------------- #
    # CONSTANTS + SCOPES                                                         #
    # -------------------------------------------------------------------------- #
    const STATUS_ACTIVE         = 'Active';
    const TASK_ASSESSMENT_ONE   = 'Assessment One';
    const TASK_ASSESSMENT_TWO   = 'Assessment Two';
    const TASK_FINAL_ASSESSMENT = 'Final Assessment';

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status_data', self::STATUS_ACTIVE);
    }

    public function scopeOrderName(Builder $query): Builder
    {
        return $query->orderBy('judges_name', 'asc');
    }

    # -------------------------------------------------------------------------- #
    # ACCESSOR                                                                   #
    # -------------------------------------------------------------------------- #
    protected function photoUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->judges_photo
                ? asset('storage/' . $this->judges_photo)
                : asset('img/default-user.png'),
        );
    }
}
