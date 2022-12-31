<?php

$carArr = [
    'Vinfast',
    'Honda',
    'Kia',
    'toyota',
    null,
    30
];

// echo '<pre>';
// print_r($carArr);
// echo '</pre>';

$customerArr = [
    'Unicode',
    'name' => 'Hoang An',
    10 => 'PHP',
    'postion' => 'Techincal',
    'age' => 30,
    'HTML - CSS'
];

// echo '<pre>';
// print_r($customerArr);
// echo '</pre>';

$customerArr = [];


$customerArr [] = 'Unicode';
$customerArr [10] = 'PHP';
$customerArr [] = 'HTML - CSS';
$customerArr ['name'] = 'Hoang An';

// echo '<pre>';
// print_r($customerArr);
// echo '</pre>';


$customerArr ['name'] = '123';
$customerArr ['age'] = '11';
$customerArr ['11'] = '456456';



unset($customerArr['age']);


echo '<pre>';
print_r($customerArr);
echo '</pre>';

for($index = 0; $index<count($customerArr); $index++){
    echo $customerArr[$index].'<br/>';
}

foreach ($customerArr as $item) {
    echo $item.'<br/>';
}

foreach ($customerArr as $key=>$item) {
    echo $key.' = '.$item.'<br/>';
}

