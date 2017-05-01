<?php

namespace App\Http\Controllers\Doctor;

use App\Checkup;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($id)
    {
        $patient = Patient::findOrFail($id);

        return view('doctor.checkup.create', compact('patient'));
    }

    public function edit($id, $id_checkup)
    {
        $patient = Patient::findOrFail($id);
        $checkup = $patient->checkups()->where('id', $id_checkup)->first();


        return view('doctor.checkup.edit', compact('patient', 'checkup'));
    }

    public function show($id, $id_checkup)
    {
        $patient = Patient::findOrFail($id);
        $checkup = $patient->checkups()->where('id', $id_checkup)->first();

        return view('doctor.checkup.show', compact('patient', 'checkup'));
    }

    public function store(Request $request, $id)
    {

        $patient = Patient::findOrFail($id);
        $patient->checkups()->save(New Checkup($request->input()));

        return redirect(route('doctor.patient.show', $patient->id));
    }

    public function update(Request $request, $id, $id_checkup)
    {

        $patient = Patient::findOrFail($id);
        $checkup = $patient->checkups()->where('id', $id_checkup)->first();
        $checkup->update($request->input());

        return redirect(route('doctor.patient.show', $patient->id));
    }

    public function destroy($id, $id_checkup)
    {
        $patient = Patient::findOrFail($id);
        $checkup = $patient->checkups()->where('id', $id_checkup)->first();

        $checkup->delete();

        return redirect(route('doctor.patient.show', $patient->id));
    }

}