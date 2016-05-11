<?php

class GrapesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->grapes = Grapes::find();
    }

}

