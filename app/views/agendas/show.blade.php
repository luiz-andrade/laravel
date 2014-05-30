@extends('layouts.scaffold')

@section('main')

<h1>Show Agenda</h1>

<p>{{ link_to_route('agendas.index', 'Return to All agendas', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
				<th>Nome</th>
				<th>Telefone1</th>
				<th>Celular</th>
				<th>Endereco</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $agenda->id }}}</td>
					<td>{{{ $agenda->nome }}}</td>
					<td>{{{ $agenda->telefone1 }}}</td>
					<td>{{{ $agenda->telefone2 }}}</td>
					<td>{{{ $agenda->endereco }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('agendas.destroy', $agenda->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('agendas.edit', 'Edit', array($agenda->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
