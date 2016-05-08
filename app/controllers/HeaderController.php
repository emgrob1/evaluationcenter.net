<?php

class HeaderController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
	
	public function getHeader()
	{
		
		?>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>all-wines.com</title>
	</head>
	
	<?php
	
	define("ROOT_PATH", "http://localhost/allwines/");
define("IMAGES_DIR", ROOT_PATH . "images");
	}
	public function getHeaderSub()
	{
		?>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<title>all-wines.com</title>
	</head>
	<?php
	define("ROOT_PATH", "http://localhost/allwines/");
define("IMAGES_DIR", ROOT_PATH . "images");
	}
}

