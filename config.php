<?php

	$dbhost = 'Localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'loja';

	$conexao = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

	/* Testandop a conexao com o banco de dados:

	if ($conexao->connect_errno) {
		echo "Erro: Falha na conexão com o banco de dados!";
	} else {
		echo "Conexão ao banco de dados: SUCESSO!";
	}

	*/

?>