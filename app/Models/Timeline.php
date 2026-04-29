<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Timeline extends Model
{
    // ...
    use SoftDeletes, HasFactory;

    // ...
    protected $table        = 'tb_timeline';
    protected $primaryKey   = 'id_timeline';

    // ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    // ...
    protected $fillable = [
        'title',
        'description',
        'date_start',
        'date_end',
        'phase_key',
        'status_data',
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
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];

    #--------------------------------------------------------------------------
    # ACCESSOR (FOR UI)
    #--------------------------------------------------------------------------
    protected function isCurrent(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->status_data === 'Active' && now()->between($this->date_start, $this->date_end),
        );
    }

    public function getDateStartFormattedAttribute()
    {
        return $this->date_start->translatedFormat('d F Y');
    }

    public function getDateEndFormattedAttribute()
    {
        return $this->date_end->translatedFormat('d F Y');
    }

    protected function dateStartInput(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->date_start->format('Y-m-d'),
        );
    }

    protected function dateEndInput(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->date_end->format('Y-m-d'),
        );
    }

    protected function dateRange(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->date_start->translatedFormat('d M') . ' - ' . $this->date_end->translatedFormat('d M Y'),
        );
    }

    #--------------------------------------------------------------------------
    # CONSTANT (PHASE KEY)
    #--------------------------------------------------------------------------
    const PHASE_REGISTRATION = 'Registration';
    const PHASE_SUBMISSION   = 'Submission';
    const PHASE_ASSESSMENT   = 'Assessment';
    const PHASE_ANNOUNCEMENT   = 'Announcement';

    public static function phaseOptions()
    {
        return [
            self::PHASE_REGISTRATION => 'Registration',
            self::PHASE_SUBMISSION   => 'Submission',
            self::PHASE_ASSESSMENT   => 'Assessment',
            self::PHASE_ANNOUNCEMENT => 'Announcement',
        ];
    }

    protected function phaseColor(): Attribute
    {
        return Attribute::make(
            get: fn() => match ($this->phase_key) {
                self::PHASE_REGISTRATION => 'bg-success',
                self::PHASE_SUBMISSION   => 'bg-primary',
                self::PHASE_ASSESSMENT   => 'bg-warning',
                self::PHASE_ANNOUNCEMENT => 'bg-danger',
                default => 'bg-secondary',
            }
        );
    }

    protected function phaseLabel(): Attribute
    {
        return Attribute::make(
            get: fn() => ucfirst($this->phase_key),
        );
    }
}
