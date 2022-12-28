<?php
$sochan = 1;
$soam = 0;

// $sochan = (int)$sochan;

// $check = is_int($sochan);
// $check = is_integer($sochan);

// var_dump($check);

$check = true;
// var_dump($check);
if ($sochan>0) {
    echo ' số dương';
} else {
    echo 'số âm';
};

echo '<br/>';

if ($soam>0) {
    echo ' số dương';
} else {
    echo 'số âm';
};
echo '<br/>';

if ($soam>0) {
    echo ' số dương';
} elseif ($soam<0) {
    echo 'số âm';
} elseif ($soam==0) {
    echo '0';
};
echo '<br/>';

$number = 0;



switch ($number) {
    case 2:
        echo 'Hôm nay là thứ 2';
        break;
    case 3:
        echo 'Hôm nay là thứ 3';
        break;
    case 4:
        echo 'Hôm nay là thứ 4';
    break;
    case 5:
        echo 'Hôm nay là thứ 5';
    break;
    case 6:
        echo 'Hôm nay là thứ 6';
    break;
    case 7:
        echo 'Hôm nay là thứ 7';
    break;

    case 8:
        echo 'Hôm nay là chủ nhật';
    break;
    default:
        echo 'Không hợp lệ';
    break;
}


