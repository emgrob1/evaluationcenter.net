<?php

class MenuController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

	public function getMenu()
	{
		?>
		<div id="menubar">
		<div class="menu-header-menu-container"><ul id="menu-header-menu" class="menu"><li id="menu-item-2219" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2219"><a href="http://localhost/allwines/">Home Page</a></li>
<li id="menu-item-2323" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2323"><a href="http://localhost/allwines/grapes/">Grapes</a>
<ul class="sub-menu">
	<li id="menu-item-2341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2341"><a href="http://localhost/allwines/red-wines/">Red Wines</a></li>
	<li id="menu-item-2340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2340"><a href="http://localhost/allwines/white-wines/">White Wines</a></li>
</ul>
</li>
<li id="menu-item-2233" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2222 current_page_item menu-item-2233"><a href="http://localhost/allwines/regions/">Regions</a></li>
<li id="menu-item-2231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2231"><a href="http://localhost/allwines/pairings/">Pairings</a></li>
<li id="menu-item-2232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2232"><a href="http://localhost/allwines/tastings/">Tastings</a></li>
<li id="menu-item-2230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2230"><a href="http://localhost/allwines/membershippage/">Member Page</a></li>
</ul></div>	</div>
</div>
		
		<?php
	}
}

