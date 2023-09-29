<?php
#il controllo se il pulsante di submit è stato
#premuto non funziona?  
    
$localita = $_POST["localita"];
echo "localita: " . $localita . "<br>\n";

$data = $_POST["data"];
echo"data: ". $data . "<br> \n";

$ora = $_POST["ora"];
echo "ora: ". $ora . "<br> \n";

$tipo_rilevazione = $_POST["tipo-rilevazione"];
echo "tipo rilevazione: ". $tipo_rilevazione . "<br>\n";

$umidita = $_POST["umidita"];
echo "umidita: ". $umidita . "<br>\n";

$clima = $_POST["clima"];
echo "clima: ". $clima . "<br>\n";