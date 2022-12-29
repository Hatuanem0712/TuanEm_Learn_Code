<?php
$total = 0;
$i = 2;
do{
    $total+= 1/$i;
    $i+=2;
}while (1/$i>=0.0001);
echo 'Tong ='.$total.'<br/>';