<?php

include 'conexao.php';

$id= $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário Mercado Móveis</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		
		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: #83AF9B;
			color: #ffffff; /* cor letra */
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
	?>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Formulário de cadastro</h4>
		<form action="_atualizar_membro.php" method="post" style="margin-top: 20px">
			<?php

				$sql = "SELECT * FROM `mercadomoveis` WHERE id_formulario =  $id";
				$buscar = mysqli_query($conexao, $sql);
				while ($array = mysqli_fetch_array($buscar)) {
					
    				$id_formulario = $array['id_formulario'];
    				$nome = $array['nome'];
    				$email = $array['email'];
    				$telefone = $array['telefone'];
   					$endereco = $array['endereco'];
  					$estado = $array['estado'];
    				$cidade = $array['cidade'];
				
			?>
 	 		<div class="mb-3">
 	 			<label class="form-label">Nome</label>
 	 			<input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
 	 			<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
 	 		</div>	
			<div class="mb-3">
    			<label for="exampleInputEmail1" class="form-label">E-mail</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $email?>">
 	 		</div>
 	 		<div class="mb-3">
 	 			<label class="form-label">Telefone</label>
 	 			<input type="number" class="form-control" name="telefone" value="<?php echo $telefone?>">

 	 		</div>	
 	 		<div class="mb-3">
 	 			<label class="form-label">Endereço</label>
 	 			<input type="text" class="form-control" name="endereco" value="<?php echo $endereco?>">
 	 		</div>	
 	 		<div class="mb-3">
            	<label>Estado</label>
            	<select class="form-control" name="estado">
                	<option selected hidden>Escolha...</option>
                	<option>Acre</option>
                	<option>Alagoas</option>
                	<option>Amapá</option>
                	<option>Amazonas</option>
                	<option>Bahia</option>
                	<option>Ceará</option>
               		<option>Distrito Federal</option>
                	<option>Espírito Santo</option>
                	<option>Goiás</option>
               	 	<option>Maranhão</option>
                	<option>Mato Grosso</option>
                	<option>Mato Grosso do Sul</option>
                	<option>Minas Gerais</option>
              	 	<option>Pará</option>
                	<option>Paraíba</option>
                	<option>Paraná</option>
                	<option>Pernambuco</option>
                	<option>Piauí</option>
               	 	<option>Rio de Janeiro</option>
                	<option>Rio Grande do Norte</option>
                	<option>Rio Grande do Sul</option>
                	<option>Rondônia</option>
                	<option>Roraima</option>
                	<option>Santa Catarina</option>
                	<option>São Paulo</option>
                	<option>Sergipe</option>
                	<option>Tocantins</option>
            	</select>
            </div>	
 	 		<div class="mb-3">
 	 			<label class="form-label">Cidade</label>
 	 			<input type="text" class="form-control" name="cidade" value="<?php echo $cidade?>">
 	 		</div>	
 	 		<div style="text-align: right;">
 	 			<a href="Listar_membros.php" role="button" id="botaoVoltar" class="btn btn-sm">Voltar</a>
 	 			<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
 	 		</div>	

 	 		<?php }  ?>
		</form>		
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>