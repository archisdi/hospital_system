<?php

namespace App\Http\Controllers\Doctor;

use App\Patient;
use App\Relation\DoctorPatient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index(Request $request){

        if($search = $request->input('search')){
            $patients = Auth::user()->patients()->where('name', 'LIKE', '%' . $search . '%')->simplePaginate(10);
        }else{
            $patients = Auth::user()->patients()->simplePaginate(10);
        }

        return view('doctor.patient.index',compact('patients'));
    }

    public function show($id){
        $patients = Auth::user()->patients()->where('patients.id',$id)->first();
        $checkups = $patients->checkups;

        return view('doctor.patient.show',compact('patients','checkups'));

    }

    public function pair(Request $request){
        if(!$patient = Patient::where('id_card_number',$request->input('id_card_number'))->first()){
            return response([
                [
                    'message' => 'data pasien tidak ditemukan'
                ]
            ],404);
        }

        if(DoctorPatient::where('patient_id',$patient->id)->where('user_id',Auth::user()->id)->first()){
            return response([
                [
                    'message' => 'data pasien sudah ada'
                ]
            ],404);
        }

        Auth::user()->patients()->save($patient);

        $patient['status'] = $patient->status();
        $patient['gender'] = $patient->gender();

        return response([
            [
                'message' => 'data pasien berhasil dipair',
                'content' => $patient
            ]
        ],200);
    }
}
