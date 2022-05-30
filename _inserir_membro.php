<?php

include 'conexao.php';

$nome = $_POST['nome']; //recebe o valor do atributo
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO `mercadomoveis`(`nome`, `email`, `telefone`, `endereco`, `estado`, `cidade`) VALUES ('$nome','$email','$telefone','$endereco','$estado','$cidade')";
$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container" style="width: 500px;margin-top: 40px;">
	<center>
		<h4>Membro adicionado!!</h4>
	</center>
	<div style="padding-top: 20px">
		<center>
			<a href="menu.php" role="button" class="btn btn=sm btn-primary">Cadastrar novo membro</a>
		</center>	
	</div>	
</div>