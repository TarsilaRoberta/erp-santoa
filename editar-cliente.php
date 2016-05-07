<?php
require('includes/header.php');

$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
$tipo = $id ? 'Editar' : 'Adicionar';

if (isset($_POST['tNome'])) {
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	exit;
}
?>

<fieldset>
	<legend><?= $tipo . ' Cliente' ?></legend>
	<legend class="right"><a href="lista-clientes.php" class="button">&laquo; Voltar</a></legend>

	<form action="editar-cliente.php?id=<?=$id?>" method="post">
		<div class="form-input">
			<label for="cNome">Nome</label>
			<input type="text" name="tNome" id="cNome" size="70" maxlength="60" placeholder="NOME COMPLETO"/>
		</div>

		<div class="form-input radio">
			<label for=""></label>
			<label for="fisica"><input type="radio" name="cPessoa" value="fisica" id="fisica" checked> Pessoa Física</label>
			<label for="juridica"><input type="radio" name="cPessoa" value="juridica" id="juridica"> Pessoa Jurídica</label>
		</div>
		<div class="form-input">
			<label for="cCpfCnpj">CPF/CNPJ</label>
			<input type="text" name="tCpfCnpj" id="cCpfCnpj" class="cpf" size="20" maxlength="60" placeholder="CPF/CNPJ"/>
		</div>
		<div class="form-input">
			<label for="cTelefone">Telefone</label>
			<input type="text" name="tTelefone" id="cTelefone" size="20" class="telefone" maxlength="60"/>
		</div>

		<div class="form-input">
			<label for="cCelular">Celular</label>
			<input type="text" name="tCelular" id="cCelular" size="20" class="telefone" maxlength="60"/>
		</div>

		<div class="form-input">
			<label for="cObs">Observações</label>
			<textarea name="cObs" id="cObs" cols="40" rows="4"></textarea>
		</div>

		<div class="form-submit">
			<button class="button success" type="submit">Salvar Alterações</button>
		</div>
	</form>
</fieldset>

<script>
	$('[name="cPessoa"]').change(function(e){
		$('#cCpfCnpj').val('').removeClass($(this).val() == 'fisica' ? 'cnpj' : 'cpf').addClass($(this).val() == 'fisica' ? 'cpf' : 'cnpj');
	});
</script>

<?php require('includes/footer.php') ?>