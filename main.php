<!DOCTYPE html>  
<html lang="pt-br"> 
    <head> 
        <meta charset="UTF-8">  
        <title>SNKRED</title> 
        
        <link rel="stylesheet" href="css/css_main.css">
        <link rel="stylesheet" href="css/header.css">
        

    </head> 
    <body>  
        <div class="bodymain">
          <?php  
          include_once 'layout/header.php';
          include_once 'layout/promo.php';
          ?>
            <div class="main_div"> 
                <section class="slider">
                    <ul class="slideul">
                        <li>
                            <img src="https://wps3.dbknews.com/uploads/2022/04/040522_skateboarding-basics_ah-19.jpg" alt="FOTO DE SKATISTA" >
                        </li>
                        <li>
                            <img src="https://www.ocarafashion.com/wp-content/uploads/2019/12/Destque-2.jpg" alt="FOTO DE ENSARIO FOTOGRAFICO COM TEMATICA STREET WEAR">
                        </li>
                        <li>
                            <img src="https://www.psicologoeterapia.com.br/wp-content/uploads/psicologia-do-esporte.jpg " alt="CORREDOR EM PISTA DE ATLETISMO">
                        </li>
                    </ul>  
                </section> 
                <article class="textcenter">
                    <h3>Air Jordan</h3> 
                    <p>O Nike Air Jordan continua a encantar as novas gerações. Com uma silhueta única, que se mantém ao longo dos anos, esse é um dos melhores modelos de tênis para praticar basquete com proteção e conforto. Além disso, suas características e design garantem uma dose extra de estilo para sair às ruas com confiança. O nome da linha vem justamente de uma lenda do mundo dos esportes: Michael Jordan.
                    </p> 
                </article> 
                <div class="container"> 
                    <form name="barraPesquisa" method="get">
                        <input type="search" placeholder="Pesquisar..." id="pesquisabar">   
                    </form>
                </div>

                <section id="catalogo">
                    <ul class="catalogo">
                        <li> 
                            <a href="produto.html">
                                <img  src="https://artwalk.vteximg.com.br/arquivos/ids/264855-1000-1000/55472-4-078-1.jpg?v=637938616022270000" alt="TENIS AIR JORDAN 1 MID MASCULINO CINZA">    
                                <span class="produto_select">Air Jordan 1 Mid Masculino </span>  
                                <span class="produto_tipo">Casual</span>
                                <span class="produto_select">R$999,90</span>
                            </a>
                        </li>
                        <li> 
                            <img  src="https://artwalk.vteximg.com.br/arquivos/ids/256343-1000-1000/DM120-0-016-1.jpg?v=637909216097770000" alt="TENIS AIR JORDAN 1 MID SE MASCULINO CINZA" >  
                            <span class="produto_select">Air Jordan 1 Mid Se Masculino </span>  
                            <span class="produto_tipo">Casual</span>
                            <span class="produto_select">R$1099,99</span>
                        </li>
                        <li> 
                            <img src="https://artwalk.vteximg.com.br/arquivos/ids/321076-1000-1000/DH083-3-660-1.jpg?v=638060292253600000" alt="TENIS AIR JORDAN XXXVI LOW VERMELHO" >  
                            <span class="produto_select">Air Jordan XXXVI Low </span>  
                            <span class="produto_tipo">Basquete</span>
                            <span class="produto_select">R$1199,90</span>
                        </li>
                    </ul>  
                </section>  
                <div >
                    <ul class="catalogo">
                        <li> 
                            <a href="produto.html">
                                <img  src="https://artwalk.vteximg.com.br/arquivos/ids/234025-1000-1000/Tenis-Vans-Sk8-Hi-Preto.jpg?v=637569664984370000" alt="TENIS VANS SK8-HI PRETO" >   
                                <span class="produto_select">Vans SK8-Hi </span>  
                                <span class="produto_tipo">Skate</span>
                                <span class="produto_select">R$389,99</span>
                            </a>
                        </li>
                        <li> 
                            <img  src="https://artwalk.vteximg.com.br/arquivos/ids/293447-1000-1000/U1KBL-K-001-1.jpg?v=638029188182630000" alt="TENIS VANS ULTRARANGE EXO">  
                            <span class="produto_select">Tenis Vans Ultrarange Exo</span>  
                            <span class="produto_tipo">Casual</span>
                            <span class="produto_select">R$569,90</span>
                        </li>
                        <li> 
                            <img  src="https://artwalk.vteximg.com.br/arquivos/ids/252799-1000-1000/CD046-1-151-1.jpg?v=637908296756030000" alt="TENIS AIR JORDAN 1 HIGH OG FEMININO" >  
                            <span class="produto_select">Air Jordan 1 High OG Feminino</span>  
                            <span class="produto_tipo">Casual</span>
                            <span class="produto_select">R$1399,99</span>
                        </li>
                    </ul>  
                </div> 
                <?php  
                include_once 'layout/footer.php';
                ?>
            </div> 
        </div> 
    </body>
</html>