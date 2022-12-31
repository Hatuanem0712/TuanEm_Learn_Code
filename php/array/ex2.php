<?php

$customerArr = ['Unicode'];

if (!empty($customerArr) && is_array($customerArr)){
    foreach ($customerArr as $key=>$value) {
        echo $value.'<br/>'; 
    }
};

$customerArr = [
    '123',
    '456',
    '789',
    false
];

for($i = 0; $i<count($customerArr); $i++){
    if(isset($customerArr[$i])){
        var_dump($customerArr[$i]);
    }
}
