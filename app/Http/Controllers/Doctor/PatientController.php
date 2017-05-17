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

    public function pair($id){
        $patient = Patient::findOrFail($id);

        if(DoctorPatient::where('patient_id',$patient->id)->where('user_id',Auth::user()->id)->first()){
            return back();
        }

        Auth::user()->patients()->save($patient);

        $patient['status'] = $patient->status();
        $patient['gender'] = $patient->gender();

        return back();
    }

    public function patient_list(Request $request ){
        if($search = $request->input('search')){
            $patients = Patient::where('name', 'LIKE', '%' . $search . '%')->simplePaginate(10);
        }else{
            $patients = Patient::simplePaginate(10);
        }
        return view('doctor.patient.list',compact('patients'));
    }
}
