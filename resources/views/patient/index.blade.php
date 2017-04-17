@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Pasien
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <form action="{{route('patient.index')}}" method="get" class="input-group input-group-sm" style="width: 350px;">
                            <input type="text" name="search" class="form-control" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Golongan Darah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                            @foreach($patients as $item)
                                <tr>
                                    <td>{{$item->id_card_number}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->gender()}}</td>
                                    <td><span class="label label-primary">{{$item->blood_type}}</span></td>
                                    <td>{{$item->status()}}</td>
                                    <td><a href="{{route('patient.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <br>
                        &nbsp;<a href="{{route('patient.create')}}" class="btn btn-success">Tambah Data Pasien</a>
                        <div class="pull-right">
                            {{isset($_GET['search']) ? $patients->appends(['search' => $_GET['search']])->links() : $patients->links()}}

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection
