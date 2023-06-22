<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enviar Ticket de Suporte</title>
  <link rel="stylesheet" href="styles.css"> 
  <link rel="stylesheet" href="ticket.css">
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
    <div class="enviar-ticket">
      <h1>Enviar Ticket de Suporte</h1>
      <form action="enviar_ticket.php" method="POST">
        <div class="campo">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>
        </div>
        <div class="campo">
          <label for="email">E-mail:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="campo">
          <label for="assunto">Assunto:</label>
          <input type="text" id="assunto" name="assunto" required>
        </div>
        <div class="campo">
          <label for="mensagem">Mensagem:</label>
          <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
        </div>
        <button type="submit" class="enviar-btn">Enviar</button>
      </form>
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
