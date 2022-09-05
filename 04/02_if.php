<?php

echo '$pointの値を入力してください: ';
$point = trim(fgets(STDIN));

switch($point){
case ($point % 2 == 0):
    echo $point . 'は偶数です' . PHP_EOL;
    break;
default:
    echo $point . 'は奇数です' . PHP_EOL;
    break;


}
