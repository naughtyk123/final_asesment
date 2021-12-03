<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Last_Formdata extends Model
{

    use HasFactory;

    protected $table ='tbm_form_last_runrs';


    public function runner_det()
    {
        return $this->belongsTo(Runners::class, 'runners_id');
    }
}
