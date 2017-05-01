<div class="form-group @if($errors->has('diagnosis')) has-error @endif">
    {!! Form::label('diagnosis', 'Diagnosis', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('diagnosis',NULL, array('class' => 'form-control', 'id' => 'diagnosis')) !!}
        @if($errors->has('diagnosis')) <span class="help-block">{{ $errors->first('diagnosis') }}</span> @endif

    </div>
</div>

<div class="form-group @if($errors->has('prescription')) has-error @endif">
    {!! Form::label('prescription', 'Prescription', array('class' => 'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('prescription',NULL, array('class' => 'form-control', 'id' => 'prescription')) !!}
        @if($errors->has('prescription')) <span class="help-block">{{ $errors->first('prescription') }}</span> @endif

    </div>
</div>

{!! Form::hidden('user_id',\Illuminate\Support\Facades\Auth::user()->id, array('class' => 'form-control', 'id' => 'prescription')) !!}


<hr>
@if($SubmitButtonText == 'Ubah')
    {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-warning btn-flat btn-block form-control'])  !!}
@else
    {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-success btn-flat btn-block form-control'])  !!}
@endif