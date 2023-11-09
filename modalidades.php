<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/modalidades.css">
    <title>Modalidades</title>
</head>
<body>
    <?php
        include_once("assets/componentes/cabecalho.html");
    ?>

<main>

        <h1>Nossas modalidades</h1>

    <div class="class-container">
        <img src="assets/img/musculação1.png" alt="">
        <h2>Musculação</h2>
        <p>A musculação é um tipo de exercício realizado com pesos de diversas cargas, amplitude e tempo de contração, o que faz dela uma atividade física indicada para pessoas de diversas idades e com diferentes objetivos.</p>
    </div>

    <div class="class-container">
        <img src="assets/img/ginastica1.png" alt="">
        <h2>Ginástica</h2>
        <p>A ginástica, também chamada de gímnico é um conceito que engloba modalidades competitivas e não competitivas, envolvendo a prática de uma série de movimentos físicos exigentes de força, flexibilidade e coordenação motora com objetivo de aperfeiçoamento físico e mental.</p>
    </div>

    <div class="class-container">
        <img src="assets/img/yoga1.png" alt="">
        <h2>Yoga</h2>
        <p>Yoga ou ioga, significa controlar, unir. É um termo de origem sânscrita, uma língua presente na Índia, em especial na religião hinduísta. Yoga é um conceito é uma filosofia, que trabalha o corpo e a mente, através de disciplinas tradicionais de quem a pratica.</p>
    </div>

    <div class="class-container">
        <img src="assets/img/pilates.png" alt="">
        <h2>Pilates</h2>
        <p>Pilates é um método de exercícios desenvolvido por Joseph Pilates na década de 1920 que visa trabalhar a conexão entre mente e corpo, como uma unidade, de modo a melhorar a consciência corporal e dessa forma promover outros benefícios.</p>
    </div>

    <div class="class-container">
        <img src="assets/img/boxe.png" alt="">
        <h2>Boxe</h2>
        <p>O boxe ou pugilismo é um esporte de combate e arte marcial, no qual os lutadores usam apenas os punhos, tanto para a defesa, quanto para o ataque. Boxeadores se trocam golpes por um tempo predeterminado em um número de rodadas em uma arena elevada cercada de cordas, o Ringue.</p>
    </div>

    <?php
        include_once("assets/componentes/rodape.html");
    ?>
</main>
</body>
</html>

<?php

    include_once("assets/db/conn.php");

    $sql = "SELECT * FROM cadastro";
    
    $result = $conn->query($sql); //executando a busca no banco de dados e armazenando o retorno na variável result

    if ($result-> num_rows > 0) //se o número de linhas de resultado for maior do que zero
    {
        echo "<table>"; //imprimir a abertura da tabela
        echo "<tr> <th>id</th> <th>nome completo</th> <th>email</th> <th>telefone</th> <th>endereço</th> <th>Detalhes</th> </tr>"; //imprimir o cabeçalho da tabela
        
        while ($linha = $result->fetch_assoc()) //pegar a próxima linha de dados
        {
            echo "<tr>"; //abrir a nova linha
            echo "<td>" . $linha["idcadastro"] . "</td>";
            echo "<td>" . $linha["nomecompleto"] . "</td>";
            echo "<td>" . $linha["email"] . "</td>";
            echo "<td>" . $linha["telefone"] . "</td>";
            echo "<td>" . $linha["endereco"] . "</td>";
            echo "<td> <a href='select.php?telefone=" . $linha["telefone"] . "'>Detalhes</a> </td>";
            echo "</tr>"; //fechar a linha
        }    

        echo "</table>"; //fechar a tabela

    }
    else
    {
        echo "<p>Nenhum registro foi encontrado.</p>";
    }

    $conn->close();

?>