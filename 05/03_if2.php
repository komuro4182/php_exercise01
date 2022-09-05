<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

echo '私は､' . PHP_EOL;
foreach($foods as $食 => $炭水化物){
echo $食 . 'に' . $炭水化物 . PHP_EOL;
}
echo 'を食べます｡';
