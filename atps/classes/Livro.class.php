<?php
class Livro{
	private $id;
	private $titulo;
	private $descricao;
	private $imagem;
	private $valor;
	private $categorias;
	
	public __construct(){
	}
	
	public __get($propriedade){
		return $this->$propriedade;
	}
	
	public __set($propriedade, $value){
		$this->$propriedade = $value;
	}

}


?>