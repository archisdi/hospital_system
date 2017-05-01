<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name' , 'gender' ,'birth_date', 'birth_place' ,
        'occupation', 'marital_status', 'address',
        'blood_type', 'id_card_number', 'parent_name', 'n_families'
    ];

    public function gender(){
        if($this->gender == 'male'){
            return 'Laki-laki';
        }else{
            return 'Perempuan';
        }
    }

    public function status(){
        if($this->marital_status == 0){
            return 'Belum Menikah';
        }else{
            return 'Menikah';
        }
    }

    public function age(){
        $dob = Carbon::createFromFormat('Y-m-d',$this->birth_date);

        return Carbon::today()->diffInYears($dob);
    }

    public function checkups(){
        return $this->HasMany('App\Checkup');
    }

}
