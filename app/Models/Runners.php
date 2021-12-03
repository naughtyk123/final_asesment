<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runners extends Model
{
    use HasFactory;

    protected $table ='tbm_runners';

    public function formdata()
    {
        return $this->hasMany(Formdata::class);
    }

    public function races()
    {
        return $this->belongsTo(Races::class, 'race_id');
    }

    public function lastrun()
    {
        return $this->hasMany(Last_Formdata::class);
    }

    public function lastruns()
    {
        return $this->hasMany(Last_Formdata::class);
    }

}
