<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'programme_title',
        'programme_director',
        'deputy_programme_director',
    ];

    
    public function users()
{
    return $this->belongsToMany(User::class, 'projects', 'moduleID', 'user_id');
}
    public function modules()
    {
        return $this->belongsTo(Module::class);
    }
}
