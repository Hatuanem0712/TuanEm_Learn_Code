<?php
$count = 10 ;
$start = 1 ;

for ($i = $start; $i <= $count; $i++) {
    echo 'Lan lap thu: '.$i.' <br/>';
}

echo '<br/>';

$n = 100;
$s = 0;
for ($i=1; $i<=$n; $i++) {
    $s+=$i;
}

echo 'Tong ='.$s;