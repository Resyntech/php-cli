<?php
    include_once './template.php';

    $title = 'Week 10 | Functions - Multiplication table'.PHP_EOL;
    $continue = true;

    function testChar($character) {
        $length = strlen($character);
        switch($length) {
            case 1:
                return '  '.$character;
            case 2:
                return ' '.$character;
            default:
                return $character;
        }
    }

    function multiply($columns) {
        global $spacer;
        $index = 0;
        $counter = 0;

        for($index; $index < $columns; $index++) {
            $holderOut = $index;
            $holderOut++;
            echo testChar($holderOut), ' - ';
            for($counter; $counter < $columns; $counter++) {
                $holder = $counter;
                $holder++;
                $multiple = $holderOut*$holder;
                echo testChar($multiple), ' ';
            }
            $counter = 0;
            echo PHP_EOL;
        }
        echo $spacer;
    }

    while ($continue) {

        echo $design, $title, $design;
        echo 'Enter a integer: ';
        $userInput = fgets(STDIN);
        echo $design;

        if(!is_numeric($userInput))
            echo 'Expecting a integer value given within the choices.', PHP_EOL;
        else {
            multiply($userInput);
        }
    }
?>