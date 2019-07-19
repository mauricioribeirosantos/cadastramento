<?php

	include('cabecalho.php');
	include('../controller/funcoes.php');
	include('../model/conecta.php');

	$funcionarios = listaFuncionarios($db);

	?>
	<div class="titulo">
		<h1>Lista de funcionários cadastrados</h1>
	</div>

	<div class="tabela">
		<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Nome</th>
						<th scope="col">E-mail</th>
						<th scope="col">CPF</th>
					</tr>
				</thead>
				<?php
				foreach($funcionarios as $funcionario) {
					?>
					<tbody>
						<tr>
							<td scope="row"><?=$funcionario['id']?></td>
							<td><?=$funcionario['nome']?></td>
							<td><?=$funcionario['email']?></td>
							<td><?=$funcionario['cpf']?></td>
						</tr>
					</tbody>
					<?php
				}//fim foreach
				?>
			</table>
		</div>
	</div>
		

	<?php
		include('rodape.php');
	?>