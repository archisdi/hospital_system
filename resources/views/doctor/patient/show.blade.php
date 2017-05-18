@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detail Pasien
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    <div class="box-body">
                        <label class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <div class="well well-sm">{{$patients->name}}</div>
                        </div>

                        <label class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <div class="well well-sm">{{$patients->gender}}</div>
                        </div>

                        <label class="col-sm-2 control-label">Umur</label>
                        <div class="col-sm-10">
                            <div class="well well-sm">{{$patients->age()}}</div>
                        </div>

                        <label class="col-sm-2 control-label">Pekerjaan</label>
                        <div class="col-sm-10">
                            <div class="well well-sm">{{$patients->occupation}}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php $i = 1 ?>
                @foreach($checkups as $item)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                #{{$i}}
                            </div>
                            <div class="panel-body">
                                <label class="col-sm-2 control-label">Doctor</label>
                                <div class="col-sm-10">
                                    <div class="well well-sm">{{$item->doctor->name}}</div>
                                </div>

                                <label class="col-sm-2 control-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <div class="well well-sm">{{$item->created_at}}</div>
                                </div>

                                <label class="col-sm-2 control-label">Diagnosis</label>
                                <div class="col-sm-10">
                                    <div class="well">{!! $item->diagnosis !!}</div>
                                </div>

                                <label class="col-sm-2 control-label">Prescription</label>
                                <div class="col-sm-10">
                                    <div class="well">{!! $item->prescription !!}</div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <a href="{{route('doctor.checkup.edit',[$patients->id,$item->id])}}" class="btn btn-warning btn-sm">Edit</a>
                            </div>
                        </div>
                    <?php $i++ ?>
                @endforeach
            </div>
        </div>
    </section>
@endsection



