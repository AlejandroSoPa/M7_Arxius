<h1>PROCESSA CONTACTES</h1>

<?php

$file = fopen("contactes.txt", "r");
$escribir = "";
echo "<table border=1>
        <tr>
            <th>Nom</th>
            <th>Cognom1</th>
            <th>Cognom2</th>
            <th>Telefon</th>
        </tr>
        "
;
while(true){
    $contenido=fgets($file);
    
    if($contenido){
        echo "
            <tr>
                <td>$</td>
                <td>$</td>
                <td>$</td>
                <td>$</td>
            </tr>
        </table>
        ";
    } else {
        break;
    }
}


?>