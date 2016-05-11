<?php
/*
 * Developed with the power of phalcon php 2.0
 * Author: Evan Grob
 * Date: May 8, 2016
 */
?>
<!-- Developed with the power of phalcon php 2.0
 * Author: Evan Grob
 * Date: May 8, 2016 -->
<!DOCTYPE html>
<html>
	<?php
	$getHeader = new HeaderController();
	$getHeader->getHeaderSub();
	
	?>
	<body >
<div id="wrapper">
<div id="header">
	<div id="label">all-wines.com</div>
<div id="headerbanner"><img src="http://localhost/allwines/images/banner1.png" width="900" height="118" /></div>
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
<li id="menu-item-2230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2230"><a href="http://localhost/allwines/member-page/">Member Page</a></li>
</ul></div>	</div>
</div>
<div id="main">
<div id="content">
	
	
	
<p>
	This is the Red Wines area
	
	
</p>

<?php foreach ($grapes as $grape) { ?>
<?php if ($grape->Color == 'Red') { ?>
<div class="spacer" style="height:80px;">
<div style="font-weight:bold;"><?= $grape->Name ?> -  <?= $grape->Color ?></div> 
 <div id="grapeImage"  style="float:left;margin-left:25px;"><img src="http://localhost/allwines/images/<?= $grape->Image ?>" width="50" height ="50" style="margin-right:8px;"></div>


  

<div style="text-align:left;">
  <?= $grape->Description ?>
  </div>
  <br>
  
 </div>
 <?php } ?>
	<?php } ?>


</div>
</div>
<div id="sidebar">
	
<h2 >Additional Information</h2>


 
</div>
<?php
	$getFooter = new FooterController();
	$getFooter->getFooter();
	
	?>

</div>
</body>

	
	
</html>