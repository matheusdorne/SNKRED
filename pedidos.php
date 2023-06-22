<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visualizar Pedidos</title>
    <link rel="stylesheet" href="css/header.css"> #
    <link rel="stylesheet" href="css/pedidos.css"> #
</head>
<body>
  <header>
    <nav>
      <ul id="header_snkred">
        <li><a href="index.html"><img src="logo.png" alt="Logo" class="logo-snkred"></a></li>
        <li class="loginBtnLi"><a href="login.html" class="loginBtn">Login</a></li>
        <li><a href="carrinho.html"><img src="cart.png" alt="Carrinho" class="cartbtn"></a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="pedidos-container">
      <h1>Meus Pedidos</h1>
      <table class="pedidos-table">
        <thead>
          <tr>
            <th>Número do Pedido</th>
            <th>Data</th>
            <th>Valor Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>10/07/2023</td>
            <td>R$ 150,00</td>
            <td>Aguardando Pagamento</td>
          </tr>
          <tr>
            <td>002</td>
            <td>15/07/2023</td>
            <td>R$ 250,00</td>
            <td>Em Processamento</td>
          </tr>
          <tr>
            <td>003</td>
            <td>20/07/2023</td>
            <td>R$ 100,00</td>
            <td>Enviado</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <footer>
    <div class="footer">
      <ul>
        <li><a href="#">Sobre Nós</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="#">Política de Privacidade</a></li>
      </ul>
      <ul class="socialBtn">
        <li><a href="#"><img src="facebook.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="instagram.png" alt="Instagram"></a></li>
        <li><a href="#"><img src="twitter.png" alt="Twitter"></a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
