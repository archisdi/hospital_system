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
                <div class="box">
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
                <div class="box">
                    <div class="box-body">
                        <h5>Checkups</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($checkups as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->doctor->name}}</td>
                                    <td>{{$item->created_at}} </td>
                                    <td>
                                        <a href="{{route('doctor.checkup.edit',[$patients->id,$item->id])}}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('doctor.checkup.show',[$patients->id,$item->id])}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('doctor.checkup.create',$patients->id)}}" class="btn btn-success">Tambah Checkup</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection