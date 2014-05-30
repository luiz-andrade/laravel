<?php

class AgendasController extends BaseController {

	/**
	 * Agenda Repository
	 *
	 * @var Agenda
	 */
	protected $agenda;

	public function __construct(Agenda $agenda)
	{
		$this->agenda = $agenda;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$agendas = $this->agenda->all();

		return View::make('agendas.index', compact('agendas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('agendas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Agenda::$rules);

		if ($validation->passes())
		{
			$this->agenda->create($input);

			return Redirect::route('agendas.index');
		}

		return Redirect::route('agendas.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$agenda = $this->agenda->findOrFail($id);

		return View::make('agendas.show', compact('agenda'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$agenda = $this->agenda->find($id);

		if (is_null($agenda))
		{
			return Redirect::route('agendas.index');
		}

		return View::make('agendas.edit', compact('agenda'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Agenda::$rules);

		if ($validation->passes())
		{
			$agenda = $this->agenda->find($id);
			$agenda->update($input);

			return Redirect::route('agendas.show', $id);
		}

		return Redirect::route('agendas.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->agenda->find($id)->delete();

		return Redirect::route('agendas.index');
	}

}
