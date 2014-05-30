@extends('layouts.scaffold')

@section('main')

<h1>Todos Alunos</h1>

<p>{{ link_to_route('alunos.create', 'Cradastrar novo Aluno', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($alunos->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Idade</th>
				<th>Serie</th>
				<th>Codigo</th>
				<th>Senha</th>
				<th>Status</th>
				<th>Observação</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($alunos as $aluno)
				<tr>
					<td>{{{ $aluno->nome }}}</td>
					<td>{{{ $aluno->idade }}}</td>
					<td>{{{ $aluno->serie }}}</td>
					<td>{{{ $aluno->codigo }}}</td>
					<td>{{{ $aluno->senha }}}</td>
					<td>{{{ $aluno->status }}}</td>
					<td>{{{ $aluno->obs }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('alunos.destroy', $aluno->id))) }}
                            {{ Form::submit('Deletar', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('alunos.edit', 'Editar', array($aluno->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	Não há alunos
@endif

@stop
