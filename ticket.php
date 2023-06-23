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
        <div id="div_head">
            <ul id="header_snkred">
                <li>
                    <a href="main.html">
                        <img class="logo-snkred" src="imagens/logo_snkred.png" alt="LOGO DO SITE SNKRED">
                    </a>
                </li>
                <li>
                    <div class="separador"></div>
                </li>
                <li>
                    <form action="login.html">
                        <button type="submit" class="loginBtn">LOGIN</button>
                    </form>
                </li>
                <li>
                    <a href="carrinho.html">
                        <img class="cartbtn" src="imagens/logo_shoppingcart.png" alt="ICONE DE CARRINHO DE COMPRAS">
                    </a>
                </li>
            </ul>
        </div>
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
        <footer>
            <div class="footer">
                <nav class="footer">
                    <ul>
                        <li>
                            <h3>AJUDA E SUPORTE</h3>
                        </li>
                        <li>
                            <a href="">Sobre nós</a>
                        </li>
                        <li>
                            <a href="">Contato</a>
                        </li>
                        <li>
                            <a href="">Formas de Pagamento</a>
                        </li>
                    </ul>
                </nav>
                <nav class="footer">
                    <ul>
                        <li>
                            <h3>CATEGORIAS</h3>
                        </li>
                        <li>
                            <a href="">Skate</a>
                        </li>
                        <li>
                            <a href="">Casual</a>
                        </li>
                        <li>
                            <a href="">Basquete</a>
                        </li>
                    </ul>
                </nav>
                <nav class="footer">
                    <ul class="socialBtn">
                        <li>
                            <h3>REDE SOCIAIS</h3>
                        </li>
                        <li>
                            <a href="https://pt-br.facebook.com/">
                                <img src="imagens/fbicon.png" alt="ICONE DO FACEBOOK">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/">
                                <img src="imagens/insticon.png" alt="ICONE DO INSTAGRAM">
                            </a>
                        </li>
                        <li> <a href="https://twitter.com/login?lang=pt">
                                <img src="imagens/twiticon.png" alt="ICONE DO TWITTER">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </footer>
</body>

</html>