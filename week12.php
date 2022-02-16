<?php
    include_once './template.php';
    $title = 'Week 12 | Object Oriented Programming - Cars'. PHP_EOL;
    $index = 0;
    $objectArray = [];
    $carArray = [[
        'Suzuki',
        'Grand Vitara',
        '2007',
        'Red'
    ],[
        'Suzuki',
        'Grand Vitara',
        '2008',
        'Blue'
    ],[
        'Suzuki',
        'Kizashi',
        '2008',
        'Green',
    ],[
        'Tesla',
        'Tesla Model 3',
        '2014',
        'Red',
    ],[
        'Tesla',
        'Tesla Model S',
        '2021',
        'Blue',
    ],[
        'Toyota',
        'Toyota Corolla',
        '2021',
        'Gray',
    ],[
        'Volvo',
        'Volvo V90',
        '2022',
        'Gray',
    ]];
    $carLength = count($carArray);

    echo $design, $title, $design;

    for ($index; $index < $carLength; $index++) {
        array_push($objectArray, new Vehicle($carArray[$index][0], $carArray[$index][1], $carArray[$index][2], $carArray[$index][3]));
    }

    $holder = $carLength;
    $holder--;
    $objectArray[$holder]->reColor('Rainbow');
    $objectArray[$holder]->getVehicleFullInfo();
?>