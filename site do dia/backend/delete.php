<?php
require_once('../backend/conexao.php');




$id = $_GET['id'];



$sql = "delete from produtos where id= '$id'";

$executar = mysqli_query($conexao,$sql);

header('location:../pages/editprofile.php');

?>