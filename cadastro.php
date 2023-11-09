<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
        include_once("assets/componentes/cabecalho.html");
    ?>

    <h1>Cadastre-se aqui</h1>
    
    <form action="assets/arearestrita.php/cadastro">
        <label for="nome">Nome:</label><br><br>
        <input type="text" name="Nome"><br><br>
        <label for="email">E-mail:</label><br><br>
        <input type="text" name="E-mail"><br><br>
        <label for="endereco">Endereço:</label><br><br>
        <input type="text" name="telefone"><br><br>
        <label for="telefone">Telefone:</label><br><br>
        <input type="text" name="telefone"><br><br>
        <input type="submit" value="Cadastrar"><br><br>
    </form>

    <div id="banner">
        <img src="assets/img/cadastro.png" alt="">
    </div>

    <?php
        include_once("assets/componentes/rodape.html");
    ?>
</body>
</html>