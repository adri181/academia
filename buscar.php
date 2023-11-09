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
     <form action="assets/db/cadastro/select.php">
        <h2>Buscar usuário</h2>
        <label>Telefone</label>
        <input type="Telefone" name="Telefone">
        <input type="submit" value="Buscar">

    </form>

    <section>
    <?php

        include_once("assets/db/cadastro/list.php");

    ?>

    <?php
        include_once("assets/componentes/rodape.html");
    ?>
    </section>
</body>
</html>