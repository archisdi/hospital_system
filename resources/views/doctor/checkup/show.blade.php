@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Checkup
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="box box-danger">
                    <div class="box-body">
                        <label class="col-sm-2 control-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <div class="well well-sm">{{$patient->name}}</div>
                        </div>

                        <label class="col-sm-2 control-label">Nama Dokter</label>
                        <div class="col-sm-10">
                            <div class="well well-sm">{{$checkup->doctor->name}}</div>
                        </div>

                        <label class="col-sm-2 control-label">Diagnosis</label>
                        <div class="col-sm-10">
                            <div class="well">
                                {!! $checkup->diagnosis !!}
                            </div>
                        </div>

                        <label class="col-sm-2 control-label">Prescription</label>
                        <div class="col-sm-10">
                            <div class="well">
                                {!! $checkup->prescription !!}
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <form method="post" action="{{route('doctor.checkup.destroy',[$patient->id,$checkup->id])}}">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection