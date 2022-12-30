<?php
function convertNumber($n, $b) {
    if ($n < 0 || $b < 2 || $b > 16 ) {
        return "";
    }
     
    $result = "";
    $m = 0;
    $remainder = $n;
     
    while ($remainder > 0) {
        if ($b > 10) {
            $m = $remainder % $b;
            if ($m >= 10) {
                $result = $result . chr (55 + $m);
            } else {
                $result = $result . $m;
            }
        } else {
            $result = $result . ($remainder % $b);
        }
        $remainder = floor($remainder / $b);
    }
    return strrev($result);
}
 
$n = 30;
echo ("So " . $n . " trong he co so 2 = " . convertNumber($n, 2) . "<br>");
echo ("So " . $n . " trong he co so 16 = " . convertNumber($n, 16));

echo '<br/>';


$n = 15;
echo ("So " . $n . " trong he co so 2 = " . convertNumber($n, 2) . "<br>");
echo ("So " . $n . " trong he co so 16 = " . convertNumber($n, 16));
?>