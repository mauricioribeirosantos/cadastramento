<?php

	include('../model/conecta.php');
	include('funcoes.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];

	echo "CPF: ".$cpf;


	if(adicionaFuncionario($db, $nome, $email, $cpf)) {
		echo "ok";
	}
	else{
		echo "Erro";
	}