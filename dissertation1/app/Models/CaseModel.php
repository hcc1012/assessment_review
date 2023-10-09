<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    protected $table = 'cases';

    // Define relationships here if needed
    public function assessment()
    {
        return $this->belongsTo(Assessment::class, 'assessmentID');
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class, 'tutorID');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'moduleID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'roleID');
    }
}
