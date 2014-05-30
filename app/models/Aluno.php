<?php

class Aluno extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'nome' => 'required',
		'idade' => 'required',
		'serie' => 'required',
		'codigo' => 'required',
		'senha' => 'required',
		'status' => 'required',
		'obs' => 'required'
	);
}
