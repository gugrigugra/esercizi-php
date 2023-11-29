<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vettore 3</title>
</head>

<body>
    <?php
    $numbers = [];
    for ($i = 0; $i < 20; $i++) {
        $numbers[$i] = rand(1, 50);
        echo $numbers[$i] . " ";
    }

    $maxCount = 0;
    $mostFrequentNumber = -1;

    for ($i = 0; $i < 20; $i++) {
        $count = 0;
        for ($j = 0; $j < count($numbers); $j++) {
            if ($numbers[$i] == $numbers[$j]) {
                $count++;
            }
        }
        if ($count > $maxCount) {
            $maxCount = $count;
            $mostFrequentNumber = $numbers[$i];
        }
    }

    echo "<br> Il numero che si ripete più frequentemente è $mostFrequentNumber, che si ripete $maxCount volte.";
    ?>
</body>

</html>