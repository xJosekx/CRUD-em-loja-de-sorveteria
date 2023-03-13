<h1>Consultar Sorvete</h1>
<?php
	$sql = "SELECT * FROM sorveteria";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd>0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)";
		print "<table class='table table-striped table-bordered table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Sorvete</th>";
		print "<th>Sabor do sorvete</th>";
		print "<th>Primeiro complemento</th>";
		print "<th>Segundo complemento</th>";
		print "<th>Calda</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			
			print "<td>".$row->id_sorveteria."</td>";
			print "<td>".$row->nome_sorvete."</td>";
			print "<td>".$row->sabor_sorvete."</td>";			
			print "<td>".$row->complemento1_sorvete."</td>";
			print "<td>".$row->complemento2_sorvete."</td>";
			print "<td>".$row->calda_sorvete."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Nenhum dado encontrado.</div>";
	}

?>
<button class="btn btn-danger" onclick="history.back(-1)">Voltar</button>