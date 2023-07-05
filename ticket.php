<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Ticket de Suporte</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ticket.css">
</head>

<body>

    <?php
    include_once 'layout/header.php';
    include_once 'layout/promo.php';
    ?>



    <main>
        <h1>Enviar Ticket de Suporte</h1>
        <div class="enviar-ticket">

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

    <?php
    include_once 'layout/footer.php';
    ?>

</body>

</html>