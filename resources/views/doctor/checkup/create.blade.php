@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tambah Checkup
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box box-danger">

                    {!! Form::model(old(),array('url' => route('doctor.checkup.store',$patient->id), 'method' => 'post', 'id' => 'patient-form', 'class' => 'form-horizontal')) !!}

                    <div class="box-body">
                        @include('doctor.checkup.form',['SubmitButtonText' => 'Tambah'])
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