<?php
 session_start();


 require('conexao.php');

 $email = $_GET['email'];
 $password = $_GET['password'];

if(empty($_GET['email']) || empty($_GET['password'])) {
    header('location: ../pages/userpage.php');
    exit();
}

else {
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql_logar = $conexao->query("select * from usuario where email = '$email'");
                $registro = $sql_logar->fetch_object();

                $passwordhash = $registro->senha;
                $acess = $registro->hierarquia;
                $nome = $registro->nome; 


if(password_verify($password, $passwordhash ) || $acess == 'admin') {

    $_SESSION['mail'] = "$email";
    $_SESSION['user'] = "$nome";
    header('location: ../pages/userpage.php');
    exit();
}

else {
    header('location: ../pages/loginpage.php');
}

}


?>