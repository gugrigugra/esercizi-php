<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eta = (int)$_POST["eta"];
    $frequenza = $_POST["frequenza"];

    // Imposta il prezzo base in base all'età
    if ($eta < 18 || $eta > 64) {
        $prezzoBase = 35;
    } else {
        $prezzoBase = 45;
    }

    // Calcola lo sconto in base alla frequenza di pagamento
    $sconto = 0;
    switch ($frequenza) {
        case "bimestrale":
            $sconto = 0.10; // 10% di sconto
            break;
        case "trimestrale":
            $sconto = 0.15; // 15% di sconto
            break;
        case "annuale":
            $sconto = 0.20; // 20% di sconto
            break;
    }

    // Calcola il prezzo mensile finale
    $prezzoMensile = $prezzoBase * (1 - $sconto);
    $nome = $_POST["nome"];
    echo "<h2>Riepilogo Dati</h2>";
    echo"<p>Nome: $nome</p>";
    echo "<p>Eta: $eta anni</p>";
    echo "<p>Frequenza di Pagamento: $frequenza</p>";
    echo "<h2>Prezzo Mensile: $prezzoMensile </h2>";
}
