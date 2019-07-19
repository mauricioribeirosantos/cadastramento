<?php

	function adicionaFuncionario($db, $nome, $email, $cpf) {
		$query = $db->prepare("INSERT INTO funcionario(nome, email, cpf) VALUES (?,?,?)");
		$query->bind_param("sss", $nome, $email, $cpf);
		$query->execute();
		if($query) {
			return true;
		}
		else {
			return false;
		}
	}

	function listaFuncionarios($db) {
		$funcionarios = array();
		$query = mysqli_query($db, "SELECT * FROM funcionario");
		while($funcionario = mysqli_fetch_assoc($query)) {
			array_push($funcionarios, $funcionario);
		}
		return $funcionarios;
	}

	function buscaFuncionarioNome($db, $nome) {
		$funcionarios = array();
		$query = mysqli_query($db, "SELECT * FROM funcionario WHERE nome like '%{$nome}%'");
		while($funcionario = mysqli_fetch_assoc($query)) {
			array_push($funcionarios, $funcionario);
		}
		return $funcionarios;
	}

	function buscaFuncionarioId($db, $id) {
		$query = mysqli_query($db, "SELECT * FROM funcionario WHERE id = {$id}");
		return mysqli_fetch_assoc($query);
	}

	function alteraFuncionario($db, $id, $nome, $email, $cpf) {
		$query = "UPDATE funcionario SET nome = '{$nome}', email = '{$email}', cpf = '{$cpf}' WHERE id = {$id}";
		return mysqli_query($db, $query);
	}

