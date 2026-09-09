<?php
function inhinhchunhat ($chieurong, $chieucao)
{
    for ($i = 1; $i <= $chieucao; $i++) {
        for ($j = 1; $j <= $chieurong; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}
inhinhchunhat(5,3);
?>
