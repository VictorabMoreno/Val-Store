<?php
 include('../backend/session.php');
 require_once('../backend/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>val</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap');
</style>
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');</style>
    <link rel="stylesheet" href="../styles/userpageeditt.css">
    <link rel="stylesheet" href="../styles/popupp.css">
    <link rel="stylesheet" href="../styles/editprofile.css">
    <link rel="stylesheet" href="../styles/produtosprofilee.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<header>
      <div id="grid2">
        <div id="img">
            <a href="userpage.php"><img src="../img/vv.png" alt=""></a>
        </div>
        <div id="nav">
           
            <div id="menu"><div id="usergrid"><span id="iconuser"> <?php echo $ftperfil;?></span><p><?php echo $userfirstname[0]; ?></p><span id="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></div>
            <div id="popup">
               <div id="popupgrid">
                   <a href="editprofile.php"><div class="submenus"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><h2 class="pp">Meu perfil</h2></div></a>
                   <div class="submenus"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg><h2 class="pp">Minhas compras</h2></div>
                   <div class="submenus"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg><h2 class="pp">Meus favoritos</h2></div>
                   <div class="submenus"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg><h2 class="pp">Central de ajuda</h2></div><hr>
                   <div id="submenus"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg><a href="../backend/logout.php"><h2 id="h2">desconectar</h2></a></div>
               </div>
            </div>
        </div>
        </div>
      </div>
   </header>
   <div id="editprofile">
       <div id="grid">
           <?php echo $left; ?>
           <div id="segurar">
           <div id='right'>
            <div id='align'>
                <div id='topo'>
                    <label id='label' for='perfilft'>
                    <div id='ftperfil'>
                        <?php
                          echo $ftperfil;
                        ?>
                    </div>
                    </label>
                </div>
                <form action='../backend/arquivo.php' enctype='multipart/form-data' method='POST'>
                   <input type='file' id='perfilft' name='arquivo'>
                    <input id='submitbtn' type='submit' value='trocar ft'>
                   </form>
                <div id='conteudo'>
                    <h1>Minhas informações</h1>
                   <form action='../backend/editarperfil.php'>
                   <div id='displayinput'>
                    <div class='form-item'>
                         <input id='block' class='nice' type='text' id='nice2' placeholder='' >
                         <label id='legal'  for='nice2'><?php echo $nome; ?></label>
                     </div>
                     <div class='form-item'>
                         <input name='nome' class='nice' type='text' id='nice2' placeholder='' >
                         <label class='legal' for='nice2'>Atualizar Nome</label>
                     </div>
                    </div>
   
                    <div id='displayinput'>
                    <div class='form-item'>
                         <input id='block' class='nice' type='text' id='nice2' placeholder='' >
                         <label id='legal'  for='nice2'><?php echo $mail; ?></label>
                     </div>
                     <div class='form-item'>
                         <input name='email' class='nice' type='text' id='nice2' placeholder='' >
                         <label class='legal' for='nice2'>Atualizar Nome</label>
                     </div>
                    </div>
   
                    <div id='displayinput'>
                    <div class='form-item'>
                         <input  name='senha' class='nice' type='text' id='nice2' placeholder='' >
                         <label class='legal' for='nice2'>Atualizar senha</label>
                     </div>
                     <div class='form-item'>
                         <input name='senha2' class='nice' type='text' id='nice2' placeholder='' >
                         <label class='legal' for='nice2'>Confirmar nova senha</label>
                     </div>
                    </div>
                    <input id='submitbtn' type='submit'>
                   </form>
               </div>
            </div>
            </div> 
               <div id="alignn">
                   <h1>Editar e excluir produtos</h1>
            <div id="aligncorredor">       
              <div id="corredor">   
              <?php
            $sql = $conexao->query("select * from produtos");
            while($produto = $sql->fetch_object()) {
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
                    <div id='button' ><p id='valueyeah'>saiba mais</p><p>$valor</p></div>
                </div>
                <a href='../backend/delete.php?id=$id'>excluir</a>
                <a href='telaone.php?id=$id'>editar</a>
                
            </div>";
            }?>
              </div>
            </div>
              <h1>Novo Produto</h1>
             <div id="displaycreate">
                 <div id="esquerda">
                 <div class='card'>
                <div class='img'>
                    <img src='../img/anon.jpg' alt= 'Imagem para o camp'>
                </div>
                <div class='conteudo'>
                    <div class='titulo'><p>Nome</p></div>
                    <div id='button' ><p id='valueyeah'>Saiba mais/p><p>Preço</p></div>
                </div>                
            </div>
                 </div>
                 <div id="direita">
                 <form action="arquivos.php" enctype="multipart/form-data" method="POST">
              <div class='form-item'>
                         <input  name='nome' class='nice' type='text' id='nice2' placeholder='' required>
                         <label class='legal' for='nice2'>Nome do produto</label>
                     </div>

                     <div class='form-item'>
                         <input  name='valor' class='nice' type='text' id='nice2' placeholder='' required >
                         <label class='legal' for='nice2'>Preço</label>
                     </div>

                     <input type="file"  name="arquivo"><br>
                     <input id="submitar" value="Criar" type="submit">
              </form>
                 </div>
             </div>
            </div>
            <div id="griddd">
      <?php
            $sql = $conexao->query("select * from mensagem");
            while($mensagem = $sql->fetch_object()) {
                $perfil = "../img/$mensagem->imgperfil";
                $nomemsg = "$mensagem->nome";
                $profissao = "$mensagem->profissao";
                $id = "$mensagem->id";
                $titulo = "$mensagem->titulo";
                $msgperfil = "$mensagem->msg";
                echo "<div id='agrupar'><label class='minicard'><img src='../img/$perfil'><div class='info'><span>$nomemsg</span><p>$profissao</p></div> <a href='../backend/msgdelete.php?id=$id'><p>Excluir</p></a></label>
                <div id = 'msgspace'><h5>$titulo</h5><p>$msgperfil</p></div></div>
                ";
            }?>
       </div>
       <div id="createuser">
       <div id="gride">
           <h1>Criar novo usúario</h1>
       <form action="createuser.php"  method="GET">
              <div class='form-item'>
                         <input  name='nome' class='nice' type='text' id='nice2' placeholder='' required>
                         <label class='legal' for='nice2'>Nome do usúario</label>
                     </div>

                     <div class='form-item'>
                         <input  name='email' class='nice' type='text' id='nice2' placeholder='' required >
                         <label class='legal' for='nice2'>Email</label>
                     </div>

                     <div class='form-item'>
                         <input  name='senha' class='nice' type='text' id='nice2' placeholder='' required >
                         <label class='legal' for='nice2'>Senha</label>
                     </div>

                     <div class='form-item'>
                         <input  name='hierarquia' class='nice' type='text' id='nice2' placeholder='' required >
                         <label class='legal' for='nice2'>hierarquia: admin ou normal</label>
                     </div>
                     <input id="submitar" value="Criar" type="submit">
              </form>
              <h1>Criar novo comentário</h1>
              <form action="../backend/addcoment.php" enctype="multipart/form-data" method="POST">
              <div class='form-item'>
                         <input  name='nome' class='nice' type='text' id='nice2' placeholder='' required>
                         <label class='legal' for='nice2'>Nome do usúario</label>
                     </div>

                     <div class='form-item'>
                         <input  name='profissao' class='nice' type='text' id='nice2' placeholder='' required >
                         <label class='legal' for='nice2'>Profissão</label>
                     </div>

                     <div class='form-item'>
                         <input  name='titulo' class='nice' type='text' id='nice2' placeholder='' required >
                         <label class='legal' for='nice2'>Titulo do comentário</label>
                     </div>

                     <div class='form-item'>
                         <input  name='coment' class='nice' type='text' id='nice2' placeholder='' required >
                         <label class='legal' for='nice2'>Mensagem do comentário</label>
                     </div>
                     <input name="arquivo" type="file">
                     <input id="submitar" value="Criar" type="submit">
              </form>
       </div>
   </div>
           </div>
       </div>
        </div>
   </div>
  
    </div>
