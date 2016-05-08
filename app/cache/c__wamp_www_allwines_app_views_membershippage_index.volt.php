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
<li id="menu-item-2230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2230"><a href="http://localhost/allwines/membershippage/">Member Page</a></li>
</ul></div>	</div>
</div>
<div id="main">
<div id="content">
	
	
<p>
	Membership Page
</p>

<div style="text-align:left;">

<h2>Register using this form</h2>

<?php echo $this->tag->form('signup/register') ?>

<p>
		<label for="name">ID</label>
		<?php echo $this->tag->textField("ID") ?>
	</p>

	<p>
		<label for="name">First Name</label>
		<?php echo $this->tag->textField("firstname") ?>
	</p>
<p>
		<label for="name">Last Name</label>
		<?php echo $this->tag->textField("lastname") ?>
	</p>
	<p>
		<label for="name">E-Mail</label>
		<?php echo $this->tag->textField("email") ?>
	</p>

<p>
<label for="name">Comment</lable>
<?php echo $this->tag->textField("comment") ?>
</p>

	<p>
		<?php echo $this->tag->submitButton("Register") ?>
	</p>

</form>
</div>
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