<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- include defaults! -->
 <?php 
include "lgd.php";
lgd_init ("index");
?>
  </head>


<body onload="javascript: lgd_set_search (); lgd_finish ('go');">
 <?php 
	// include "ui.php";
	// banner () 
?> 
<!-- <div class="mui-appbar" >
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
	</div> -->

<!-- 	 	<div class="mui-textfield"
 			style="width: 70%; margin-left: 5.3em;margin-top: 0;vertical-align: 0;" >
		
    	<input onkeydown="javascript: trigger_search (e)" id="search" type="text" placeholder="I want to ..." >
    	<button style="margin-top: 1.2em" 
	   			class="mui-btn mui-btn--raised mui-btn--danger"
	   			onclick="javascript: query ()">
	   			Go, Dil!</button>
    	</div> -->

		<?php ui_search_entry  ("go",1 ) ?>
		<?php
	include "search.php";
	include "util.php";
	include "providers/wikipedia.php";

?>
<?php
	// $_GET ["q"] = "albert einstein";
	$query = $_GET ["q"];
	/* $data = new DataSource ();
	add_card ($data -> get ($query)); */

	// Jess! Breadcrumbs!

	// Am i cool or what
	// util_message_box ($query);
	search ($query);
?>

</body>