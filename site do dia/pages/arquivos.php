<?php
require_once('../backend/conexao.php');

$name = $_POST['nome'];
$valor = $_POST['valor'];
$datadocamp = $_POST['datadocamp'];

if(isset($_FILES['arquivo'])) {
   $arquivo = $_FILES['arquivo'];

   if($arquivo['error'])
   die("falha ao enviar arquivo");

   if($arquivo['size'] > 2097152)
   die('arquivo muito grande');


   $pasta = "../img/";
   $nomedoarquivo = $arquivo['name'];
   $novoNomedoarquivo = uniqid();
   $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

   if($extensao != 'jpg'  && $extensao != 'png')
   die ('tipo de arquivo não aceito');

   $deucerto = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomedoarquivo . "." . $extensao);

     if($deucerto) {
        $sql = "insert into produtos (nome,valor,img) values ('$name', '$valor', '$novoNomedoarquivo')";

        $executar = mysqli_query($conexao,$sql);
        
        header('location:editprofile.php');
     }

     else 

     echo "erro";
}



?>

