<?php
$start = 1;
$end = 100;
$resultEven = null;
$resultOdd = null;
$eventCount = 0;
$oddCount = 0;

for ($i = $start; $i<=$end; $i++) {
    if ($i=$start % 2 == 0){
        $resultEven.=$i.' ';
    }else{
        // echo $i.'là số lẻ <br/v';
        $resultOdd.=$i.' ';
    }
}

echo 'So chan: '.$resultEven.'<br/>';
echo 'So chan: '.$resultOdd.'<br/>';