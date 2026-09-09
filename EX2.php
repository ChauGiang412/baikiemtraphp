<?php
$n = 10;
$isPrime = true;
if ($n < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
if ($isPrime) {
    echo "$n là số nguyên tố.";
} else {
    echo "$n không phải là số nguyên tố.";
}
?>
