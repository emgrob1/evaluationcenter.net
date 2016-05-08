<?php

class WhiteWinesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
$this->view->grapes = grapes::find();
    }

}

