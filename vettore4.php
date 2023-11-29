<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vettore 4</title>
</head>

<body>


    <form method="post">
        <label for="input">inserire il numero da cercare</label>
        <br>
        <input type="number" name="input" id="input" min="1" max="10">
        <br>
        <input type="submit" value="invia">
    </form>

    <?php


    $vettore[] = 0;
    for ($i = 0; $i <= 10; $i++) {
        $numeroCasuale = rand(1, 10);
        $vettore[$i] = $numeroCasuale;
        echo $vettore[$i] . " ";
    }

    $count = 0;
    $numeroInput = $_POST["input"];

    for ($i=0; $i <= 10; $i++) { 
        
        if ($vettore[$i] == $numeroInput) {
            $count++;
        }
    }

    echo "il numero " . $numeroInput . " è stato trovato " . $count . " volte";

    ?>
</body>

</html>