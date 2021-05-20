<?php
class DefaultController {
  /*include header*/
  public function __header(){

  }

  /*include footer*/
	public function __footer(){
        include ROOT . DS . 'mvc' . DS . 'views' . DS . 'footer.php';
    }
}
