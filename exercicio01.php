<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    
    <style>
    .frase { color: green; }
    p b { color: coral; }
    hr { 
        border: none;
        border-bottom: 2px solid black }
        
    h1 { text-align: center; }
    </style>

</head>
<body>

    <h1>Exercício PHP</h1>
    <hr>
    
<?php

$nome = "Ozzy Osbourne";
$ano = 1948;
$idade = 75;

echo "<p> Nascido em <b>$ano</b>, <b>$nome</b> possui atualmente $idade anos de idade. </p>" 
?>

    <p class="frase"> Nascido em <b><?=$ano?></b>, <b><?=$nome?></b> possui atualmente <b><?=$idade?> anos de idade</b>. </p>

</body>
</html>