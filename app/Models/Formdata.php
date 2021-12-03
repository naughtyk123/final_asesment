<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formdata extends Model
{
    use HasFactory;
    protected $table ='tbm_form_data';

    public function runner_form()
    {
        return $this->belongsTo(Runners::class, 'runners_id');
    }
}
