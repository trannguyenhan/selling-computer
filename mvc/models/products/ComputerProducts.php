<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Products.php';

class ComputerProducts extends Products{
    private $cpu;               // String
    private $ram;               // String
    private $storage;           // String
    private $screen;            // String
    private $card;              // String
    private $mainConnection;    // String
    private $os;                // String   

    public function __construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, 
        $supplier, $cpu, $ram, $storage, $screen, $card, $mainConnection, $os, $description) {
        parent::__construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, $supplier, $description);
        self::setCpu($cpu);
        self::setRam($ram);
        self::setStorage($storage);
        self::setScreen($screen);
        self::setCard($card);
        self::setMainConnection($mainConnection);
        self::setOs($os);
    }
    
    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @return mixed
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @return mixed
     */
    public function getScreen()
    {
        return $this->screen;
    }

    /**
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @return mixed
     */
    public function getMainConnection()
    {
        return $this->mainConnection;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * @param mixed $cpu
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * @param mixed $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * @param mixed $storage
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
    }

    /**
     * @param mixed $screen
     */
    public function setScreen($screen)
    {
        $this->screen = $screen;
    }

    /**
     * @param mixed $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * @param mixed $mainConnection
     */
    public function setMainConnection($mainConnection)
    {
        $this->mainConnection = $mainConnection;
    }

    /**
     * @param mixed $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }
}