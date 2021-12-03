<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Races extends Model
{
    use HasFactory;

    protected $table ='tbm_races';


    public function runner()
    {
        return $this->hasMany(Runners::class);
    }

    public function meeting()
    {
        return $this->belongsTo(Meetings::class, 'meeting_id');
    }
}
