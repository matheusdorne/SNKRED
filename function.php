<?php  
$host = "localhost" ;
$dbname = "projeto_admin";
$user = "root" ;
$pass = ""; 

$connect = mysqli_connect($host, $user, $pass, $dbname); 

if(!$connect){
    echo "Erro ao conectar ao banco de dados!";
} 
function login($connect){ 
    if(isset($_POST['acessar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])) {  

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 

        $senha = sha1($_POST['senha']);  

        $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'"; 

        $executar = mysqli_query($connect, $query);  

        $return = mysqli_fetch_assoc($executar);  

        if(!empty($return['email'])){ 
            //echo $return['email']; 
            session_start(); 
            $_SESSION['email'] = $return['email'];
            $_SESSION['nome'] = $return['nome']; 
            $_SESSION['id'] = $return['id']; 
            $_SESSION['ativa'] = TRUE;  
            header('Location: perfil.php');

        }else{
        echo "Usuário ou senha incorretos!";
        }
        
    }
}
