<?php
    include_once './template.php';
    $title = 'Week 13 | Inheritance - Vehicle x Bike'. PHP_EOL;

    class Bike extends Vehicle {
        private $bikeType;

        function __construct($type) {
            $this->bikeType = $type;
        }

        function __destruct() {
            global $spacer;
            echo 'This is a '.$this->bikeType.$spacer;
        }

        function getInfo() {
            global $spacer;
            echo 'This is a '.$this->bikeType.$spacer;
        }
    }

    echo $design, $title, $design;
    $bike = new Bike('Mountan Bike');
    $bike->setVehicleInfo('Trinx', 'NULL', '2015', 'White');
    $bike->getVehicleFullInfo();

?>