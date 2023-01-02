<?php

$item1 = [
    'name' => 'Ha Tuan Em',
    'email' => 'hatuanem1402@gmail.com',
    'phone' => '123456',
    'address' => 'Ho Chi Minh'
];
$item2 = [
    'name' => 'Nguyen Van A',
    'email' => 'hatuane@gmail.com',
    'phone' => '12345611',
    'address' => 'Ho Chi Minh'
];
$item3 = [
    'name' => 'Do Van B',
    'email' => 'ha123132@gmail.com',
    'phone' => '12344564656',
    'address' => 'Ha Noi'
];


$customerArr = [
    $item1,
    $item2,
    $item3,
    [
        'name' => 'Do Van Basd',
        'email' => 'ha1231asd32@gmail.com',
        'phone' => '1234456asd4656',
        'address' => 'Ha Noi'
    ],
    'status' => 'success',
    30
];

// echo '<pre>';
// print_r($customerArr);
// echo '</pre>';


$customerArr = [];

$customerArr[] = [
    'name' => 'Do Van Basd',
    'email' => 'ha1231asd32@gmail.com',
    'phone' => '1234456asd4656',
    'address' => 'Ha Noi'
];

$customerArr[] = [
    'name' => 'Nguyen Van A',
    'email' => 'hatuane@gmail.com',
    'phone' => '12345611',
    'address' => 'Ho Chi Minh'
];

$customerArr['status'] = 'success';
$customerArr[] =30;

echo '<pre>';
print_r($customerArr);
echo '</pre>';


