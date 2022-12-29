<?php
define ( "DEC_10", 10 );
 
function isThuanNghich($n) {
    $arrNumbers = array ();
    $count = 0;
 
    do {
        $arrNumbers [$count] = $n % DEC_10;
        $count ++;
        $n = floor ( $n / DEC_10 );
    } while ( $n > 0 );

    $size = count ( $arrNumbers );
    for($i = 0; $i < ($size / 2); $i ++) {
        if ($arrNumbers [$i] != $arrNumbers [$size - $i - 1]) {
            return false;
        }
    }
    return true;
}
 
$count = 0;
for($i = 1000; $i < 10000; $i ++) {
    if (isThuanNghich ( $i )) {
        echo ($i . "<br>");
        $count ++;
    }
}
echo ("Tổng các số thuận nghịch có 4 chữ số: $count");
?>