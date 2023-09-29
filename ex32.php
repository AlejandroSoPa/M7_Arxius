<form action="" method="post">
    <p>INTRODUEIX DADES:</p>
    <textarea name="dades" id="" cols="40" rows="5"></textarea>
    <p>Separador: <input type="text" name="separador"></p>
    <input type="submit">
</form>

<?php

$file = fopen("comentaris.txt", "w");
$texto = preg_replace('/\s+/', $_POST["separador"], $_POST["dades"]);
fwrite($file, $texto);

?>