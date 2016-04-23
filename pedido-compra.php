<?php require('includes/header.php') ?>

<form method="post" action="#" class="order">
	<fieldset class="order-one">
		<legend>Formulário de Pedidos de Compra</legend>
		
		<p>
			<label for="cCliente">Cliente</label>
			<input type="text" name="tCliente" id="cCliente" size="70" maxlength="60" placeholder="NOME COMPLETO"/>
			
			<label for="cCod">Cód.</label>
			<input type="number" name="tCod" id="cCod" size="30" maxlength="20" placeholder="CÓDIGO"/>
		</p>		
		<p>
			<label for="cDataPedido">Data/Pedido</label><input type="date" name="tDataPedido" id="cDataPedido"/>
		
			<label for="cDataEntrega">Data/Entrega</label><input type="date" name="tDataEntrega" id="cDataEntrega"/>
		</p>
		<p>
			<legend class="cConfPedidos">Conf. Pedidos</legend>
			<input type="radio" name="tConfPedidos" id="cConfPedidossim"/><label for="cConfPedidos">Sim</label> <br>
			<input type="radio" name="tConfPedidos" id="cConfPedidosnao"/><label for="cConfPedidosnao">Não</label>
		</p>
	</fieldset>
</form>

<?php require('includes/footer.php') ?>