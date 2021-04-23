<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerProducts.php';

class Laptop extends ComputerProducts{
    private $battery;       // int
    
    public function __construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts,
        $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $battery, $description) {
        parent::__construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
            $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $description);
        self::setBattery($battery);
        
        $this->type = Type::LAPTOP;
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