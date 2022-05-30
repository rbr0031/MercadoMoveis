<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
		
	<?php
		session_start();

		$usuario = $_SESSION['usuario'];

		if(!isset($_SESSION['usuario'])){
			header('Location: index.php');
		}

		include 'conexao.php';

		$sql = "SELECT `nivel_usuario` FROM `usuarios` WHERE email_usuario = '$usuario' and status = 'Ativo'";
		$buscar = mysqli_query($conexao, $sql);
		$array = mysqli_fetch_array($buscar);
		$nivel = $array['nivel_usuario'];
	?>

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<?php
				if (($nivel == 1) || ($nivel == 2)) {

			?>
  			<div class="col-sm-6">
    			<div class="card">
      				<div class="card-body">
       		 			<h5 class="card-title">Adicionar membro de equipe</h5>
       		 			<p class="card-text">Opção para adicionar um membro a equipe</p>
       		 			<a href="cadastrar_membros.php" class="btn btn-primary">Cadastrar Membro</a>
     	 			</div>
    			</div>
  			</div>

  			<?php } ?>

  			<div class="col-sm-6">
    			<div class="card">
      				<div class="card-body">
       					<h5 class="card-title">Lista dos membros da equipe</h5>
        				<p class="card-text">Visualizar, editar e excluir</p>
        				<a href="Listar_membros.php" class="btn btn-primary">Membros da equipe</a>
      				</div>
    			</div>
  			</div>

  			<?php
				if (($nivel == 1)) {

			?>

  			<div class="col-sm-6">
	    		<div class="card">
	      			<div class="card-body">
	       		 		<h5 class="card-title">Aprovar Usuários</h5>
	       		 		<p class="card-text">Aprovar usuários cadastrados</p>
	       		 		<a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
	     	 		</div>
    			</div>
  			</div>
  			<div class="col-sm-6">
	    		<div class="card">
	      			<div class="card-body">
	       		 		<h5 class="card-title">Cadastrar Usuários</h5>
	       		 		<p class="card-text">Cadastrar usuários</p>
	       		 		<a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
	     	 		</div>
    			</div>
  			</div>

  			<?php } ?>
		</div>
	</div>	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
