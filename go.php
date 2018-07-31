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
	include "ui.php";
	ui_header ('go');
?> 

<?php ui_search  ("go") ?>

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