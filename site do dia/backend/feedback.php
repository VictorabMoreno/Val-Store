<?php
require('conexao.php');




if(empty($name = $_GET["nome"]) || empty($email = $_GET["email"]) || empty($assunto = $_GET["assunto"] )) {}

empty($mensagem = $_GET['mensagem']);




    $sqli = "insert into feedback (nome, email, assunto , mensagem)VALUES ('$name','$email','$assunto','$mensagem')";
    $executar = mysqli_query($conexao, $sqli);
    header('location:../pages/userpage.php');