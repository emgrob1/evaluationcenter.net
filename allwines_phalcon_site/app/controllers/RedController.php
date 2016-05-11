<?php
use \Phalcon\Services;
class RedController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->grapes = Grapes::find();
    }

}

