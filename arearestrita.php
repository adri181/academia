<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área restrita</title>
</head>
<body>
    <?php
        include_once("assets/componentes/cabecalho.html");
    ?>

    <h2>Área restrita</h2>

    <form action="assets/arearestrita.php">
        <label for="E-mail">E-mail:</label><br><br>
        <input type="text" name="E-mail"><br><br>
        <label for="Senha">Senha:</label><br><br>
        <input type="text" name="Senha"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>

    <div id="senha">
        <a href="#" class="botao">Esqueceu a senha? Clique aqui.</a><br><br>
    </div>

    <div id="banner">
        <img src="assets/img/treino.png" alt="">
    </div>

    <?php
        include_once("assets/componentes/rodape.html");
    ?>
</body>
</html>