<?php

require_once 'ComputerProducts.php';

class PC extends ComputerProducts {
    private $case;  // string
    
    /**
     * {@inheritDoc}
     * @see ComputerProducts::__construct()
     */
    public function __construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, $supplier, 
        $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $case) {
        parent::__construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
            $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os);
        setCase($case);
    }
    
    /**
     * @return mixed
     */
    public function getCase()
    {
        return $this->case;
    }

    /**
     * @param mixed $case
     */
    public function setCase($case)
    {
        $this->case = $case;
    }

}
