<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    public function pupiluser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    use HasFactory;
    protected $fillable = [
        'user_id','date_of_birth','phone_number','username','parent_names','parent_phone_number','parent_email','school_system','school_level'
    ];

    protected $dates = [
        'date_of_birth'
    ];
}
