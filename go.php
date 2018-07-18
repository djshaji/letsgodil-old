<?php
	include "search.php";
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="mui.min.css" rel="stylesheet" type="text/css" />
    <script src="mui.min.js"></script>
    <script src="main.js">
    </script>

  </head>


<body onload="javascript: set_search ()">
<div class="mui-appbar" >
	<a href="http://letsgodil.com" >
    <img 	src="logo_small.png" 
			alt="Go Dil"
			style="margin-top: .5em; margin-left: .5em">
	</a>
	
	<label 	class="mui--text-display1" 
			id="title"
			style="margin-left: .3em;margin-top: 0;vertical-align: 30%"
			>
		Let's Go, Dil!
	</label>

	 	<div class="mui-textfield"
 			style="width: 70%; margin-left: 5.3em;margin-top: 0;vertical-align: 0;" >
    	<input onkeydown="javascript: trigger_search (e)" id="search" type="text" placeholder="I want to ..." style="color: #ffffff; ">
    	<button style="margin-top: 1.2em" 
	   			class="mui-btn mui-btn--raised mui-btn--danger"
	   			onclick="javascript: query ()">
	   			Go, Dil!</button>
    	</div>
</div>
<?php
	$query = $_GET ["q"];
	$data = new DataSource ();
	add_card ($data -> get ($query));
?>
</body>