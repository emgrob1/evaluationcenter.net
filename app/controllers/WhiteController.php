<?php
use Phalcon\Loader;

class WhiteController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->grapes = Grapes::find();
    }

}

