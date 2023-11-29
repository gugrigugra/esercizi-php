<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vettore 6</title>
</head>

<body>
    <form method="post">
        <label for="numero">inserire un numero</label>7
        <br>
        <input type="number" name="numero" id="numero">
        <br>
        <input type="submit" value="invia">
    </form>

    <?php

    $vettore[] = 0;
    $numero = $_POST["numero"];
    for ($i = 0; $i <= 10; $i++) {
        $vettore[$i] = rand(1, 20);
    }

    $sum = 0;
    for ($i = 0; $i <= 10; $i += 2) {
        $sum += $vettore[$i];
    }

    if ($sum <= $numero) {
        echo "La somma degli elementi del vettore con indice pari è minore o uguale a $numero.";
    } else {
        echo "La somma degli elementi del vettore con indice pari è maggiore di $numero.";
    }
    ?>
</body>

</html>