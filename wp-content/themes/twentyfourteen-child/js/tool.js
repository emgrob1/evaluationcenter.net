$(document).ready(function (){
	"user strict";
 
	 
	 $("#region_west_usa").click(function(){
	        	
	        	var loadUrl = 'http://localhost/all-wines.com/?page_id=118'; 			
	       	jQuery("#ajax").load(loadUrl);
	 }); 

	 $("#region_east_usa").click(function(){
	        	
	        	var loadUrl = 'http://localhost/all-wines.com/?page_id=149'; 			
	       	jQuery("#ajax").load(loadUrl);
	 }); 
  $(".alignnone").click(function(){
	        	
	        	var loadUrl = 'http://localhost/all-wines.com/?page_id=149'; 			
	       	jQuery("#ajax").text("");
	 }); 
	 
 });