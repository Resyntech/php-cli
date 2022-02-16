<?php
    include_once './template.php';

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
    $months = [];
    $title = 'Week 11 | Functions - Applicable to all years without February 29'. PHP_EOL;
    $continue = true;
    $wrongChoice = false;

    function loopMonth($numberOfMonths, $isFebHere) { // Flexible Function
        global $months;
        $minMonth = 28;
        $midMonth = 30;
        $maxMonth = 31;
        $index = 1;

        for ($index; $index <= $numberOfMonths; $index++) {
            if ($index === 2 && $isFebHere) // Month of February
                array_push($months, $minMonth);
            else
                switch($index % 2) {
                    case 0: // Even Month
                        array_push($months, $midMonth);
                        break;
                    case 1: // Odd Month
                        array_push($months, $maxMonth);
                        break;
                    default:
                        break;
                }
        }

    } 

    loopMonth(7, true);
    loopMonth(5, false);

    do { // Loop the Selection -> Front End
        echo $design, $title, $design;
        $index = 0;
        for ($index; $index < $monthLength; $index++)  {
            echo '[', $index, '] ', $monthData[$index][0], PHP_EOL;
        }

        echo $design;
        echo 'Enter a Month: ';
        $userInput = fgets(STDIN);
        echo $design;

        if(!is_numeric($userInput))
            echo 'Expecting a integer value given within the choices.', PHP_EOL;
        else if(is_numeric($userInput) && $userInput < 0 || $userInput > 11)
            echo 'Inputted value is out of bounds with the given choices.', PHP_EOL;
        else {
            $name = $monthData[$userInput / 1][0];
            $days = $monthData[$userInput / 1][1];
            echo $name, PHP_EOL, 'Number of days: ', $days, PHP_EOL;
        }

        
        while(!$wrongChoice) { // Loop the continue choice
            echo $design;
            $choice = (string)readline('Continue choosing month [Y]es or [N]o? ');
            $compareIfNumeric = !is_numeric($choice);
            
            if ($compareIfNumeric) {
                switch($choice) {
                    case 'y': case 'Y':
                        echo 'Continuing month picker...', PHP_EOL;
                        $wrongChoice = true;
                        break;
                    case 'n': case 'N':
                        echo 'Exiting month picker...', PHP_EOL;
                        $wrongChoice = true;
                        $continue = false;
                        break;
                    default:
                        echo 'Not in the choices', PHP_EOL;
                        break;
                }
            }
        }
        $wrongChoice = false;

    } while($continue);
?>