<?php 
require_once 'function.php';
?>
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
			<form name="login" action="login.php" method="post">
				<ul class="logincontainer">
					<li>
						<input type="email" name="email" placeholder="Informe seu E-mail" id="emailid" required>
					</li>
					<li>
						<input type="password" name="senha" placeholder="Insira sua Senha" id="senhaid" required>
					</li>
					<li>
						<input type="submit" name="acessar" value="Acessar" >
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

			<?php 
			if(isset($_POST['acessar'])){
				login($connect); 

			}
			?>
		</div>
		<?php 
		include_once 'layout/footer.php'
		?>
	</div>
</body>

</html>