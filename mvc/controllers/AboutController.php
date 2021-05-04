<?php
require ROOT . DS . 'mvc' . DS . 'controllers' . DS . 'Controller.php';

class AboutController implements Controller{
    public function __render(){
        require_once ROOT . DS . 'mvc' . DS . 'views' . DS . 'about.php';
    }
}
