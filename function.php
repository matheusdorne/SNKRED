<?php  
$host = "localhost" ;
$dbname = "projeto_admin";
$user = "root" ;
$pass = ""; 

$conect = mysqli_connect($host, $user, $pass, $dbname); 

if(!$conect){
    echo "Erro ao conectar ao banco de dados!";
}

?>