</div>
</body>

<script>
    const popup = document.getElementById('popup')
    const main = document.getElementById('menu') 
    const ftperfil = document.getElementById('ftperfil')
    const arquivo = document.getElementById('label')
    var corredor = document.getElementById('corredor')
    var right = document.getElementById('right')
    var align = document.getElementById('alignn')
    var grid = document.getElementById('griddd')
    var createuser = document.getElementById('createuser')
    var boxe = document.getElementById('one')
    var boxee = document.getElementById('rwo')
    let position = 2
   
       grid.style.display = 'none'
       align.style.display = 'none'
       right.style.display = 'flex'
       align.style.overflowX = 'hidden'

    main.addEventListener('click' , function pop() {
        popup.classList.toggle('active')
    })

    function msl() {
        createuser.style.display = 'none'
        grid.style.display = 'none'
       align.style.display = 'none'
       right.style.display = 'flex'
       align.style.overflowX = 'hidden'
    }

    function msk() {
        createuser.style.display = 'none'
        grid.style.display = 'none'
       align.style.display = 'flex'
       align.style.opacity = 1
       right.style.display = 'none'
       align.style.overflowX = 'scroll'
    }

    function msv() {
        createuser.style.display = 'none'
        grid.style.display = 'flex'
       align.style.display = 'none'
       right.style.display = 'none'
       align.style.overflowX = 'scroll'
    }

    function msh() {
        createuser.style.display = 'flex'
        grid.style.display = 'none'
       align.style.display = 'none'
       right.style.display = 'none'
       align.style.overflowX = 'scroll'
    }


    

    
</script>
</html>