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
    <?php
    include_once 'layout/header.php';
    include_once 'layout/promo.php';
    ?>

    <h1>Meus Pedidos</h1>
    <main>
        <div class="pedidos-container">

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

    <?php
    include_once 'layout/footer.php';
    ?>

</body>

</html>