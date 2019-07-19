<?php
	
	include('../model/conecta.php');
	include('../controller/funcoes.php');
	include('cabecalho.php');

	if(!empty($_GET)) {
		$id = $_GET['id'];

		$funcionario = buscaFuncionarioId($db, $id);
	}
	/*else
	{
		$id = $_POST['id'];
		$funcionario = buscaFuncionarioId($db, $id);
	}*/

	if (isset($id)) {
		echo "id = ".$id;
	}


?>

<div class="titulo">
	<h1>Formulário de alteração de dados de funcionário</h1>
</div>

<div class="formulario">
	<div class="container">
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
			<div class="form-group">
				<div class="row">
					<div class="col col-sm-6">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" id="nome" value="<?=$funcionario['nome']?>">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-sm-6">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" name="email" id="email" value="<?=$funcionario['email']?>">
					</div>
				</div>				
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col col-sm-3">
						<label for="cpf">CPF</label>
						<input type="text" class="form-control" name="cpf" id="cpf" value="<?=$funcionario['cpf']?>">
					</div>
				</div>
			</div>
			<input type="hidden" name="id" value="<?=$funcionario['id']?>">
			<button class="btn btn-warning">Alterar</button>
		</form>
	</div>
</div>


<?php
	
	if(!empty($_POST)) {
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];

		if(alteraFuncionario($db, $id, $nome, $email, $cpf)) {
?>
			<div class="row">
				<div class="col col-sm-6 aviso">
					<div class="alert alert-success">
						Funcionario Alterado com sucesso!
					</div>
				</div>
			</div>
<?php


		//header('Location: busca-funcionario.php');
		}//fim if alteraFuncionario

	}//fim if empty

?>


<!--verificar o erro do reboot pq da erro após alterar os dados dos campos-->