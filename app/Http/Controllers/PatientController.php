<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create','store');
        $this->middleware('admin')->except('create','store');;
    }

    public function index(Request $request){

        if($search = $request->input('search')){
            $patients = Patient::where('name', 'LIKE', '%' . $search . '%')->simplePaginate(10);;
        }else{
            $patients = Patient::simplePaginate(10);
        }

        return view('patient.index',compact('patients'));
    }


    public function create()
    {
        return view('patient.create');
    }


    public function store(Request $request)
    {
        $data = $request->input();

        $patient = New Patient($data);
        $patient->save();

        return redirect(route('patient.index'));
    }


    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('patient.show',compact('patient'));
    }


    public function edit($id)
    {
        $patient = Patient::findOrFail($id);


        return view('patient.edit',compact('patient'));
    }


    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $data = $request->input();

        $patient->update($data);

        return redirect(route('patient.show',$patient->id));
    }


    public function destroy($id)
    {
        //
    }
}
