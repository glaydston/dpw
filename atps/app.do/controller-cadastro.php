<?php
	## variavel de retorno 
	$retorno;
	
	$username = $POST['username'];
	$password = $POST['password'];
	$mail = $POST['mail'];

	## verifica se o campo está vazio
	if(!$username) retorno .= 'Campo usuário vazio!!<br/>';
	if(!$password) retorno .= 'Campo senha vazio!!<br/>';
	if(!$mail) retorno .= 'Campo e-mail vazio!!<br/>';
	
	require('connect.php');
	
	require('close_connect.php');
	
?>