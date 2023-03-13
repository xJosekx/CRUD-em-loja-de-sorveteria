<?php
switch ($_POST["acao"]) {
	case 'cadastrar':
   $nome   = $_POST ["nome_sorvete"];
   $sabor   = $_POST ["sabor_sorvete"];
   $comple  = $_POST ["complemento1_sorvete"];
   $complemen = $_POST ["complemento2_sorvete"];
   $calda   = $_POST ["calda_sorvete"];

   	$sql = "INSERT INTO sorveteria (nome_sorvete, sabor_sorvete, complemento1_sorvete, complemento2_sorvete, calda_sorvete)  VALUES ('{$nome}', '{$sabor}', '{$comple}', '{$complemen}', '${calda}')";
         $res = $conn->query($sql) or die($conn->error);

         if($res==true){
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=cliente-consultar';</script>";
         }else{
            print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
         }
         break;

      case 'editar':
         # code...
         break;

      case 'excluir':
         # code...
         break;
                           }

?>

<button class="btn btn-success" onclick="history.back(-1)">Voltar</button>