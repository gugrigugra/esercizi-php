<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["primo"];
    $b = $_POST["secondo"];

    if ($a !== "$b") {

        if ($a > "$b") {
            $q = $a / $b;
            $r = $a % $b;

            if ($r < $b) {
                if ($r == 0) {

                    $mcd = $b;
                    echo "il mcd e' $mcd <br>";
                }
            }
        }

        $mcm = ($a * $b) / $mcd;
        echo "il mcm e' $mcm <br>";
    } else {
        echo "inserire due numeri diversi <br>";
    }
}
