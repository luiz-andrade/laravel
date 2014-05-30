@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Cadastrar Aluno</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'alunos.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('nome', 'Nome:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('nome', Input::old('nome'), array('class'=>'form-control', 'placeholder'=>'Nome')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('idade', 'Idade:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'idade', Input::old('idade'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('serie', 'Série:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'serie', Input::old('serie'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('codigo', 'Codigo:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'codigo', Input::old('codigo'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('senha', 'Senha:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('senha', Input::old('senha'), array('class'=>'form-control', 'placeholder'=>'Senha')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('status', 'Status:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::checkbox('status') }} Ativo
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('obs', 'Observação:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('obs', Input::old('obs'), array('class'=>'form-control', 'placeholder'=>'Obs')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Cadastrar', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('alunos.index', 'Voltar', null, array('class'=>'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop


