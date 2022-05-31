<?php  require_once('../backend/conexao.php'); 



   $id = $_GET['id'];


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap');
</style>
    <link rel="stylesheet" href="../styles/telaa.css">
</head>
<body>
    <div id="grid">
        <h1>$msgvisu</h1>
        <div id="display">
            <div id="esquerda">
            <?php
            $sql = $conexao->query("select * from produtos where id = '$id' ");
               $produto = $sql->fetch_object(); 
                $capa = "../img/$produto->img";
                $nome = "$produto->nome";
                $valor = "$produto->valor";
                $id = "$produto->id";
                echo " <div class='card'>
                <div class='img'>
                    <img src='$capa'>
                </div>
                <div class='conteudo'>
                    <div class='titulo'><p>$nome</p></div>
                    <div id='button' ><p id='valueyeah'>Saiba mais</p><p>$valor</p></div>
                </div>
            </div>";
            ?>
            </div>
            <div id="direita">
            <form action="../backend/editarproduto.php" enctype="multipart/form-data" method="POST">
              <div class='form-item'>
                         <input  name='nome' value="<?php echo $nome; ?>" class='nice' type='text' id='nice2' placeholder=''>
                         <label class='legal' for='nice2'>Nome do produto</label>
                     </div>

                     <div class='form-item'>
                         <input  name='valor' value="<?php echo $valor; ?>" class='nice' type='text' id='nice2' placeholder='' >
                         <label class='legal' for='nice2'>Valor do produto</label>
                     </div>
                     <input type="hidden" value= "<?php echo $id; ?>"  name="util">
                     <input type="file"  name="arquivo"><br>
                     <input id="submitar" value="Editar" type="submit">
              </form>
            </div>
        </div>
    </div>
</body>
</html>