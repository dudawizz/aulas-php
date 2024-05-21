<?php include "recursos.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=EMPRESA?> Iniciando com PHP</title>
    <style>
        p { color: red; }
    </style>
</head>
<body>
    <h1>Experiências com PHP</h1>
    <hr>

    <!-- Delimitadores de abertura/fechamento PHP -->
    <?php
    // Comando de saída: echo
    echo "Olá!";
    echo "<p style='text-align:center'>Senac Penha</p>";
    echo '<p style="text-align:center">Senac Penha</p>';
    echo "<p style=\"text-align:center\">Senac Penha</p>";
    ?>
    <!-- Delimitadores de abertura/fechamento PHP -->

    <hr>
    <h2>Tecnologias Trabalhadas</h2>

<?php foreach ( $tecnologias as $tecnologia ) { ?>
    <p> <?=$tecnologia?> </p>
<?php }

?>

</body>
</html>