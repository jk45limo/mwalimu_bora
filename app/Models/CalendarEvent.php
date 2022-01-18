<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'start', 'end', 'description', 'event_for', 'event_place', 'event_status'

    ];

    protected $dates = [
        'start', 'end'
    ];
}
