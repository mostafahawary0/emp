<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $fillable = ['id','first_name','middele_name', 'last_name', 'full_name', 'gender', 'date_of_brith',
    'date_of_joining', 'mobile', 'address', 'personal_email', 'company_email', 'emergancy_phone', 
    'emergancy_contact_name', 'marital_status', 'blood_group', 'health_details', 'iqama_details',
    'driver_license', 'personal_id', 'date_of_issue', 'valid_upto', 'place_issue', 'education', 
    'functional_specialization', 'previous_works_experience', 'history_in_company'];
    
}
