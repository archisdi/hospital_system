@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tambah Data Pasien
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box box-danger">

                    {!! Form::model($patient,array('url' => route('patient.update',$patient->id), 'method' => 'put', 'id' => 'patient-form', 'class' => 'form-horizontal')) !!}

                    <div class="box-body">
                        @include('patient.form',['SubmitButtonText' => 'Ubah'])
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>
@endsection
