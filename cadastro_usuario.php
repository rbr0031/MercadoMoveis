<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Usuário</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<style type="text/css">
		
		#botaoVoltar{
			background-color: #FC9D9A;
		}

		#botaoCadastrar {
			background-color: #83AF9B;
			color: #ffffff; /* cor letra */
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
	
	<div class="container" style="width: 400px; margin-top: 40px;">
		<h4>Cadastro de usuário</h4>
		<form action="_insert_usuario.php" method="post">
			<div class="mb-3">
				<label class="form-label">Nome do Usuário</label>
				<input type="text" name="nomeusuario" class="form-control" placeholder="Nome completo" autocomplete="off" required > 
			</div>
			<div class="mb-3">
    			<label for="exampleInputEmail1" class="form-label">E-mail</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailusuario" placeholder="Seu e-mail" autocomplete="off" required>
 	 		</div>
			<div class="mb-3">
				<label class="form-label">Senha do Usuário</label>
				<input id="txtSenha" type="password" name="senhausuario" class="form-control" placeholder="Sua senha" autocomplete="off" required > 
			</div>
			<div class="mb-3">
				<label class="form-label">Repetir senha</label>
				<input type="password" name="senhausuario2" class="form-control" placeholder="Repita sua senha" autocomplete="off" required oninput="validaSenha(this)" > 
				<small>Precisa ser igual a senha digitada acima.</small>
			</div>
			<div class="mb-3">
				<label>Nível de Acesso</label>
				<select name="nivelusuario" class="form-control">
					<optgroup>
						<option value="1">Administrador</option>
					</optgroup>
					<optgroup>
						<option value="2">Funcionário</option>
						<option value="3">Conferente</option>
					</optgroup>
				</select>
			</div>
			<div style="text-align: right;">
				<a href="menu.php" role="button" id="botaoVoltar" class="btn btn-sm">Voltar</a>
				<button type="submit" id="botaoCadastrar" class="btn btn-sm">Cadastrar</button>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	<script>
		function validaSenha (input) {
			if (input.value != document.getElementById('txtSenha').value) {
				input.setCustomValidity('Repita a senha corretamente');
			} else {
				input.setCustomValidity('');
			}
		}
	</script>
</body>
</html>