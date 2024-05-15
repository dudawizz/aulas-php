<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>

</head>
<body>
    <h1>Exercício 2 - PHP</h1> 
    <hr>   

<?php
$dados = [
    "nome" => "olivia.mendes", 
    "senha" => "oliviamendes86",
    "idade" => 24,
    "cidade" => "Santa Catarina",
    "telefones" => ["11-2135-0300", "11-91234-5678"]
];

?>

<ol>
    <li><?=$dados["nome"]?></li>
    <li><?=$dados["idade"]?> anos</li>
    <li><?=$dados["cidade"]?></li>
    <li><?=$dados["telefones"][1]?></li>
</ol>

</body>
</html>