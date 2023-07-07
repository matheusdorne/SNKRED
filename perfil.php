<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Cliente</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/perfil.css">
</head>

<body>
    <?php
    include_once 'layout/header.php';
    include_once 'layout/promo.php';

    if (isset($_SESSION['ativa'])) {

    ?>

        <main>
            <div class="perfil-cliente">
                <h1>Perfil do Cliente</h1>
                <div class="dados-pessoais">

                    <ul>
                        <li>
                            <img src="https://thumbs.dreamstime.com/b/vetor-de-%C3%ADcone-perfil-do-avatar-padrão-foto-usuário-m%C3%ADdia-social-183042379.jpg">
                        </li>
                        <li>
                            <span class="label">Nome:</span>
                            <span class="valor"><?php echo $_SESSION['nome'] ?></span>
                        </li>
                        <li>
                            <span class="label">E-mail:</span>
                            <span class="valor"><?php echo $_SESSION['email'] ?></span>
                        </li>
                        <li>
                            <span class="label">Telefone:</span>
                            <span class="valor">123-456-7890</span>
                        </li>
                        <!-- Outros dados pessoais -->
                    </ul>
                </div>

                <div class="enderecos">
                    <h3>Endereços</h3>
                    <ul>
                        <li>
                            <span class="label">Endereço de Cobrança:</span>
                            <span class="valor">Rua Principal, 123</span>
                        </li>
                        <li>
                            <span class="label">Endereço de Entrega:</span>
                            <span class="valor">Avenida Secundária, 456</span>
                        </li>
                    </ul>
                </div>


            </div>
        </main>
    <?php } else {
        header('Location: login.php');
    } ?>

    <?php
    include_once 'layout/footer.php';
    ?>


</body>

</html>