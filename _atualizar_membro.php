<?php

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];		

$sql = "UPDATE `mercadomoveis` SET `nome`='$nome',`email`='$email',`telefone`='$telefone',`endereco`='$endereco',`estado`='$estado',`cidade`='$cidade' WHERE id_formulario = $id";

$atualizar = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container" style="width: 400px; margin-top: 40px";>
	<center>
		<h3>Atualizado com sucesso!</h3>
		<div style="margin-top: 10px;">
			<a href="Listar_membros.php" class="btn btn-sm btn-warning">Voltar</a>
		</div>
	</center>
</div>