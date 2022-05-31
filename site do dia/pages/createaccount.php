

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');</style>
    <link rel="stylesheet" href="../styles/segundo.css">
    <link rel="stylesheet" href="../styles/inputt.css">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <div id="esquerda">
           <div id="gridsuspeito">
                <div id="logo">
            <img src="../img/vv.png">
        </div>
        <div id="botao">
            <input class="normal" type="checkbox" id="nice1" onclick="msn()">
            <input class="normal" type="checkbox" id="nice2" onclick="msm()">
            <input class="normal" type="checkbox" id="nice3" onclick="msp()">
            
            <label class="circle" id="jaja1" for="nice1"></label>
            <label class="circle" id="jaja2" for="nice2"></label>
            <label class="circle" id="jaja3" for="nice3"></label>
        </div></div>
           <div id="corredor">
            <div class="space" id="teste1">
                <div class="espaco">
                    <img class="imgteste" src="../img/camisa1.png">
                </div>
            </div>
            <div class="space" id="teste2">
                 <div class="espaco">
                    <img class="imgteste" src="../img/camisa2.png">
                </div>
            </div>
            <div class="space" id="teste3">
                 <div class="espaco">
                    <img class="imgteste" src="../img/camisa3.png">
                </div>
            </div>
        </div>
        </div>
        <div id="direita">
            <div id="grid">
                <p>Criando conta</p>
                <h1>Falta pouco para aproveitar o melhor que a VALStore pode oferecer</h1>
                <form action="../backend/login.php">
                        <div class="form-item">
                          <input name="name" class="nice" type="text" id="nice1" placeholder="" required>
                          <label id="legal" for="nice1">Nome completo</label>
                          </div>
                          <div class="form-item">
                            <input name="email" class="nice" type="email" id="nice2" placeholder="" required>
                            <label id="legal" for="nice2">E-mail</label>
                            </div>
                            <div class="form-item">
                                <input name="password" class="nice" type="text" id="nice3" placeholder="" required>
                                <label id="legal" for="nice3">Senha</label>
                         </div>
                         <label id="anuncio-cookies"><label id="help" for="checkbox-cookies"><input id="checkbox-cookies" type="checkbox" onclick="cookiee()"></label>Aceito receber ofertas e novidades da ValStore e autorizo o uso de cookies.</label>
                         <input id="submitar" value="Criar conta" type="submit">
                         <div id="acess"><a href="loginpage.php"><p>Já tenho conta</p></a></div>
                </form>
                <div id="warn"><p id="textpopup"> 
                </p></div>
            </div>
        </div>
    </div>
</body>
<script src="../styles/loginscriptt.js"></script>
</html>