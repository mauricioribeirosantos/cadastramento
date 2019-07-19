<?php
	include('cabecalho.php');
?>
	
	<div class="titulo">
		<h1>Formulário de cadastro de funcionário</h1>
	</div>

	<div class="corpo">
		<div class="container">
			<form action="../controller/cadastra-funcionario.php" method="POST">
				<div class="form-group">
					<div class="row">
						<div class="col col-sm-6">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col col-sm-6">
							<label for="email">E-mail</label>
							<input type="email" class="form-control" name="email" id="email">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col col-sm-3">
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" name="cpf" id="cpf">
						</div>
					</div>
				</div>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</form>
		</div>
	</div>

<?php
	include('rodape.php');
?>