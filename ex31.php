<h1>PROCESSA CONTACTES</h1>

<?php

$file = fopen("contactes31.txt", "r");
$escribir = "";
echo "<table border=1>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Cognom1</th>
            <th>Cognom2</th>
            <th>Telefon</th>
        </tr>
        </thead>
        <tbody>
        "
;
while(true){
    $contenido = fgets($file);
    if($contenido){
        $lista = explode(",", $contenido);
        $escribir .= "$lista[0]#$lista[1]#$lista[2]#$lista[3]";
        echo "
            <tr>
                <td>$lista[0]</td>
                <td>$lista[1]</td>
                <td>$lista[2]</td>
                <td>$lista[3]</td>
            </tr>
        ";
    } else {
        break;
    }
}

echo "</tbody></table>";
$archivo = fopen("contactes31b.txt", "w");
fwrite($archivo, $escribir);

?>