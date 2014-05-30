@extends('layouts.scaffold')

@section('main')

<h1>Todos os contatos da Agenda</h1>

<p>{{ link_to_route('agendas.create', 'Adicionar novo contato', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($agendas->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Telefone</th>
				<th>Celular</th>
				<th>Endereco</th>
				<th>Acao</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($agendas as $agenda)
				<tr>
					<td>{{{ $agenda->id }}}</td>
					<td>{{{ $agenda->nome }}}</td>
					<td>{{{ $agenda->telefone1 }}}</td>
					<td>{{{ $agenda->telefone2 }}}</td>
					<td>{{{ $agenda->endereco }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agendas.destroy', $agenda->id))) }}
                            {{ Form::submit('Deletar', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agendas.edit', 'Editar', array($agenda->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no agendas
@endif

@stop
