<?php

// Ottieni il numero inserito dall'utente
$numero = $_POST["numero"];

// Verifica quale operazione logica è stata selezionata
$operazione = $_POST["operazione"];

// Esegui l'operazione logica
if ($operazione === "shift_destro") {
    $risultato = $numero >> 1; // Shift Destro
} elseif ($operazione === "shift_sinistro") {
    $risultato = $numero << 1; // Shift Sinistro
} elseif ($operazione === "not") {
    $risultato = ~$numero; // NOT
}

// Visualizza il risultato
echo "Numero di input (in binario): " . decbin($numero) . "<br>";
echo "Risultato dell'operazione: " . decbin($risultato) . "<br>";
echo "Risultato convertito in decimale: " . $risultato . "<br>";
