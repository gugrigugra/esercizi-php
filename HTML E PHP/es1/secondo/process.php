<?php
#con il controllo fatto nell'if possiamo vedere se è stato fatto l'invio
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $ragione_sociale = $_POST["ragione_sociale"];
    $indirizzo = $_POST["indirizzo"];
    $p_iva = $_POST["p_iva"];
    $tel = $_POST["tel"];

    $descrizione = $_POST["descrizione"];
    $codice = $_POST["codice"];
    $giacenza = $_POST["giacenza"];
    $prezzo_unitario = $_POST["prezzo_unitario"];
    $percentuale_iva = $_POST["percentuale_iva"];
    $quantita_acquistata = $_POST["quantita_acquistata"];
    $sconto = $_POST["sconto"];

    // Calcola il prezzo
    $prezzo_senza_iva = $prezzo_unitario * $quantita_acquistata;
    $iva = ($prezzo_senza_iva * $percentuale_iva) / 100;
    $prezzo_con_iva = $prezzo_senza_iva + $iva;

    // Applica lo sconto se specificato
    if (!empty($sconto)) {
        $sconto_amount = ($prezzo_senza_iva * $sconto) / 100;
        $prezzo_senza_iva -= $sconto_amount;
        $prezzo_con_iva -= ($sconto_amount + (($sconto_amount * $percentuale_iva) / 100));
    }

    // Visualizza i risultati
    echo "<h2>Dati Cliente</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Cognome:</strong> $cognome</p>";
    echo "<p><strong>Ragione Sociale:</strong> $ragione_sociale</p>";
    echo "<p><strong>Indirizzo:</strong> $indirizzo</p>";
    echo "<p><strong>Partita IVA:</strong> $p_iva</p>";
    echo "<p><strong>Telefono:</strong> $tel</p>";

    echo "<h2>Dati Prodotto</h2>";
    echo "<p><strong>Descrizione:</strong> $descrizione</p>";
    echo "<p><strong>Codice:</strong> $codice</p>";
    echo "<p><strong>Giacenza:</strong> $giacenza</p>";
    echo "<p><strong>Prezzo Unitario:</strong> €$prezzo_unitario</p>";
    echo "<p><strong>Percentuale IVA:</strong> $percentuale_iva%</p>";
    echo "<p><strong>Quantità Acquistata:</strong> $quantita_acquistata</p>";
    echo "<p><strong>Sconto Applicato:</strong> $sconto%</p>";

    echo "<h2>Prezzo da Pagare</h2>";
    echo "<p><strong>Prezzo Senza IVA:</strong> €$prezzo_senza_iva</p>";
    echo "<p><strong>IVA ($percentuale_iva%):</strong> €$iva</p>";
    echo "<p><strong>Prezzo Con IVA:</strong> €$prezzo_con_iva</p>";
} else {
    echo "<p>Nessun dato e' stato inviato.</p>";
}
