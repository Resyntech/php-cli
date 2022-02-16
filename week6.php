<?php
    include_once './template.php';

    $title = 'Week 6 | Control Statement'. PHP_EOL;
    $rand = rand(0, 100);

    echo $design, $title, $design;
    echo 'Random number: ',$rand, PHP_EOL,$design;
    echo 'Enter your first number: ';
    $inputOne = fgets(STDIN);
    echo 'Enter your second number: ';
    $inputTwo = fgets(STDIN);
    echo $design;

    if(is_numeric($inputOne) xor is_numeric($inputTwo) )
        echo 'Expecting both inputs to be a integer value.', PHP_EOL;
    else if($inputOne / 1 === $rand && $inputTwo / 1 === $rand)
        echo 'You\'ve match the random number!', PHP_EOL;
    else if($inputOne / 1 % 2 === 0 && $inputTwo / 1 % 2 === 0)
        echo 'Proud IS!', PHP_EOL;
    else
        echo 'Try Harder!', PHP_EOL;
?>