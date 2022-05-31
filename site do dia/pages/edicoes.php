  <?php
  require_once('../backend/conexao.php');

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
                    <div id='button' ><p id='valueyeah'>Saiba mais</p><p>$valor</p></div>
                </div>
                <a href='excluir.php?id=$id'>excluir</a>
            </div>";
            }

            

          ?>

          <html>
              <form action="arquivos.php" enctype="multipart/form-data" method="POST">
                  <input type="text" name="nome">
                  <input type="text" name="valor">
                  <input type="file" name="arquivo">
                  <input type="submit">
              </form>
          </html>