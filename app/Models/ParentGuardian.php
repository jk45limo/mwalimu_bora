<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentGuardian extends Model
{
    use HasFactory;
public function parentuser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    use HasFactory;
    protected $fillable = ['referral_code', 'username','phone_number', 'user_id'];

} 