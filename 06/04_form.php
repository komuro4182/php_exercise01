<?php

$answer = 0;
$error = false;
$operator_str = '';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $answer = $num1 + $num2;
        $operator_str = '+';
        break;
    case 'subtraction':
        $answer = $num1 - $num2;
        $operator_str = '-';
        break;
    case 'multiplication':
        $answer = $num1 * $num2;
        $operator_str = '*';
        break;
    case 'division':
        $answer = $num1 / $num2;
        $operator_str = '/';
        break;
    default:
        $error = true;
        break;
}

if ($error) {
    echo '正しい演算子を指定してください';
} else {
    echo "{$num1} {$operator_str} {$num2} = {$answer}";
}
