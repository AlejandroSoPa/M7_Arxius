<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki Converter</title>
</head>
<body>

<?php
    // Carrega el contingut de l'arxiu de text
    $contingut = file_get_contents('ex34.txt');

    // Substitueix les marques de títol ## per <H1> i les mostra
    $contingut_html = preg_replace('/## (.*?)(\r?\n|$)/', '<h1>$1</h1>', $contingut);

    // Imprimeix el contingut HTML generat
    echo $contingut_html;
?>

</body>
</html>