<?php

$numeroCasuale = rand(0, 5);

switch ($numeroCasuale) {

    case 0:

        echo "<img src='https://images.pexels.com/photos/879165/pexels-photo-879165.png?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;

    case 1:

        echo "<img src='https://images.pexels.com/photos/5874910/pexels-photo-5874910.jpeg?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;
    case 2:

        echo "<img src='https://images.pexels.com/photos/5875024/pexels-photo-5875024.jpeg?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;

    case 3:

        echo "<img src='https://images.pexels.com/photos/1629216/pexels-photo-1629216.jpeg?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;

    case 4:

        echo "<img src='https://images.pexels.com/photos/2873473/pexels-photo-2873473.jpeg?auto=compress&cs=tinysrgb&w=1600' alt='prima immagine dio'> ";
        break;

    case 5:

        echo "<img src='https://images.pexels.com/photos/813421/pexels-photo-813421.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2' alt='prima immagine dio'> ";
        break;

    default:
        echo "no immagine";
        break;
}
