<?php  
require_once('conexao.php');
require_once('session.php');

$id = $_POST['util'];




if(empty($_POST['nome'])) {
    $novonome = $nome  ;
}

else {
    $novonome = $_POST['nome'];
}

if(empty($_POST['valor'])) {
    $novovalor = $valor  ;
}

else {
    $novovalor = $_POST['valor'];
}

if($_FILES['arquivo'] == '') {
    echo "nada";
}

else {
    if(isset($_FILES['arquivo'])) {
        $arquivo = $_FILES['arquivo'];
     
     
        if($arquivo['size'] > 2097152)
        die('arquivo muito grande');
     
     
        $pasta = "../img/";
        $nomedoarquivo = $arquivo['name'];
        $novoNomedoarquivo = uniqid();
        $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));
     
       
        $deucerto = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomedoarquivo . "." . $extensao);
     
          if($deucerto) {
             $sql = "update produtos set img = '$novoNomedoarquivo' where id = '$id'";
     
             $executar = mysqli_query($conexao,$sql);
             
          }
        }
     
}



    $sql = "update produtos set nome = '$novonome', valor = '$novovalor' where id = '$id'";
    $executar = mysqli_query($conexao,$sql);
    
    
    header('location:../pages/editprofile.php');


  




?>