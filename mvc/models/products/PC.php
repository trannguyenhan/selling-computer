<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'ComputerProducts.php';

class PC extends ComputerProducts {
    private $case;  // string
    
    /**
     * {@inheritDoc}
     * @see ComputerProducts::__construct()
     */
    public function __construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, $supplier, 
        $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $case, $description) {
        parent::__construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
            $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $description);
        self::setCase($case);
        
        $this->type = Type::PC;
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
