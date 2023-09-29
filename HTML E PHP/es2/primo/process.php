<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nome = $_POST["nome"];
    $password = $_POST["password"];
    $argomenti = $_POST["argomenti"];

    if ($password == "password") {
        echo "<h2>Dati Utente:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>password</th><th>Argomenti da Approfondire</th></tr>";
        echo "<tr><td>$nome</td><td>$password</td><td>";

        if (!empty($argomenti)) {
            echo "<ul>";
            foreach ($argomenti as $argomento) {
                echo "<li>$argomento</li>";
            }
            echo "</ul>";
        } else {
            echo "Nessun argomento selezionato.";
        }

        echo "</td></tr>";
        echo "</table>";
    }
    else {
        echo "<h1>password non password</h1>";
    }
} else {
    echo "<p>Nessun dato è stato inviato.</p>";
}
