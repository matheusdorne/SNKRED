<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SNKRED</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/css_main.css">


</head>

<body>
    <div class="bodymain">
        <?php
        include_once 'layout/header.php';
        include_once 'layout/promo.php';
        ?>
        <section class="prod_info">
            <div class="div_img">
                <img src="https://artwalk.vteximg.com.br/arquivos/ids/264855-1000-1000/55472-4-078-1.jpg?v=637938616022270000" alt="TENIS AIR JORDAN 1 MID MASCULINO CINZA">
            </div>
            <div class="mainInfoProd">
                <form class="formCarrinho" action="carrinho.html">
                    <ul class="listaProd">
                        <li>
                            <span id="prodNameTxt">AIR JORDAN 1 MID MASCULINO</span>
                        </li>
                        <li>
                            <span id="prodValueTxt">R$ 1099,99</span>
                        </li>
                        <li>
                            <span id="prodParcTxt">ou ATÉ 10X DE R$109,99</span>
                        </li>
                        <li>
                            <span> TAMANHO</span>
                            <select id="prodSize">
                                <option value="0">33</option>
                                <option value="1">34</option>
                                <option value="2">35</option>
                                <option value="3">37</option>
                                <option value="4">38</option>
                                <option value="5">39</option>
                                <option value="6">40</option>
                                <option value="7">41</option>
                                <option value="8">43</option>
                                <option value="9">44</option>
                            </select>
                        </li>
                        <li>
                            <p>O tênis Air Jordan 1 Mid é inspirado no primeiro AJ1, oferecendo aos fãs OG uma visão da evolução da marca Jordan desde 1985.
                            </p>
                        </li>
                        <li>
                            <button id="btnAddCart">Adicionar ao Carrinho</button>
                        </li>
                    </ul>
                </form>
            </div>
        </section>
    </div>

    <?php
    include_once 'layout/footer.php';
    ?>

    </div>
</body>

</html>