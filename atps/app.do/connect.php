<?php    
	function open_connect(){
		$host = "servidor_fornecido_pelo_000webhost";    
		$database = "identificador_nome_banco";    
		$user = "identificador_usuario_banco";    
		$password = "senha_banco";

		$link = mysqli_connect($host, $user, $password, $database);    
		if(!$link){       
			print("Erro (".mysqli_connect_errno().") ".mysqli_connect_erro()."\n");    
		}  
		return $link;
	}
?>