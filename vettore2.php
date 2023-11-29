<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vettore 2</title>
</head>

<body>

    <?php
    $numbers = [];
    $evenNumbers = [];
    $oddNumbers = [];

    for ($i = 0; $i < 20; $i++) {
        $numbers[$i] = rand(1, 50);
        echo $numbers[$i] . " ";
    }

    echo "<br>";

    $evenCount = 0;
    $oddCount = 0;

    for ($i = 0; $i < 20; $i++) {
        if ($numbers[$i] % 2 == 0) {
            $evenNumbers[] = $numbers[$i];
            $evenCount++;
        } else {
            $oddNumbers[] = $numbers[$i];
            $oddCount++;
        }
    }

    echo "numero di numeri pari: $evenCount" . "<br>";
    echo "numero di numeri dispari: $oddCount " . "<br>";

    for ($i = 0; $i < $evenCount; $i++) {
        echo "numeri pari: " . $evenNumbers[$i] . "<br>";
    }

    for ($i = 0; $i < $oddCount; $i++) {
        echo "numeri dispari: " . $oddNumbers[$i] . "<br>";
    }
    ?>

</body>

</html>