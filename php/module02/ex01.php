<?php
$str1 = 123;
$str2 = 456;
$str = $str1.' '.$str2;
echo $str;
$str = '123456'.$str2;
echo $str;
echo '<br/>';
$url = 'https://google.com';
$imgUrl = 'https://glints.com/vn/blog/wp-content/uploads/2022/06/lap-trinh-php-la-gi-1.jpg';
$htmloutput = '<a href="'.$url.'"><img src=" '.$imgUrl.' " alt="hinh anh"></a>';

echo $htmloutput;

define('WEB_NET','123');
echo WEB_NET ;
const _WEB_NET_1 = '123456789' ;
echo _WEB_NET_1;
$checkDefine = define('_WEB_NET_1');
var_dump($checkDefine);
$so_chan = 88;
var_dump('so_chan');
