<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    public function specialist()
    {
        return $this->belongsTo(Specialist::class);
    }
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
    protected $guarded = [];
    use HasFactory;
}
