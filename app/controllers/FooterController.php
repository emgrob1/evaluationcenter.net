<?php

class FooterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

	public function getFooter()
	{
		?>
		

<p style="text-align: left;">all-wines.com &copy; <?php  echo date("Y") ?>.  Developed by Evan Grob</p>

		<?php
	}

}

