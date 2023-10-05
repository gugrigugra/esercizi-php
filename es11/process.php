<?php

echo "<h1>Tavola pitagorica</h1>";
echo "<table border=1>";

for ($i = 1; $i <= 10; $i++) {
    echo"<tr><td>$i</td>";

    for ($j=1; $j <= 10; $j++) { 
        $risultato = $i * $j;
        echo "<td>$risultato</td>";
    }
    echo "</tr>";
}

echo "</table>";
