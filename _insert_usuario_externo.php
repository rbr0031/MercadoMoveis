<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
// $nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `status`) VALUES ('$nomeusuario', '$mail', '$senha', '$status')";

$inserir = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container" style="width: 500px;margin-top: 40px;">
	<center>
		<h4>Usuário cadastrado com sucesso, esperando aprovação</h4>
	</center>
	<div style="padding-top: 20px">
		<center>
			<a href="index.php" role="button" class="btn btn=sm btn-primary">Voltar</a>
		</center>	
	</div>	
</div>