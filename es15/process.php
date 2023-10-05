<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

// Converte i numeri in binario
$numero1_binario = decbin($numero1);
$numero2_binario = decbin($numero2);

// Verifica quale operazione logica è stata selezionata
$operazione = $_POST["operazione"];

// Esegui l'operazione logica
if ($operazione === "and") {
    $risultato_binario = decbin(bindec($numero1_binario) & bindec($numero2_binario)); // AND
} elseif ($operazione === "or") {
    $risultato_binario = decbin(bindec($numero1_binario) | bindec($numero2_binario)); // OR
} elseif ($operazione === "xor") {
    $risultato_binario = decbin(bindec($numero1_binario) ^ bindec($numero2_binario)); // XOR
}

// Visualizza i risultati
echo "Numero 1 (inserito): $numero1 (binario: $numero1_binario)<br>";
echo "Numero 2 (inserito): $numero2 (binario: $numero2_binario)<br>";
echo "Risultato dell'operazione: $risultato_binario<br>";
echo "Risultato dell'operazione (decimale): " . bindec($risultato_binario);