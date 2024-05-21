<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 03 (com Bootstrap)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .list-group-item:nth-child(odd){
        background-color: lightblue;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Exercício 03 (com Bootstrap)</h1>
    <hr>
<?php
$mesesDoAno = [
    'Janeiro','Fevereiro','Março','Abril',
    'Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'
];
?>
<ol class="list-group list-group-numbered">
<?php foreach( $mesesDoAno as $mes ){ ?>
    <li class="list-group-item"> 
        <?=$mes?>
    </li>
<?php } ?>
</ol>

</div>

</body>
</html>