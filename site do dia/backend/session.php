<?php
 session_start();
 require_once('conexao.php');
 

 $mail = $_SESSION['mail'];

$sql = $conexao->query("select * from usuario where email = '$mail';");
if($perfil = $sql->fetch_object()) {
    if($perfil->img == '') {
        if($perfil->hierarquia == 'admin') {
            $ftperfil = "<div id='adminimg'></div>";
        }
        else {
            $ftperfil = null;
        }
    }

    else {
        $ftperfil = "<img src='../img/$perfil->img'>";
    }  
        $nivel = "$perfil->hierarquia";
        $nome = "$perfil->nome";
        $senhaperfil = "$perfil->senha";
        $hierarquia ="$perfil->hierarquia";

        if($perfil->hierarquia == 'admin') {
            $edit = "Editar site";
            $left = "<div id='left'>
            <div id='aligner'>
                <h1>Edições do site</h1>
                <div onclick='msl()' id='display'><div class='subperfil'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round' class='feather feather-user'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg><h2 class='pp'>Dados pessoais</h2></div>
           </div><hr>

           <div onclick='msk()' id='display'><div class='subperfil'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round' class='feather feather-user'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg><h2 class='pp'>Controle de produtos</h2></div>
           </div><hr>

           <div onclick='msv()' id='display'><div class='subperfil'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round' class='feather feather-user'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg><h2 class='pp'>Controle de comentários</h2></div>
           </div><hr>

           <div onclick='msh()' id='display'><div class='subperfil'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round' class='feather feather-user'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg><h2 class='pp'>Criar usúario e comentário</h2></div>
           </div><hr>
                 </div>
        </div>";
        
          
        }
        else {
            $edit = "Meu perfil";
            $left = "<div id='left'>
            <div id='aligner'>
                <h1>Dados pessoais</h1>
                <div id='display'><div class='subperfil'><svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round' class='feather feather-user'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg><h2 class='pp'>Dados pessoais</h2></div>
           </div><hr>
                 </div>
        </div>";
        
        }


 }

$username = $nome;

$userfirstname = explode(' ', $username);

 if(!$_SESSION['user']) {
     header('location:../pages/normal.php');
     exit();
 }







?>


