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
  </header>

  <main>
    <div class="tela-pagamento">
      <h1>Detalhes do Pagamento</h1>
      <form>
        <ul class="detalhes-pagamento">
          <li>
            <label for="nome">Nome no Cartão:</label>
            <input type="text" id="nome" placeholder="Insira o nome no cartão" required>
          </li>
          <li>
            <label for="numero-cartao">Número do Cartão:</label>
            <input type="text" id="numero-cartao" placeholder="Insira o número do cartão" required>
          </li>   
          <!-- Outros campos de pagamento -->
        </ul>
        <button class="btn-pagar">Pagar</button>
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
                                            <img src="imagens/fbicon.png"  alt="ICONE DO FACEBOOK">
                                        </a>  
                                    </li> 
                                    <li> 
                                        <a href="https://www.instagram.com/">
                                            <img src="imagens/insticon.png"  alt="ICONE DO INSTAGRAM"> 
                                        </a>
                                    </li> 
                                    <li> <a href="https://twitter.com/login?lang=pt">
                                        <img src="imagens/twiticon.png"  alt="ICONE DO TWITTER"> 
                                        </a>
                                    </li> 
                            </ul>  
                        </nav> 
                    </div> 
                </footer>
  </footer>
</body>
</html>
