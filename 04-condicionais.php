OCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Condicionais</h1>
    <hr>

    <h2>Simples (não tem o <code>else</code> )</h2>
<?php
$numero = 50;
if($numero < 100){
    /* Este comando só será executado se 
    a condição for TRUE/VERDADEIRO */
    echo "<p>Condição é verdadeira/true!</p>";
}
?>
    <hr>
    <h2>Composta (usa <code>if/else</code>)</h2>
<?php
/* Controle de Estoque */
$produto = "Geladeira";
$qtdEmEstoque = 0; // o que temos no momento
$qtdCritica = 2; // mínimo necessário
?>
    <h3>Produto: <?=$produto?></h3>
    <h3>Estoque: <?=$qtdEmEstoque?></h3>

<?php
/* Se a quantidade em estoque for abaixo
da quantidade crítica, o sistema deve avisar
e pedir pra repor. */
if( $qtdEmEstoque < $qtdCritica ){
    echo "<p class=\"alert alert-warning\">É necessário repor</p>";

    /* Condicional ANINHADA */
    if( $qtdEmEstoque == 0 ){
        echo "<p class=\"alert alert-danger\">AGORA!!!</p>";
    }

} else {
    /* Caso contrário, simplesmente 
    falar que o estoque está normal. */
    echo "<p class=\"alert alert-success\">Estoque normal</p>";
}
?>
    <hr>

    <h2>Encadeada (usa <code>if, else, elseif</code>)</h2>
<?php
/* Verificando o produto e atribuindo diferentes
garantias (em anos) */

if($produto == "Ultrabook"){
    $garantia = 5;
} elseif($produto == "Geladeira"){
    $garantia = 3;
} elseif($produto == "TV"){
    $garantia = 2;
} else {
    $garantia = 1;
}
?>
<p>O produto <?=$produto?> tem garantia de 
    <span class="badge text-bg-primary">
        <?=$garantia?>
    </span> 
        ano<?php if($garantia > 1) echo "s" ?>.
</p>

    <hr>

    <h2>Condicional com <code>switch/case</code></h2>
    <p><i>Estrutura alternativa para condicional encadeada</i></p>

<?php
switch($produto){
    case "Ultrabook": $garantiaB = 5; break;
    case "Geladeira": $garantiaB = 3; break;
    case "TV": $garantiaB = 2; break;
    default: $garantiaB = 1; break;
};
?>
<p>Garantia B: <?=$garantiaB?></p>

</div>

</body>
</html>