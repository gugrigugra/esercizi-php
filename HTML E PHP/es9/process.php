<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeriInseriti = $_POST["numeri"];
    $numeriValidi = array();

    foreach ($numeriInseriti as $numero) {
        if (is_numeric($numero)) {
            $numeriValidi[] = $numero;
        } else {
            echo "<p>Errore: '$numero' non è un numero valido.</p>";
        }
    }

    // Controlla se sono stati inseriti almeno 10 numeri validi
    if (count($numeriValidi) >= 10) {
        echo "<p>Tutti i numeri inseriti sono validi.</p>";
        // Esegui ulteriori operazioni con i numeri validi qui, se necessario
    } else {
        echo "<p>Non sono stati inseriti abbastanza numeri validi.</p>";
    }
}
?>