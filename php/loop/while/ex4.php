<?php
function fibonacci($n) {
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        return fibonacci ( $n - 1 ) + fibonacci ( $n - 2 );
    }
}
 
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;  
        }
    }
    return true;
}
 
$n = 10000;
echo ("Các số fibonacci nhỏ hơn $n và là số nguyên tố: ");
$i = 0;
while (fibonacci($i) < $n) {
    $fi = fibonacci($i);
    if (isPrimeNumber($fi)) {
        echo ($fi . " ");
    }
    $i++;
}
?>