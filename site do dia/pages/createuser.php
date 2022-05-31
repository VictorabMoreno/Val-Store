<?php
require('../backend/conexao.php');




if(empty($name = $_GET["nome"]) || empty($email = $_GET["email"]) || empty($password = $_GET["senha"] )) {}

empty($hierarquia = $_GET['hierarquia']);

   
    $hash = password_hash($password,PASSWORD_DEFAULT);
    
  
    

$query= "SELECT * FROM usuario WHERE email = '$email'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
    $msgdeerro = "<p>deu erro</p>";
    header('location:editprofile.php');
}

else {
    $sqli = "insert into usuario (nome, email, senha , hierarquia, img)VALUES ('$name','$email','$hash','$hierarquia','')";
    $executar = mysqli_query($conexao, $sqli);
    header('location:editprofile.php');
}