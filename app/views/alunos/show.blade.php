@extends('layouts.scaffold')

@section('main')

<h1>Detalhes Aluno</h1>

<p>{{ link_to_route('alunos.index', 'Voltar', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

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
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
