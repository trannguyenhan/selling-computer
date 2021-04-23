<?php

class Evaluate {
    private $username;      // String
    private $productID;     // int
    private $star;          // int
    private $comment;       // String
    private $date;          // date
    
    public function __construct($username, $productID, $star, $comment, $date) {
        self::setUsername($username);
        self::setProductID($productID);
        self::setStar($star);
        self::setComment($comment);
        self::setDate($date);
    }
    
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
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
    public function getStar()
    {
        return $this->star;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $productID
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    /**
     * @param mixed $star
     */
    public function setStar($star)
    {
        $this->star = $star;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

}