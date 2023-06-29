<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Pagamento</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/pagamento.css">
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
        <div class="detalhe-entrega">

        </div>
        <h1 class="detalhe-pagamento-h1">Detalhes do Pagamento</h1>
        <div class="tela-pagamento">

            <form>
                <ul class="detalhes-pagamento">
                    <li>
                        <label>Nome no Cartão:</label>
                        <input type="text" id="nome" placeholder="Insira o nome no cartão" required>
                    </li>
                    <li>
                        <label>Número do Cartão:</label>
                        <input type="text" id="numero-cartao" placeholder="Insira o número do cartão" required>
                    </li>
                    <li>
                        <label>Validade:</label>
                        <input type="date" id="valide-cartao" required>
                    </li>
                    <li>
                        <label>Parcelas:</label>
                        <select id="parcelas" required>
                            <option value="1">1x de R$ 150,00</option>
                            <option value="2">2x de R$ 75,00</option>
                            <option value="3">3x de R$ 50,00</option>
                            <option value="4">4x de R$ 37,50</option>
                            <option value="5">5x de R$ 30,00</option>
                            <option value="6">6x de R$ 25,00</option>
                            <option value="7">7x de R$ 21,43</option>
                            <option value="8">8x de R$ 18,75</option>
                            <option value="9">9x de R$ 16,67</option>
                            <option value="10">10x de R$ 15,00</option>
                            <option value="11">11x de R$ 13,64</option>
                            <option value="12">12x de R$ 12,50</option>
                    </li>
                    <li>
                        <label>CVV:</label>
                        <input type="text" id="cvv-cartao" placeholder="Insira o CVV" required>
                    </li>
                    <li>
                        <label>CPF:</label>
                        <input type="text" id="cpf-cartao" placeholder="Insira o CPF" required>
                    </li>
                    <li>
                        <input type="button" id="btn-pagar" value="Pagar">
                    </li>

                </ul>
                <button class="btn-pagar">Pagar</button>
            </form>
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