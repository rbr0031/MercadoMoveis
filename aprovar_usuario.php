<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aprovar Usuário</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">

		#botaoVoltar {

			background-color: #FC9D9A;
		}
	</style>
</head>
<body>
	
	<?php
		session_start();

		$usuario = $_SESSION['usuario'];

		if(!isset($_SESSION['usuario'])){
			header('Location: index.php');
		}
	?>

	<div class="container" style="margin-top: 40px;">
		<h3>Lista Usuários</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">E-mail</th>
					<th scope="col">Nivel</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>

			<?php
			include 'conexao.php';
			$sql = "SELECT * FROM usuarios Where status = 'Inativo'";
			$busca = mysqli_query($conexao, $sql);

			while ($array = mysqli_fetch_array($busca)){
				
				$id_usuario = $array['id_usuario'];
				$nomeusuario = $array['nome_usuario'];
				$mail = $array['email_usuario'];
				$nivel = $array['nivel_usuario'];
			?>

			<tr>
				<td><?php echo $nomeusuario; ?></td>
				<td><?php echo $mail; ?></td>
				<td><?php echo $nivel; ?></td>

				<td>
					<a class="btn btn-success btn-sm" style="color: #fff"; href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=1" role="button">&nbsp;Administrador</a>
					<a class="btn btn-warning btn-sm" style="color: #fff"; href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=2" role="button">&nbsp;Funcionário</a>
					<a class="btn btn-dark btn-sm" style="color: #fff"; href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=3" role="button">&nbsp;Conferente</a>

					<a class="btn btn-danger btn-sm" style="color: #fff"; href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button">&nbsp;Excluir</a>
				</td>
			</tr>

			<?php } ?>
		</table>

		<div style="text-align: right;">
			<a href="menu.php" role="button" id="botaoVoltar" class="btn btn-sm">Voltar</a>	
		</div>	
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>