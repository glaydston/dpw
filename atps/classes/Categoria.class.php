<?php
class Categoria{
	private $id;
	private $titulo;
	
	public __construct(){}
	
	public __construct($id, $titulo){
		$this->id = $id;
		$this->titulo = $titulo;
	}
	
	public __get($propriedade){
		return $this->$propriedade;
	}
	
	public __set($propriedade, $value){
		$this->$propriedade = $value;
	}
}

?>