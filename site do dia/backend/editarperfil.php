<?php  
require_once('conexao.php');
require_once('session.php');



if(empty($_GET['nome'])) {
    $novonome = $nome  ;
}

else {
    $novonome = $_GET['nome'];
}

if(empty($_GET['senha']) || empty($_GET['senha2'])) {
    $senha = $senhaperfil;
    $senha2 = $senhaperfil;
}

else {
    $senha = $_GET['senha'];
    $senha2 = $_GET['senha2'];
    $hash = password_hash($senha,PASSWORD_DEFAULT);
    $hash2 = password_hash($senha2, PASSWORD_DEFAULT);
}

if($senha != $senha2) {
    header('location:../pages/editprofile.php');
}

else{

    $sql = "update usuario set senha = '$hash', nome = '$novonome' where email = '$mail'";
    $executar = mysqli_query($conexao,$sql);
    
    header('location:session.php');
    header('location:../pages/editprofile.php');


  
}



?>