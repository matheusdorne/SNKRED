<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Pedidos</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/pedidos.css">
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
    <div id="blackfriday">BLACK FRIDAY COM ATÉ 70% OFF</div>

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
</body>

</html>