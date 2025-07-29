<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplied extends Model
{
    protected $table = 'job_applieds';
    protected $fillable = [
        'applicant_name',
        'applicant_email',
        'applicant_phone',
        'job_title',
        'cover_letter',
        'resume',
        'status',
    ];

}
