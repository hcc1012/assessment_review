<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    public $timestamps = false;


    protected $fillable = ['programme_title','module_code', 'module_title', 'module_lead', 'level', 'credits'];


    // Define the many-to-many relationship with tutors
    public function tutors()
    {
        return $this->belongsToMany(Tutor::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
