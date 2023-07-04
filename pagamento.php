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

    <?php
    include_once 'layout/header.php';
    include_once 'layout/promo.php';
    ?>


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

    <?php
    include_once 'layout/footer.php'
    ?>
</body>

</html>