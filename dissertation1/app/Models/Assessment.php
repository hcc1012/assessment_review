<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'assessmentID',
        'type',
        'weighting',
        'moduleID',
        'assessorID',
    ];

    
    public function modules()
    {
        return $this->belongsTo(Module::class, 'module_code', 'module_code');
    }


    public function tutors()
    {
        return $this->belongsToMany(Tutor::class, 'assessment_tutor', 'assessment_id', 'tutor_id');

    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
