<!--
    Start of something new.
    Losing my php/js/css/html5 *web*
    virginity here!
    
    Loving learning something new.

	Our default color #dd2c00
	material deep-orange-A700
	mdl-color-text--deep-orange-A700
	mdl-color--deep-orange-A700
-->

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </script>

 <!-- include defaults! -->
 <?php 
include "lgd.php";
lgd_init ("index");
?>

  </head>
  <body onload="javascript: lgd_finish ('index');">
   <div 
    		align="center"
    		style="width: 100%">
    <div 
    		align="center"
    		style="margin-top: 3em">
		<a href="javascript: set_titles ()" >        
        <img 	src="logo.png" 
        		alt="Go Dil">
        </a>
    </div>
    <div 
    		align="center"
    		style="margin-top: 1.3em">
    	<h1 
    			style="text-align: center;" id="title">
    		Let's Go, Dil!
</h1>
	</div>
    <div 
    		align="center"
    		style="margin-top: -1em">
    	<label
    			style="text-align: center; 
				font-size: 128%;" id="subtitle">
    		Where do you want to go today?
    	</label>
    </div>
	<!-- <form action="javascript: lgd_query ()">
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
		style="width: 70%">
		<input class="mdl-textfield__input" type="text" id="search" width="70%">
		<label class="mdl-textfield__label" for="search">I want to ...</label>
		</div>
	</form>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"
		onclick="javascript: query ('spin')"
		id="button1" >
		Go, Dil!
		</button>
	
		<div style="padding: 20px; visibility:hidden" id="spin">
		<div class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
	</div> -->

<?php ui_search  ("index"); ?>


<div align="right" style="padding: 20px">
		<span  >
		<a href="about"> About </a>
		</span>
	</div>

</div>
  </body>
</html>
