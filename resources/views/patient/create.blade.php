@extends('layouts.app')

@section('content')
    <section class="content-header">
        @if(!Auth::guest())
            <h1>
                Tambah Data Pasien
            </h1>
        @else
            <h1>Register</h1>
        @endif
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box box-danger">

                    {!! Form::model(old(),array('url' => route('patient.store'), 'method' => 'post', 'id' => 'patient-form', 'class' => 'form-horizontal')) !!}

                    <div class="box-body">
                        @include('patient.form',['SubmitButtonText' => 'Tambah'])
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>
@endsection
