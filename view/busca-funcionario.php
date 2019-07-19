<?php

	include('../model/conecta.php');
	include('../controller/funcoes.php');
	include('cabecalho.php');

	?>

	<div class="titulo">
		<h1>Busca por funcionário</h1>
	</div>

	<div class="container">
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
			<div class="form-group">
				<div class="row">
					<div class="col col-sm-6">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" id="nome">
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Buscar</button>
		</form>
	</div>

<?php

	if(!empty($_POST)) {
		$nome = $_POST['nome'];
		$funcionarios = buscaFuncionarioNome($db, $nome);
		if(count($funcionarios) > 0) {
?>		
		<div class="tabela">
			<div class="container">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">nome</th>
							<th scope="col">e-mail</th>
							<th scope="col">cpf</th>
							<th scope="col">Ação</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach($funcionarios as $funcionario) {
						?>
							<tr>
								<td scope="col"><?=$funcionario['id']?></td>
								<td><?=$funcionario['nome']?></td>
								<td><?=$funcionario['email']?></td>
								<td><?=$funcionario['cpf']?></td>
								<td>
									<a class="btn btn-warning" href="formulario-altera-funcionario.php?id=<?=$funcionario['id']?>">Alterar</a>
									<a class="btn btn-danger" href="">Excluir</a>
								</td>
							</tr>
						<?php
						}//fim foreach
						?>
					</tbody>
				</table>
			</div>
		</div>
<?php	
		}//fim if funcionarios > 0
		else {
			?>
			<div class="container">
				<div class="row">
					<div class="col col-sm-6 aviso">
						<div class="alert alert-danger aviso">
							Funcionário não encontrado!
						</div>
					</div>					
				</div>
			</div>
			<?php
		}
	}//fim if post


	include('rodape.php');
?>

