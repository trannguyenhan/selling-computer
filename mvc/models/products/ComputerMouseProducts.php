<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Products.php';

class ComputerMouseProducts extends Products{
    private $standardConnection;        // boolean
    private $connectionProtocol;        // String 
    private $isLed;                     // boolean
    private $size;                      // String 

    /**
     * {@inheritDoc}
     * @see Products::__construct()
     */
    public function __construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
        $supplier, $standardConnection, $connectionProtocal, $isLed, $size, $description) {
        parent::__construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, $supplier, $description);
        self::setStandardConnection($standardConnection);
        self::setConnectionProtocon($connectionProtocal);
        self::setIsLed($isLed);
        self::setSize($size);
        
        $this->type = Type::MOUSE;
    }
    
    /**
     * @return mixed
     */
    public function getStandardConnection()
    {
        return $this->standardConnection;
    }

    /**
     * @return mixed
     */
    public function getConnectionProtocon()
    {
        return $this->connectionProtocol;
    }

    /**
     * @return mixed
     */
    public function getIsLed()
    {
        return $this->isLed;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $standardConnection
     */
    public function setStandardConnection($standardConnection)
    {
        $this->standardConnection = $standardConnection;
    }

    /**
     * @param mixed $connectionProtocon
     */
    public function setConnectionProtocon($connectionProtocon)
    {
        $this->connectionProtocol = $connectionProtocon;
    }

    /**
     * @param mixed $isLed
     */
    public function setIsLed($isLed)
    {
        $this->isLed = $isLed;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
    
}
