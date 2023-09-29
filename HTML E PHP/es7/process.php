<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        $trasformazione = $_POST["trasformazione"];

        if ($trasformazione === "carattereToAscii") {
            // Trasforma il carattere in codice ASCII
            if (strlen($input) == 1) {
                $codiceASCII = ord($input);
                echo "<p>Codice ASCII di '$input': $codiceASCII</p>";
            } else {
                echo "<p>Errore: Devi inserire un singolo carattere.</p>";
            }
        } elseif ($trasformazione === "asciiToCarattere") {
            // Trasforma il codice ASCII in carattere
            if (ctype_digit($input)) {
                $carattere = chr($input);
                echo "<p>Carattere corrispondente al codice ASCII '$input': $carattere</p>";
            } else {
                echo "<p>Errore: Devi inserire un codice ASCII numerico valido.</p>";
            }
        }
    }
