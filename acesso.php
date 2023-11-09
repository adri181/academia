<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include_once("assets/componentes/cabecalho.html");
    ?>
<div class="acesso">
   

   <div class="area">
       <h2>Área restrita</h2>

    
   <form action="" method="POST">
       <label for="email">E-mail:</label><br>
       <input type="email" name="email" placeholder="Informe seu e-mail de cadastro"><br><br>
       <label for="senha">Senha:</label><br>
       <input type="password" name="senha" placeholder="Informe sua senha"><br><br>
       <input class="botao2"  type="submit" value="Enviar"><br><br>


       <!-- <div id="senha">
           <a href="#" class="botao">Esqueceu a senha? <a href="#" class="botao" >Clique aqui.</a> </a><br>
       </div>
       <div id="senha">
           <a href="#" class="botao">Nao tem cadastro? <a href="#"  class="botao" >Cadastre-se aqui.</a> </a><br><br>
       </div> -->

       <?php
            include("assets/db/usuario/login.php");
        ?>
   </form>

</div>


</div>
</body>
</html>