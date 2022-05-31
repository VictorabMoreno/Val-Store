<?php
require_once('../backend/conexao.php');
require_once('arquivos.php');



$name = $_GET['name'];
$valor = $_GET['valor'];




$sql = "insert into produtos (nome,valor,img) values ('$name', '$valor', '$arquivo')";

$executar = mysqli_query($conexao,$sql);

header('location:edicoes.php');

?>