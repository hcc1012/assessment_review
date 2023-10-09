<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlos extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'module_code',
        'mlo_number',
        'mlo_description',
    ];

    
    public function modules()
    {
        return $this->belongsTo(Module::class);
    }

}