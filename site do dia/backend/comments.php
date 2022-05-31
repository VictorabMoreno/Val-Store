<?php

require('conexao.php');



$sql = "select msg from mensagem where destaque='1' ";
$sqll = "select msg from mensagem where destaque='2' ";
$sqlll = "select msg from mensagem where destaque='3' ";

$ttt = "select titulo from mensagem where destaque='1' ";
$tttl = "select titulo from mensagem where destaque='2' ";
$tttll = "select titulo from mensagem where destaque='3' ";

$executar = mysqli_query($conexao, $sql );
$msg = mysqli_fetch_object($executar)->msg;
$executarr = mysqli_query($conexao, $sqll );
$msgg = mysqli_fetch_object($executarr)->msg;
$executarrr = mysqli_query($conexao, $sqlll );
$msggg = mysqli_fetch_object($executarrr)->msg;


$executei = mysqli_query($conexao, $ttt );
$titulo = mysqli_fetch_object($executei)->titulo;
$executare = mysqli_query($conexao, $tttl );
$tituloo = mysqli_fetch_object($executare)->titulo;
$executarre = mysqli_query($conexao, $tttll );
$titulooo = mysqli_fetch_object($executarre)->titulo;



echo "<script>
var word1 = '$msg';
var word2 = '$msgg';
var word3 = '$msggg';
var title1 = '$titulo';
var title2 = '$tituloo';
var title3 = '$titulooo';
</script>";






?>