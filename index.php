<!--
    Start of something new.
    Losing my php/js/css/html5 *web*
    virginity here!
    
    Loving learning something new.
-->

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="mui.min.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="mui.min.js"></script>
    <script src="main.js">
    </script>

  </head>
  <body>
   <div class="mui-container-fluid"
    		align="center"
    		style="width: 100%">
    <div class="mui-container-fluid"
    		align="center"
    		style="margin-top: 3em">
		<a href="javascript: set_titles ()" >        
        <img 	src="logo.png" 
        		alt="Go Dil">
        </a>
    </div>
    <div class="mui-container-fluid"
    		align="center"
    		style="margin-top: 1.3em">
    	<label class="mui--text-display2" 
    			style="text-align: center;" id="title">
    		Let's Go, Dil!
    	</label>
	</div>
    <div class="mui-container-fluid"
    		align="center"
    		style="margin-top: .5em">
    	<label class="mui--text-body1" 
    			style="text-align: center; 
    			font-size: 128%;" id="subtitle">
    		Where do you want to go today?
    	</label>
    </div>
 	<div class="mui-textfield"
 			style="width: 70%">
    	<input id="search" type="text" placeholder="I want to ...">
	   	<button style="margin-top: 1.2em" 
	   			class="mui-btn mui-btn--raised mui-btn--danger"
	   			onclick="javascript: query ()">
	   			Go, Dil!</button>
  	</div>
	<div align="right" class="mui-container-fluid" style="padding: 20px">
		<span  class="mui--text-light-secondary">
		<a href="about"> About </a>
		</span>
	</div>

</div>
  </body>
</html>
