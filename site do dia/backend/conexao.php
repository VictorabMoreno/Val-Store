<?php
$conexao = new mysqli("localhost","root","","valstore");


$conexao->query("SET NAMES utf8");
$conexao->query("SET character_set_connection=utf8");
$conexao->query("SET character_set_client = utf8 ");
$conexao->query("SET character_set_result = utf8 ");
?>