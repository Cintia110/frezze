<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    include 'herder_admin.php';
    include 'conexao_bd.php';

    $descricao = $_POST["txtDescricao"];

    $sql = "INSERT INTO produto(descricao) values ('$descricao')";

    if (executarComando($sql))
    {
        echo "<h2>O produto foi inserido na base de dados!</h2>";
    }
    else
    {
        echo "<h2>Erro durante a inserção!</h2>";
    }

    ?>
    
    <a href="produto_cadastro.php">
    <input type ="button" value="Voltar" class="botao"/> 
    </a>
</body>
</html>