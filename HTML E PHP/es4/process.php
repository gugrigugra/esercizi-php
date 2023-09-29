<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i valori dei campi dal modulo
    $marca = $_POST["marca"];
    $modello = $_POST["modello"];
    $porteHDMI = $_POST["porte_hdmi"];
    $refreshRate = $_POST["refresh_rate"];
    $risoluzione = $_POST["risoluzione"];

    echo "
        <table border=1>
        <tr>
            <th colspan = 2>dati inseriti nel form</th>
            <th>output</th>
        </tr>
        <tr>
            <td>Marca</td>
            <td> echo $marca </td>
            <td rowspan = 5>
            <ul>
                <li>
                    consigli di acquisto
                </li>


               
        ";

        if ($porteHDMI<2) {
            echo "<li>Acquistare tv con almeno due porte hdmi</li>";
        }else {
            echo "<li>porte hdmi: OK</li>";
        }

        if ($refreshRate<50) {
            echo "<li>acquistare un televisore con almeno 50Hz</li>";
        }else {
            echo "<li>refresh rate: OK</li>";
        }

        if (strtolower($risoluzione) == "hd ready" || strtolower($risoluzione) == "full hd") {
            echo "<li>comprare un televisore ultra hd o 4k</li>";
        } else {
            echo "<li>risoluzione: OK</li>";
        }

    echo "</ul>    
    </td>
</tr>
<tr>
    <td>Modello</td>
    <td> echo $modello </td>
</tr>
<tr>
    <td>Numero di Porte HDMI</td>
    <td> echo $porteHDMI </td>
</tr>
<tr>
    <td>aggiornamento</td>
    <td> echo $refreshRate </td>
</tr>
<tr>
    <td>Risoluzione dello Schermo</td>
    <td> echo $risoluzione </td>
</tr>
</table> ";
}
