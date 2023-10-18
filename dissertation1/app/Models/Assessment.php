<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'assessment_type',
        'weighting',
        'assessment_deliverable',
        'other_deliverables',
        'issue_date',
        'submission_date',
        'date_submitted_for_moderation',
        'date_moderated',
        'date_form_received'
    ];

    
    public function modules()
    {
        return $this->belongsTo(Module::class, 'module_code');
    }



    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
