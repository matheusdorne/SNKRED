<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SNKRED | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="css/header.css">


</head>

<body>
	<div class="bodymain">
		<?php
		include_once 'layout/header.php';
		include_once 'layout/promo.php';
		?>
		<div class="tela-login">
			<h1>Login</h1>
			<form name="Login" action="login.html" method="post">
				<ul class="logincontainer">
					<li>
						<input type="text" name="nome" placeholder="Nome" id="nomeid">
					</li>
					<li>
						<input type="password" name="senha" placeholder="Senha" id="senhaid">
					</li>
					<li>
						<a href="login.html" class="btnLogar">Enviar</a>
					</li>
					<li>
						<a href="" class="forgetPW">Esqueceu sua senha?</a>
					</li>
					<li>
						<span>ou</span>
					</li>
					<li>
						<a href="" class="signup">Cadastre-se</a>
					</li>
				</ul>
			</form>
		</div>
		<?php 
		include_once 'layout/footer.php'
		?>
	</div>
</body>

</html>