<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar membros</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/509fcf4a4b.js" crossorigin="anonymous"></script>	

	<style type="text/css">
		
		#botaoEditar {
			background-color: #C8C8A9;
		}

		#botaoDeletar {
			background-color: #FE4365;
		}

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

		include 'conexao.php';

		$sql = "SELECT `nivel_usuario` FROM `usuarios` WHERE email_usuario = '$usuario' and status = 'Ativo'";
		$buscar = mysqli_query($conexao, $sql);
		$array = mysqli_fetch_array($buscar);
		$nivel = $array['nivel_usuario'];
	?>

	<div class="container" style="margin-top: 40px;">
		<h3>Lista de membros</h3>
		<br>
		<table class="table">
  			<thead class="table-dark">
  				<tr>
      				<th scope="col">Nome</th>
      				<th scope="col">E-mail</th>
      				<th scope="col">Telefone</th>
      				<th scope="col">Endereço</th>
      				<th scope="col">Estado</th>
      				<th scope="col">Cidade</th>
      				<th scope="col">Ação</th>
    			</tr>	
  			</thead>

    				<?php
    					include 'conexao.php';
    					$sql = "SELECT * FROM `mercadomoveis`";
    					$busca = mysqli_query($conexao, $sql);

    					while ($array = mysqli_fetch_array($busca)) {
    						
    						$id_formulario = $array['id_formulario'];
    						$nome = $array['nome'];
    						$email = $array['email'];
    						$telefone = $array['telefone'];
    						$endereco = $array['endereco'];
    						$estado = $array['estado'];
    						$cidade = $array['cidade'];
    				?>

    			<tr>
      				<td><?php echo $nome ?></td>
      				<td><?php echo $email ?></td>
      				<td><?php echo $telefone ?></td>
      				<td><?php echo $endereco ?></td>
      				<td><?php echo $estado ?></td>
      				<td><?php echo $cidade ?></td>

      				<?php
						if (($nivel == 1) || ($nivel == 2)) {

					?>
      				<td><a id="botaoEditar" class="btn btn-sm" href="editar_membros.php?id=<?php echo $id_formulario ?>" role="button"><i class="fa-solid fa-user-pen"></i>&nbsp;Editar</a>
      				<?php } 
      					if ($nivel == 1) {

      				?>	
      					<a id="botaoDeletar" class="btn btn-sm" href="deletar_membros.php?id=<?php echo $id_formulario ?>" role="button"><i class="fa-solid fa-user-slash"></i>&nbsp;Excluir</a>	

      				<?php } ?>	
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