<?php

class MembershipController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$this->view->membership = membership::find();
    }

}

