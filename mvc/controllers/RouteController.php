<?php

class RouteController {
    private $_url;
    private $_dispath;
    
    function __construct($url) {
        $this->_url = $url;
        
        self::parsingURL();
    }
    
    function parsingURL() {
        if(strcmp($this->_url, "/") == 0){ // call home page if path is '/'
            require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'HomeController.php';
            $this->_dispath = new HomeController();
            // require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'home.php';
            return;
        }

        $urlArray = explode("/", $this->_url);
        $controller = $urlArray[0]; array_shift($urlArray);
        
        $controller = ucwords($controller);
        $controller .= "Controller"; // example : AboutController, ContactController,...
        
        require_once ROOT . DS . 'mvc' . DS . 'controllers' . DS . $controller . '.php';
        $this->_dispath = new $controller();
    }
    
    function show() {
        $this->_dispath->__render();
    }
}
