<?php

echo '$aの値を入力してください: ';
$a = trim(fgets(STDIN));

echo '$bの値を入力してください: ';
$b = trim(fgets(STDIN));

// ここに処理を記述
if ($a > $b) {
    echo $a  . PHP_EOL;
}
if ($a < $b) {
    echo $b  . PHP_EOL;
}
if ($a = $b) {
    echo '入力された値は等しいです'  . PHP_EOL;
}

