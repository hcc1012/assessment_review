<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = ['username', 'surname', 'firstname', 'email', 'role'];

    public $timestamps = false;

    // Define the many-to-many relationship with modules
    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    // Define the one-to-many relationship with assessments
    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

}
