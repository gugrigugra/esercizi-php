<?php

$nome1 = $_POST["squadra1"];
$nome2 = $_POST["squadra2"];

$vittorie1 = $_POST["vittorie1"];
$vittorie2 = $_POST["vittorie2"];

$pareggi1 = $_POST["pareggi1"];
$pareggi2 = $_POST["pareggi2"];

$sconfitte1 = $_POST["sconfitte1"];
$sconfitte2 = $_POST["sconfitte2"];

//controlli sulla classifica

$punti1 = $vittorie1 * 3 + $pareggi1;
$punti2 = $vittorie2 * 3 + $pareggi2;

if ($punti1 > $punti2) {
    $prima = $nome1;
    $puntiPrima = $punti1;
    $seconda = $nome2;
    $puntiSeconda = $punti2;
} else {
    $prima = $nome2;
    $puntiPrima = $punti2;
    $seconda = $nome1;
    $puntiSeconda = $punti1;
}

//conteggio numero partite



echo "<table border = 1>";

echo "
<tr>
    <td colspan=2> Dati inseriti nel form </td>
    <td>Output server</td>
</tr>
";

echo "

<tr>
    <td>
        <ul>
            <li>Nome</li>
            <li>Vinte</li>
            <li>Pareggiate</li>
            <li>Perse</li>
        </ul>
    </td>
    <td>
        <ul>
            <li>$nome1</li>
            <li>$vittorie1</li>
            <li>$pareggi1</li>
            <li>$sconfitte1</li>
        </ul>
    </td>
    <td rowspan=2>
        <ul>
            <li>
                <strong>Classifica</strong>
            </li>
            <li>
                $prima = $puntiPrima
            </li>
            <li>
                $seconda = $puntiSeconda
            </li>

        
";

if ($vittorie1 + $pareggi1 + $sconfitte1 < $vittorie2 + $pareggi2 + $sconfitte2) {
echo "<li>
    Le due squadre hanno giocato un numero di partite diverso
</li>";
}


echo "
</ul>
    </td>
</tr>

";

echo "</table>";
