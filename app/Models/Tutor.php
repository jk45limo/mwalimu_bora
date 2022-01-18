<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    public function tutoruser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    use HasFactory;
    protected $fillable=['user_id', 'phone_number','username', 'referral_code'];
}
