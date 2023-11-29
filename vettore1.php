<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vettori casuali</title>
</head>

<body>
    <h1>algoritmo di ribaltamento di un vettore</h1>
    <?php

    $vettore[] = 0;
    for ($i = 0; $i <= 10; $i++) {
        $vettore[$i] = rand(10, 100);
        echo $vettore[$i] . " ";
    }

    echo "<br>";

    //ribaltamento del vettore
    
    $vettore2[] = 0;
    for ($i = 0; $i <= 10; $i++) {
        $vettore2[$i] = $vettore[10 - $i];
        echo $vettore2[$i] . " ";
    }


    ?>
</body>

</html>