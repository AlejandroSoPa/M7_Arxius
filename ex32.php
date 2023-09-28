<form action="" method="post">
    <p>INTRODUEIX DADES:</p>
    <textarea name="dades" id="" cols="40" rows="5"></textarea>
    <p>Separador: <input type="text" name="sep"></p>
    <input type="submit">
</form>

<?php

$file = fopen("comentaris.txt", "w");
$file_text = preg_replace('/\s+/', $_POST["sep"], $_POST["dades"]);
fwrite($file, $file_text);

?>