<?php

class RouteController {
    private $_url;
    private $_dispath;
    
    function __construct($url) {
        $this->_url = $url;
        
        self::parsingURL();
    }
    
    function parsingURL() {
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
