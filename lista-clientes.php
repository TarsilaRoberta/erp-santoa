<?php require('includes/header.php') ?>

<fieldset>
	<legend>Lista de Clientes</legend>
	<legend class="right"><a href="editar-cliente.php?id=0" class="button">Adicionar Cliente</a></legend>

	<table class="table">
		<thead>
			<tr>
				<th>Cod.</th>
				<th>Nome</th>
				<th>CPF/CNPJ</th>
				<th>Telefone</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql = " SELECT cli_id, cli_nome, cli_cpf_cnpj, cli_telefone, cli_celular ";
			$sql .= " FROM clientes";

			$clientes = $conexao->query($sql);
			while ($cliente = $clientes->fetch_assoc()) {
				?>
			<tr>
				<td><?=$cliente['cli_id']?></td>
				<td><?=$cliente['cli_nome']?></td>
				<td><?=$cliente['cli_cpf_cnpj']?></td>
				<td><?=$cliente['cli_telefone'] . ' ' . $cliente['cli_celular']?></td>
				<td></td>
			</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</fieldset>

<?php require('includes/footer.php') ?>