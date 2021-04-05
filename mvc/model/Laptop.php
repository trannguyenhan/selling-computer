<?php

class Laptop extends ComputerProducts{
    private $battery;       // int
    
    function __construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts,
        $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $battery) {
        parent::__construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
            $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os);
        setBattery($battery);
    }
    
    /**
     * @return mixed
     */
    public function getBattery()
    {
        return $this->battery;
    }

    /**
     * @param mixed $battery
     */
    public function setBattery($battery)
    {
        $this->battery = $battery;
    }

}