<?php

class Agenda extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'id' => 'required',
		'nome' => 'required',
		'telefone1' => 'required',
		'telefone2' => 'required',
		'endereco' => 'required'
	);
}
