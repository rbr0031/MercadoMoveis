<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scaleable=no"/>
	<title>Tela de login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		
		#tamanho {
			width: 350px;
			-webkit-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
			-moz-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
			box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
		}
	</style>
</head>
<body>

	<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
		<div style="padding: 10px;">
			<center>
				<img src="imagem/cadeado.png" width="150px" height="150px">
			</center>
			<form action="index1.php" method="post">
				<div class="mb-3">
					<label>Usuário</label>
					<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
				</div>
				<div class="mb-3">
					<label>Senha</label>
					<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
					</div>
				<div style="text-align: right;">
					<button type="submit" class="btn btn-sm btn-success">Entrar</button>
				</div>
			</form>
		</div>
	</div>

	<div  style="margin-top: 10px">
		<center>
			<small>Você não possui cadastro ? Clique<a href="cadastro_usuario_externo.php"> aqui</a>
		</center>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>