
<?php
 require_once('../backend/comments.php');
 include('../backend/session.php');
 require_once('../backend/conexao.php');

 $filter = $_GET['filter'] ?? 'normal';


if(empty($legal = $_GET['search'] ?? '')) {
    $search = '';
}

else{
    $search = $_GET['search'];
     
}

if($filter == 'normal') {
    $teste = "select * from produtos where nome like '%$search%' LIMIT 5";
     
}

else if ($filter == 'menor') {
    $teste  = "select * from produtos where nome like '%$search%' order by valor asc LIMIT 5";
}

else if ($filter == 'maior') {
    $teste  = "select * from produtos where nome like '%$search%' order by valor desc LIMIT 5";
}





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
    <link rel="stylesheet" href="../styles/indexx.css">
    <link rel="stylesheet" href="../styles/userpageeditt.css">
    <link rel="stylesheet" href="../styles/popupp.css">
    <link rel="stylesheet" href="../styles/inputt.css">
    <link rel="stylesheet" href="../styles/produtos.css">
    <link rel="stylesheet" href="../styles/caracteristicas.css">
    <link rel="stylesheet" href="../styles/depoimentos.css">
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
    <div id="conteiner">
   <header>
      <div id="grid2">
        <div id="img">
            <img src="../img/vv.png" alt="">
        </div>
        <div id="nav">
            <div class="menu"><a href=""><p>Menu</p></a></div>
            <div class="menu"><a href="#produtos"><p>Produtos</p></a></div>
            <div class="menu"><a href="#depoimentos"><p>Avaliações</p></a></div>
            <div class="menu"><a href="#caracteristicas"><p>Caracteristicas</p></a></div>
            <div class="menu"><a href="#footer"><p>Contato</p></a></div>
            <div id="menu"><div id="usergrid"><span id="iconuser"> <?php echo $ftperfil;?></span><p><?php echo $userfirstname[0]; ?></p><span id="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></div>
            <div id="popup">
               <div id="popupgrid">
                   <a href="editprofile.php"><div class="submenus"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><h2 class="pp"><?php echo $edit; ?></h2></div></a>
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
   <section class="snap" id="main">
       <div id="grid">
           <div id="esquerda">
               <h1>A maior organização de E-sports do Brasil</h1>
               <h2>Você que é gamer e curte competir com seus amigos, venha conhecer a VALstore</h2>
               <div id="menu"><a href=""><p>Buscar torneios</p></a></div>
          </div>
           <div id="direita">
               <img src="../img/familia.jpg">
           </div>
       </div>
       <div class="ceta"><svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
   </section>
   <section class="snap" id="produtos">
   <div id="areadepesquisa">
           <form action="userpage.php">
              <div id="alignner">
              <input id="search" type="text" name="search">
              <input id="searchsub" type="submit" value="Buscar">
              <a href="userpage.php?filter=menor" id="filter">Por menor valor</a>
              <a href="userpage.php?filter=maior" id="filter">Por maior valor</a> 
              </div>
           </form>
       </div>
       <div id="grid"> 
       <?php
          if($search == '') {
            $sql = $conexao->query("$teste");
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
                    <div id='button' ><p id='valueyeah'>Saiba mais</p><p>$valor</p></div>
                </div>
                
            </div>";
           }
          }

          else {
            $sql = $conexao->query("$teste");
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
                    <div id='button' ><p id='valueyeah'>Saiba mais</p><p>$valor</p></div>
                </div>
                
            </div>";
           }
          }
            ?>
       </div>
   </section>
   <section class="snap" id="depoimentos">
       <div id="grid">
        <div id="esquerda2">
            <input  type="checkbox" class="checkk" id="aval1" onclick="msn()">
            <input  type="checkbox" class="checkk" id="aval2" onclick="msm()">
            <input  type="checkbox" class="checkk" id="aval3" onclick="msp()">
            <?php
            $sql = $conexao->query("select * from mensagem LIMIT 3");
            while($mensagem = $sql->fetch_object()) {
                $perfil = "../img/$mensagem->imgperfil";
                $nomemsg = "$mensagem->nome";
                $profissao = "$mensagem->profissao";
                $id = "$mensagem->id";
                $dt = "$mensagem->destaque";
                echo "<label for='aval$dt' id='teste$dt' class='minicard'><img src='../img/$perfil'><div class='info'><span>$nomemsg</span><p>$profissao</p></div></label>
                ";
            }?>
            </div>
        <div id="direita2">
            <div id="text"><div id="textgrid">
                <div id="align"><p id="titulo"></p></div>
                <div id="align2"><span id="nota">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#8A1F4C" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#8A1F4C" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#8A1F4C" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#8A1F4C" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#8A1F4C" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          
                    </span></div>
                <div id="align3"><p id="paragrafo"></p></div>
            </div></div>
        </div>
       </div>
   </section>
   <section class="snap" id="caracteristicas">
    <div id="grid">
        <div id="esquerda2">
            <h1>ValStore é uma organizadora de  <span>torneios E-sports</span> feitos para <span>Gamers</span> de todo o mundo</h1>
            <h2>Se você é um jogador competitivo de algum jogo, venha nos conhecer melhor</h2>
       </div>
        <div id="direita2">
            <div id="um" class="minicard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><p>Novas roupas toda semana</p></div>
            <div id="dois" class="minicard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg><p>Roupas confortaveis</p></div>
            <div id="tres" class="minicard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg><p>Roupas para gamers</p></div>
        </div>
    </div>
   </section>
   <section class="snap" id="footer">
       <div id="grid">
       <div id="textalign"><h1>Contate-nos</h1></div>
       <form action="../backend/feedback.php">
                          <div class="form-item">
                            <input name="nome" class="nice" type="text" id="nice2" placeholder="" required>
                            <label id="legal" for="nice2">Digite seu nome</label>
                            </div>
                            <div class="form-item">
                                <input name="email" class="nice" type="text" id="nice3" placeholder="" required>
                                <label id="legal" for="nice3">E-mail de contato</label>
                         </div>
                         <div class="form-item">
                                <input name="assunto" class="nice" type="text" id="nice3" placeholder="" required>
                                <label id="legal" for="nice3">Assunto</label>
                         </div>
                         <div class="form-item">
                                <input name="mensagem" class="nice" type="text" id="nice3" placeholder="" required>
                                <label id="legal" for="nice3">Mensagem</label>
                         </div>
                         <input id="submitar" value="Enviar" type="submit">
                </form>
       </div>
   </section>
   </div>
</body>
<script>
    const popup = document.getElementById('popup')
    const main = document.getElementById('menu') 

    main.addEventListener('click' , function pop() {
        popup.classList.toggle('active')
    })
    
</script>
<script src="../styles/scriptt.js"></script>
</html>