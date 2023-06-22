<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Pagamento</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <!-- Conteúdo do cabeçalho -->
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
    <!-- Conteúdo do rodapé -->
  </footer>
</body>
</html>
