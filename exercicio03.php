<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3</h1>
    <ul>
        <li>Crie um array contendo o nome dos 12 meses do ano.</li>
        <li>Monte uma lista ordenada exibindo o nome de cada mês em um item.</li>
    </ul>

    <p><b>Desafio:</b> formate a lista de uma forma que os meses apareçam com cores alternadas. Exemplo: janeiro/março em azul, fevereiro/abril em vermelho etc.</p>

    <?php
$meses = array(
    "01" => "Janeiro",
    "02" => "Fevereiro",
    "03" => "Março",
    "04" => "Abril",
    "05" => "Maio",
    "06" => "Junho",
    "07" => "Julho",
    "08" => "Agosto",
    "09" => "Setembro",
    "10" => "Outubro",
    "11" => "Novembro",
    "12" => "Dezembro"
);

$cores = array("blue", "red");

echo "<ul>";
foreach ($meses as $numero => $mes) {
    $cor = $cores[$numero % 2];
    echo "<li style='color: $cor;'>$numero - $mes</li>";
}
echo "</ul>";
?>

</body>
</html>

