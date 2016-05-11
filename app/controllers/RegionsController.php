<?php

class RegionsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->regions = Regions::find();
    }

}

