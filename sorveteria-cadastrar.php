<h1>Cadastrar Nova Sugestão!</h1>
<form action="?page=sorveteria-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Sorvete</label>
		<input type="text" name="nome_sorvete" class="form-control">
	</div>
	<div class="form-group">
		<label>Sabor do Sorvete</label>
		<input type="text" name="sabor_sorvete" class="form-control">
	</div>
	<div class="form-group">
		<label>Primeiro Complemento</label>
		<input type="text" name="complemento1_sorvete" class="form-control">
	</div>
		<div class="form-group">
		<label>Segundo Complemento</label>
		<input type="text" name="complemento2_sorvete" class="form-control">
	</div>
			<div class="form-group">
		<label>Calda</label>
		<input type="text" name="calda_sorvete" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Cadastrar!</button> <button class="btn btn-danger" onclick="history.back(-1)">Voltar</button>
	</div>
</form>

