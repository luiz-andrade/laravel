@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Criar Agenda</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'agendas.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('id', 'Id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'id', Input::old('id'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('nome', 'Nome:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('nome', Input::old('nome'), array('class'=>'form-control', 'placeholder'=>'Nome')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('telefone1', 'Telefone:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('telefone1', Input::old('telefone1'), array('class'=>'form-control', 'placeholder'=>'Telefone1')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('telefone2', 'Celular:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('telefone2', Input::old('telefone2'), array('class'=>'form-control', 'placeholder'=>'Celular')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('endereco', 'Endereco:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('endereco', Input::old('endereco'), array('class'=>'form-control', 'placeholder'=>'Endereco')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Criar', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

@stop


