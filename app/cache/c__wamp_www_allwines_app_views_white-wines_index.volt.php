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
<div id="headerbanner"><a href="http://localhost/allwines/"><img src="http://localhost/allwines/images/banner1.png" width="1200" height="125" /></a></div>
<?php
$menu = new MenuController();
$menu->getMenu();
?>
<div id="main">
<div id="content">
	
	
	
<p>
	White Grapes
</p>

<?php foreach ($grapes as $grape) { ?>
<?php if ($grape->Color == 'White') { ?>
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