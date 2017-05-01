<div class="form-group @if($errors->has('name')) has-error @endif">
    {!! Form::label('name', 'Nama', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('name',NULL, array('class' => 'form-control', 'id' => 'name')) !!}
        @if($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('gender')) has-error @endif">
    {!! Form::label('gender', 'Jenis Kelamin', array('class' => 'col-sm-2 control-label')) !!}

    <div class="col-sm-10">
        {!! Form::select('gender', ['male' => 'Laki-laki' , 'female' => 'Perempuan'], null, ['class' => 'form-control','style'=>'width: 100%']) !!}
        @if($errors->has('gender')) <span class="help-block">{{ $errors->first('gender') }}</span> @endif
    </div>
</div>

<div class="form-group @if($errors->has('birth_date')) has-error @endif">
    {!! Form::label('birth_date', 'Tanggal lahir', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('birth_date',NULL, array('class' => 'form-control', 'id' => 'birth_date','required')) !!}
        @if($errors->has('birth_date')) <span class="help-block">{{ $errors->first('birth_date') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('birth_place')) has-error @endif">
    {!! Form::label('birth_place', 'Tempat Lahir', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('birth_place',NULL, array('class' => 'form-control', 'id' => 'birth_place','required')) !!}
        @if($errors->has('birth_place')) <span class="help-block">{{ $errors->first('birth_place') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('parent_name')) has-error @endif">
    {!! Form::label('parent_name', 'Nama Orangtua', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('parent_name',NULL, array('class' => 'form-control', 'id' => 'parent_name','required')) !!}
        @if($errors->has('parent_name')) <span class="help-block">{{ $errors->first('parent_name') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('occupation')) has-error @endif">
    {!! Form::label('occupation', 'Pekerjaan', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('occupation',NULL, array('class' => 'form-control', 'id' => 'occupation','required')) !!}
        @if($errors->has('occupation')) <span class="help-block">{{ $errors->first('occupation') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('marital_status')) has-error @endif">
    {!! Form::label('marital_status', 'Status Pernikahan', array('class' => 'col-sm-2 control-label')) !!}

    <div class="col-sm-10">
        {!! Form::select('marital_status', [0 => 'Belum Menikah',1 => 'Menikah'], null, ['class' => 'form-control','style'=>'width: 100%']) !!}
        @if($errors->has('marital_status')) <span class="help-block">{{ $errors->first('marital_status') }}</span> @endif
    </div>
</div>

<div class="form-group @if($errors->has('address')) has-error @endif">
    {!! Form::label('address', 'Alamat', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('address',NULL, array('class' => 'form-control', 'id' => 'address','required')) !!}
        @if($errors->has('address')) <span class="help-block">{{ $errors->first('address') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('blood_type')) has-error @endif">
    {!! Form::label('blood_type', 'Golongan Darah', array('class' => 'col-sm-2 control-label')) !!}

    <div class="col-sm-10">
        {!! Form::select('blood_type', ['A' => 'A','B' => 'B','O' => 'O','AB' => 'AB'], null, ['class' => 'form-control','style'=>'width: 100%']) !!}
        @if($errors->has('blood_type')) <span class="help-block">{{ $errors->first('blood_type') }}</span> @endif
    </div>
</div>

<div class="form-group @if($errors->has('id_card_number')) has-error @endif">
    {!! Form::label('id_card_number', 'No KTP', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('id_card_number',NULL, array('class' => 'form-control', 'id' => 'id_card_number','required')) !!}
        @if($errors->has('id_card_number')) <span class="help-block">{{ $errors->first('id_card_number') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('n_families')) has-error @endif">
    {!! Form::label('n_families', 'Jumlah Keluarga', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('n_families',NULL, array('class' => 'form-control', 'id' => 'n_families','required')) !!}
        @if($errors->has('n_families')) <span class="help-block">{{ $errors->first('n_families') }}</span> @endif

    </div>
</div>


<hr>
@if($SubmitButtonText == 'Ubah')
    {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-warning btn-flat btn-block form-control'])  !!}
@else
    {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-success btn-flat btn-block form-control'])  !!}
@endif