<?php

$countdown = 10;

do{
    echo "Countdown:
    $countdown<br>";
    
    $countdown--;
    
    sleep(1);
}while ($countdown >=0);

echo "Timer Finished!";
?>