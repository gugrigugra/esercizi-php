<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputStringa = $_POST["stringa"];

    echo "trasformazione in intero --> " . (int)$inputStringa . "<br>\n";
    echo "float --> " . (float) $inputStringa . "<br>\n";
    echo "boolean --> ". (bool)$inputStringa . "<br>\n";
    echo "stringa --> ". (string)$inputStringa . "<br>\n";
}
