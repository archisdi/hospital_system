@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Checkup
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box box-danger">

                    {!! Form::model($checkup,array('url' => route('doctor.checkup.update',[$patient->id,$checkup->id]), 'method' => 'put', 'id' => 'patient-form', 'class' => 'form-horizontal')) !!}

                    <div class="box-body">
                        @include('doctor.checkup.form',['SubmitButtonText' => 'Ubah'])
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>
@endsection

@section('ext_footer_script')
    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'prescription' );
        CKEDITOR.replace( 'diagnosis' );
    </script>
@endsection