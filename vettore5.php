<?php 

$vettore1[] = 0;
for ($i = 0; $i <= 10; $i++) {
    $vettore1[$i] = rand(1, 10);
    echo $vettore1[$i] . " ";
}

echo "<br>";

$vettore2[] = 0;

for ($i=0; $i <= 10; $i++) { 
    
    $vettore2[$i] = $vettore1[$i];
    echo $vettore2[$i] . " ";
}

?>