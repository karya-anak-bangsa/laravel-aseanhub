<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutCompetition extends Model
{
    # ...
    use SoftDeletes, HasFactory;

    # ...
    protected $table        = 'tb_about_competition';
    protected $primaryKey   = 'id_about_competition';

    # ...
    protected $keyType      = 'int';
    public $incrementing    = true;

    # ...
    protected $fillable = [
        'tag',
        'title',
        'description',
        'event_date',
        'title_tor',
        'description_tor',
        'file_path',
        'status_data',
    ];

    # ...
    protected $attributes = [
        'status_data' => 'Active',
    ];

    # ...
    protected $casts = [
        'event_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected function eventDateInput(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->event_date
                ? $this->event_date->format('Y-m-d')
                : null,
        );
    }

    # ...
    protected function eventMonth(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->event_date
                ? strtoupper($this->event_date->translatedFormat('M'))
                : null,
        );
    }

    protected function eventDay(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->event_date
                ? $this->event_date->format('d')
                : null,
        );
    }

    # ...
    protected function fileUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->file_path
                ? asset('storage/' . $this->file_path)
                : null,
        );
    }
}
