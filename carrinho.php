<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrinho de compras</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/carrinho.css">
</head>

<body>
	<div class="bodymain">
		<?php
		include_once 'layout/header.php';
		include_once 'layout/promo.php';
		?>

		<h3>Carrinho de Compras</h3>
		<div class="container_carrinho">
			<table>
				<thead>
					<tr>
						<th>
							<span>Produto</span>
						</th>
						<th>
							<span>Preço</span>
						</th>
						<th>
							<span>Quantidade</span>
						</th>
						<th>
							<span>Total</span>
						</th>
					</tr>
				</thead>
				<tr>

					<th class="prodView">
						<img src="https://artwalk.vteximg.com.br/arquivos/ids/242368-1000-1000/Tenis-adidas-ZX-5K-Boost-Masculino-Verde.jpg?v=637799205331300000" alt="">
						<span>Adidas ZX BOOST</span>
					</th>

					<th>
						<span>R$759,99</span>
					</th>
					<th>
						<form action="quantidade.html">
							<input type="number" name="quantidade" placeholder="1" min="1" max="100" class="contador">
						</form>
					</th>
					<th>
						<span>R$759,99</span>
					</th>

				</tr>
				<tr>

					<th class="prodView">
						<img src="https://artwalk.vteximg.com.br/arquivos/ids/235967-1000-1000/Tenis-Nike-Air-Force-1-GS-Infantil-Preto.jpg?v=637629042643700000" alt="">
						<span>Nike Air Force 1 GS</span>
					</th>

					<th>
						<span>R$599,99</span>
					</th>
					<th>
						<form action="quantidade.html">
							<input type="number" name="quantidade" placeholder="1" min="1" max="100" class="contador">
						</form>
					</th>
					<th>
						<span>R$599,99</span>
					</th>

				</tr>
			</table>
		</div>
		<button action="pagamento.php" id="btnContinua">Continuar para Pagamento</button>
		<?php
		include_once 'layout/footer.php'
		?>

	</div>
</body>

</html>