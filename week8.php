<?php
    include_once './template.php';


    $title = 'Week 8 | Looping - New Phone ';
    $battery = 100;
    $money = 100;
    $batteryUI;
    $activities = ['Exit', 'Play Game [-25 Battery, 50? Earn PHP]', 'Charge Phone [+25 Battery, -25 PHP]'];

    while ($battery !== 0) {

        switch ($battery) { // Battery Percentage
            case 100:
                $batteryUI = '||||';
                break;
            case 75:
                $batteryUI = '_|||';
                break;
            case 50:
                $batteryUI = '__||';
                break;
            case 25:
                $batteryUI = '___|';
                break;
            default:
                $batteryUI = '____';
                break;
        }

        echo $design.$title.PHP_EOL.'PHP: '.$money.'          Cellphone '.$battery.'% ['. $batteryUI. ']'.PHP_EOL.$design;

        $index = 0;

        for ($index; $index < count($activities); $index++)  {
            $holder = $index;
            echo '['.$holder++.'] '.$activities[$index].PHP_EOL;
        }
        echo $design;
        $input = (int)readline(('What do you want to do? Choice: '));


        do { // Loop the continue choice
            $wrongChoice = false;
            echo $design;
            $compareIfNumeric = is_numeric($input);
            
            if ($compareIfNumeric) {
                switch($input) {
                    case 0:
                        echo 'Breaking the Phone...', $spacer;
                        $wrongChoice = true;
                        $battery = 0;
                        break;
                    case 1:
                        echo 'Play! >_< give money please', $spacer;
                        if (rand(10, 1000) > 500) {
                            echo 'Sweet I won 50 PHP', $spacer;
                            $money += 50;
                        }
                        $battery -= 25;
                        $wrongChoice = true;
                        break;
                    case 2:
                        $wrongChoice = true;
                        if ($battery === 100) {
                            echo 'Battery is still full charge...', $spacer;
                            break;
                        } else if ($money >= 25) {
                            echo 'Oof minus 25 PHP...', $spacer;
                            $battery += 25;
                            $money -= 25;
                            break;
                        }
                        echo 'No more money :(', PHP_EOL;
                        break;
                    default:
                        $wrongChoice = true;
                        echo 'Not in the choices', $spacer;
                        break;
                }
            } else echo 'Input must be a integer'.PHP_EOL;
        } while(!$wrongChoice);
    
    }

    echo 'Shutting down...'. PHP_EOL;
?>