<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{

    protected $fillable = [
        'user_id', 'patient_id', 'diagnosis', 'prescription'
    ];

    public function doctor()
    {
        return $this->BelongsTo('App\User', 'user_id');
    }
}
