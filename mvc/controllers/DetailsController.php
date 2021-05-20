<?php
require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'Controller.php';
require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'DefaultController.php';

class DetailsController extends DefaultController implements Controller {
		private $id; 					// int

		public function __construct($id){
				$this->id = $id;
		}

		public function __render(){
        self::view($this->id);
    }

    public function view($product_id) {
        require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Type.php';
        require_once ROOT . DS . 'services' . DS . 'products' . DS . 'LaptopServices.php';
        require_once ROOT . DS . 'services' . DS . 'products' . DS . 'PCServices.php';
        require_once ROOT . DS . 'services' . DS . 'products' . DS . 'ComputerMouseProductsServices.php';
        require_once ROOT . DS . 'services' . DS . 'TypeProductsServices.php';
        require_once ROOT . DS . 'mvc' . DS . 'models' . DS . 'products' . DS . 'Laptop.php';
        require_once ROOT . DS . 'mvc' . DS . 'models'.  DS . 'products' . DS . 'PC.php';
        require_once ROOT . DS . 'mvc' . DS . 'models'.  DS . 'products' . DS . 'ComputerMouseProducts.php';

        $check = TypeProductsServices::checkType($product_id);
				$service = new PCServices();

        if($check == Type::PC) {
            $service = new PCServices();
        }
        elseif($check == Type::LAPTOP) {
            $service = new LaptopServices();
        }
        else {
            $service = new ComputerMouseProductsServices();
        }

				$product = $service->get($product_id);
				include ROOT . DS . 'mvc' . DS . 'views' . DS . 'details.php';
    }
}
