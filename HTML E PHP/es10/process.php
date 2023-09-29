<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $testo = $_POST["testo"];
    $trovatoMaiuscolo = false;

    // Itera attraverso ciascun carattere nella stringa
    for ($i = 0; $i < strlen($testo); $i++) {
        $carattere = $testo[$i];
        $valoreASCII = ord($carattere);

        // Verifica se il valore ASCII rappresenta un carattere maiuscolo
        if ($valoreASCII >= 65 && $valoreASCII <= 90) {
            $trovatoMaiuscolo = true;
            break; // Esci dal ciclo se viene trovato un carattere maiuscolo
        }
    }

    if ($trovatoMaiuscolo) {
        echo "<p>La stringa contiene almeno un carattere maiuscolo.</p>";
    } else {
        echo "<p>La stringa non contiene caratteri maiuscoli.</p>";
    }
}
