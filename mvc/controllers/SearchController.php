<?php
require ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'Controller.php';

class SearchController implements Controller {
	public function __render(){
        require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'search.php';
    }
}
