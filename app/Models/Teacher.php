<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function teacheruser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    protected $fillable = [
        'user_id','phone_number','country','county','gender','address','profession','uploaded_cv','primary_school','secondary_school','university','subject_combination','teaching_level','primary_subject','other_subject','classes_teaching', 'professional_summary', 'designation_code','tsc_number','other_associations','kra_pin', 'referral_code'
    ]; 
 
}
