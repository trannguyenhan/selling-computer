<?php

require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';

class Products {
    private $productID;         // int
    private $model;             // String
    private $image;             // String : path of image
    private $price;             // double
    private $weigh;             // double
    private $color;             // String
    private $numberOfProducts;  // int
    private $supplier;          // String
    private $description;       // String
    private $disable;           // 0 or 1, 0 : no disable, 1 : disable

    public $type = Type::NONE;

    public function __construct($productID, $model, $image, $price, $weigh, $color, $numberOfProducts, $supplier, $description) {
        self::setDisable(0);  // new products is no disable
        self::setProductID($productID);
        self::setModel($model);
        self::setImage($image);
        self::setPrice($price);
        self::setWeigh($weigh);
        self::setColor($color);
        self::setNumberOfProducts($numberOfProducts);
        self::setSupplier($supplier);
        self::setDescription($description);
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getWeigh()
    {
        return $this->weigh;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getNumberOfProducts()
    {
        return $this->numberOfProducts;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @return mixed
     */
    public function getDisable()
    {
        return $this->disable;
    }

    /**
     * @param mixed $productID
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $weigh
     */
    public function setWeigh($weigh)
    {
        $this->weigh = $weigh;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $numberOfProducts
     */
    public function setNumberOfProducts($numberOfProducts)
    {
        $this->numberOfProducts = $numberOfProducts;
    }

    /**
     * @param mixed $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $disable
     */
    public function setDisable($disable)
    {
        $this->disable = $disable;
    }
}
