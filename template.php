<?php
    $design = '------------------------------------------------------------'. PHP_EOL;
    $spacer = PHP_EOL.$design.PHP_EOL;

    class Vehicle {
        private $brand;
        private $model;
        private $yearModel;
        private $vehicleColor;
        
        function __construct($brand, $model, $yearModel, $vehicleColor) {
            $this->brand = $brand;
            $this->model = $model;
            $this->yearModel = $yearModel;
            $this->vehicleColor = $vehicleColor;
        }
        
        function __destruct() {
            global $spacer;
            global $design;
            echo $design.''.'Destructed'.PHP_EOL.$design.'Brand: '. $this->brand.PHP_EOL.
            'Model: '. $this->model.PHP_EOL.
            'Gas Type: '. $this->yearModel.PHP_EOL.
            'Vehicle Color: '. $this->vehicleColor.$spacer;
        }

        function setVehicleInfo($brand, $model, $yearModel, $vehicleColor) {
            $this->brand = $brand;
            $this->model = $model;
            $this->yearModel = $yearModel;
            $this->vehicleColor = $vehicleColor;
        }

        function reColor($color) {
            $this->vehicleColor = $color;
        }

        function getVehicleFullInfo() {
            global $spacer;
            global $design;
            echo $design.'Brand: '. $this->brand.PHP_EOL.
                'Model: '. $this->model.PHP_EOL.
                'Gas Type: '. $this->yearModel.PHP_EOL.
                'Vehicle Color: '. $this->vehicleColor.PHP_EOL.$design.'Get Full Info'.$spacer;
        }
        
    }
?>