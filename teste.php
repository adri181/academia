<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <input type="email" name="email">
    <input type="password" name="senha">
    <input type="submit" value="Ir">

    <?php
        include_once("assets/db/usuario/login.php");
    ?>
</form>
</body>
</html>