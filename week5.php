<?php
    include_once './template.php';

    $title = 'Week 5 | Control Statement - Year 2021'. PHP_EOL;
    $monthData = [
        ["January", 31],
        ["February", 28],
        ["March", 31],
        ["April", 30],
        ["May", 31],
        ["June", 30],
        ["July", 31],
        ["August", 31],
        ["September", 30],
        ["October", 31],
        ["November", 30],
        ["December", 31],
    ];
    $monthLength = count($monthData);

    echo $design, $title, $design;
    $index = 0;
    while ($index < $monthLength)  {
        echo '[', $index, '] ', $monthData[$index][0], PHP_EOL;
        $index++;
    }
    echo $design;
    echo 'Enter a Month: ';
    $userInput = fgets(STDIN);
    echo $design;

    if(!is_numeric($userInput))
        echo 'Expecting a integer value given within the choices.', PHP_EOL;
    else if(is_numeric($userInput)) {
        $name = $monthData[$userInput / 1][0];
        $days = $monthData[$userInput / 1][1];
        echo $name, PHP_EOL, 'Number of days: ', $days, PHP_EOL;
    } else
        echo 'Inputted value is out of bounds with the given choices.', PHP_EOL;
?>