

<?php
 require_once('../backend/comments.php');
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
    <title>val</title><style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap');
</style>
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');</style>
    <link rel="stylesheet" href="../styles/indexx.css">
    <link rel="stylesheet" href="../styles/inputt.css">
    <link rel="stylesheet" href="../styles/accountpopup.css">
    <link rel="stylesheet" href="../styles/produtos.css">
    <link rel="stylesheet" href="../styles/caracteristicas.css">
    <link rel="stylesheet" href="../styles/depoimentos.css">
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
            <div id="menu"><a href="createaccount.php"><p>Acessar</p></a></div>
        </div>
      </div>
   </header>
   <div id="accountpopup">
      <div id="popupgrid">
          <div onclick="popupaccount()" id="primordios"><p>X</p></div>
      <div id="inicio"><h1>Opss..percebemos que você não está logado em nosso site</h1></div>
       <div id="meio"><p>para ter acesso a todas as áreas do site clique em</p></div>
       <div id="final">
       <div class="incomum" id="acessopopup"><a href="loginpage.php"><p>Acessar minha conta</p></a></div>
       <h2>ou</h2>
       <div class="incomum" id="createpopup"><a href="createaccount.php"><p>Criar Conta</p></a></div>
       </div>
   </div>
      </div>
   <section class="snap" id="main">
       <div id="grid">
           <div id="esquerda">
               <h1>Venha conhecer nossa nova coleção de roupas</h1>
               <h2>Você que é gamer e curte roupas confortais na hora da gameplay, venha conhecer nossa coleção de roupas feitas para você</h2>
               <div id="menu" onclick="popupaccount()"><a><p>Adquirir nossas peças</p></a></div>
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
              <input  onclick="popupaccount()" id="search" type="text" name="search">
              <input  onclick="popupaccount()" id="searchsub" type="button" value="Buscar">
              <a  onclick="popupaccount()" id="filter">Por menor valor</a>
              <a  onclick="popupaccount()"  id="filter">Por maior valor</a> 
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
            <label for="aval1" id="teste1" class="minicard"><img src="../img/luis.jpg"><div class="info"><span>Luis Augusto</span><p>Programador-Minas Gerais</p></div></label>
            <label for="aval2" id="teste2" class="minicard"><img src="../img/adryan.jpg"><div class="info"><span>Adryan Araujo</span><p>Frango-Minas Gerais</p></div></label>
            <label for="aval3" id="teste3" class="minicard"><img src="../img/victor.jpg"><div class="info"><span>Victor Moreno</span><p>Desenvolvedor Web-Minas Gerais</p></div></label>
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
            <h1>ValStore é uma loja de <span>Roupas e acessorios</span> feitos para <span>Gamers</span> de todo o mundo</h1>
            <h2>Você que é gamer e curte roupas confortais na hora da gameplay, venha conhecer nossa coleção de roupas feitas para você</h2>
       </div>
        <div id="direita2">
            <div id="um" class="minicard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><p>Roupas de ótima qualidade</p></div>
            <div id="dois" class="minicard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg><p>Estampas exclusivas da marca</p></div>
            <div id="tres" class="minicard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg><p>Identidade visual para gamers</p></div>
        </div>
    </div>
   </section>
   <section class="snap" id="footer">
       <div id="grid">
           <div id="textalign"><h1>Contate-nos</h1></div>
           <form action="../backend/acesso.php">
                          <div class="form-item">
                            <input name="email" class="nice" type="text" id="nice2" placeholder="" required>
                            <label id="legal" for="nice2">Digite seu nome</label>
                            </div>
                            <div class="form-item">
                                <input name="password" class="nice" type="text" id="nice3" placeholder="" required>
                                <label id="legal" for="nice3">E-mail de contato</label>
                         </div>
                         <div class="form-item">
                                <input name="password" class="nice" type="text" id="nice3" placeholder="" required>
                                <label id="legal" for="nice3">Assunto</label>
                         </div>
                         <div class="form-item">
                                <input name="password" class="nice" type="text" id="nice3" placeholder="" required>
                                <label id="legal" for="nice3">Mensagem</label>
                         </div>
                         <input id="submitar" value="Enviar" type="submit">
                </form>
       </div>
   </section>
   </div>
</body>
<script>
var popaccount = document.getElementById('accountpopup')

function popupaccount() {
  popaccount.classList.toggle('active')
}
</script>
 <script src="../styles/scriptt.js"></script>
</html>