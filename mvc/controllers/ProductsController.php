<?php
require ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'Controller.php';
 
class ProductsController implements Controller {
	public function __render(){
        require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'products.php';
    }
}