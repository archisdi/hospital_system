@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Seluruh Pasien
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box">
                    <div class="box-header">
                        <form action="{{route('doctor.patient.list')}}" method="get" class="input-group input-group-sm"
                              style="width: 350px;">
                            <input type="text" name="search" value="{{(isset($_GET['search'])? $_GET['search'] : '')}}"
                                   class="form-control" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody id="patient-data">
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
                                    <td>{!! $item->PairStatusRender(\Illuminate\Support\Facades\Auth::user()->id) !!}</td>
                                    <td>
                                        @if(!$item->PairStatus(\Illuminate\Support\Facades\Auth::user()->id) )
                                            <a href="{{route('doctor.patient.pair',$item->id)}}"
                                               class="btn btn-sm btn-default"><i class="fa fa-plus"></i></a>
                                        @else
                                            <button class="btn btn-default btn-sm" disabled><i class="fa fa-plus"></i></button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="pull-right">
                            {{isset($_GET['search']) ? $patients->appends(['search' => $_GET['search']])->links() : $patients->links()}}

                        </div>
                    </div>
                </div>
                <a href="{{route('doctor.patient.index')}}" class="btn btn-default">Kembali</a>
            </div>
        </div>
    </section>
@endsection