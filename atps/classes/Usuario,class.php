<?php

	class usuario {
	
	private $Codigo;
	private $Nome;
	private $Email;
	private $Senha;
	
	public __construct(){
	}
	
	function __construct($Codigo, $Nome, $Email, $Senha)
    {
          $this->Codigo= $Codigo;
          $this->Nome = $Nome;
          $this->Email= $Email;
          $this->Senha= $Senha;
    }

}

?>


