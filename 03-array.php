<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Arrays</h1>
        <hr>
        <h2>Arrays numéricos/indexados</h2>

<?php
// Declarando arrays
$bandas = ["Rush", "Cream", "Kiss"];
$cursos = array("HTML5", "PHP", "Design", "JS");

define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
const UNIDADES_SENAC = ["Penha", "São Miguel", "Itaquera"]; 

?>

    <h3>Acesso e saída de dados</h3>
    <p>Curto a banda <?=$bandas[1]?></p>
    <p>Já estudei <?=$cursos[3]?></p>
    <p>Gostaria de conhecer o Sesc <?=UNIDADES_SESC[1]?></p>
    <p>Estamos no Senac <?=UNIDADES_SENAC[0]?></p>

    <hr>

    <h2>Arrays associativos</h2>

<?php
$filme = [
    // Chave associativa
    "titulo" => "Deadpool", 
    "ano" => 2016,
    "genero" => "Ação",
    "personagens" => ["Wade Wilson", "Fanático"]
];

$livro = array(
    "titulo" => "Senhor dos Anéis",
    "autor" => "Tolkien"
);

?>

    </div>
</body>
</html>