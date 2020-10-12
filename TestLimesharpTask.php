<?php
include("LimesharpTask.php");

echo 'Task1'.PHP_EOL;
echo 'LimesharpTask::repeat([1,2,3])'.PHP_EOL;
echo "[" . implode("', '", LimesharpTask::repeat([1,2,3])) . "]".PHP_EOL;
echo PHP_EOL;

echo 'Task2'.PHP_EOL;
echo 'LimesharpTask::reformat(\'liMeSHArp DeveLoper TEST\')'.PHP_EOL;
echo LimesharpTask::reformat('liMeSHArp DeveLoper TEST').PHP_EOL;
echo PHP_EOL;

echo 'Task3'.PHP_EOL;
echo 'Option1 '.PHP_EOL;
echo 'LimesharpTask::next_binary_number1([1,1,1,1,1])'.PHP_EOL;
//echo print_r(LimesharpTask::next_binary_number1([1,1,1,1,1]));
echo "[" . implode(",", LimesharpTask::next_binary_number1([1,1,1,1,1])) . "]".PHP_EOL;
echo PHP_EOL;
echo 'Option2 '.PHP_EOL;
echo 'LimesharpTask::next_binary_number2(\'11111\')'.PHP_EOL;
echo LimesharpTask::next_binary_number2('11111').PHP_EOL;
echo PHP_EOL;

