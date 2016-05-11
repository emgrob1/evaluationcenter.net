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
	$getHeader->getHeader();
	
	?>
	<body >
<div id="wrapper">
<div id="header">
<div id="headerbanner"><a href="http://evangrob.com/allwines/"><img src="http://evangrob.com/allwines/images/banner1.png" width="1200" height="125" /></a></div>
<?php
$menu = new MenuController();
$menu->getMenu();
?>

<div id="main">
<div id="content">
	
	
<p>
	List of Members
</p>
<div style="text-align:left;">
{% for memberships in membership%}

First Name: {{memberships.firstname}}<br> Last Name: {{memberships.lastname}}<br> Email: {{memberships.email}}<br> Comment: {{memberships.comment}}<br><br>


{% endfor %}
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