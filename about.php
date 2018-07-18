<?php
include "ui.php";
?>

<!doctype html>
<html>
<title>About Let's Go, Dil!</title>
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
<body style="background-image: url(pangong.jpg);">
<!--   <div class="mui-appbar" >
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
<?php banner () ?>
<br>
<div class="mui-container-fluid" style="opacity: .82; border-radius: 20px">
<div class="mui-panel" style="border-radius: 20px">
<span >
Where do you want to go? What do you want to do? What do you want to be?
</span>
<br><br>
<div class="mui--text-headline">
<span class="mui--text-accent"> 
What are you waiting for? </span>
</div>
<br>
<i>The Time is Now. Your Time is Now.</i>
<br><br>
What are you waiting for? You have only one life to live. Do what you want to do. Be what you want to be. For once in your life, listen to your heart, and say:
<br><br>
<div class="mui--text-headline">
<span class="mui--text-danger">
<strong>Let's Go, Dil!</strong>
</span>
</div>
<br>
<div>
Find ways to to do what your heart wants to. Find resources to make your dreams happen. Find what you need to make those dreams a reality, which you had thought would never, could never, come true.
<br><br>
Connect with others who share the same dreams as you. Find help, or help others. Get inspired. Plan a trip, learn a new skill, get a new hobby, visit a new place, or simply live the life that you always wanted to.
<br><br>
That's the life that you were born to live. Time is running out. <span class="mui--text-danger"><b>Let go of that fear.</b></span>
<br><br>
<span class="mui--text-accent">
<b><em>So, what do you want to do?</em></b></span>
</div>
<div class="mui-textfield" >
<input   id="search" type="text" placeholder="I want to ...">
<button  onclick="javascript: query ()" class="mui-btn mui-btn--raised mui-btn--danger">
Let's Go, Dil!
</button>
</div>
</div>
</div>
<div class="mui-container-fluid" style="border-radius: 20px; opacity: .82;">
<div class="mui-panel" style="border-radius: 20px">
<button onclick="window.location.replace ('https://github.com/djshaji/letsgodil')" class="mui-btn mui-btn--raised mui-btn--danger">
<img src="github.png">
</button>
<span style="padding:10px" class="mui--text-danger" > <b>#LetsGD is  an open source project.</b>
Download the source on 
<a href="https://github.com/djshaji/letsgodil"> <b>Github</b>.</a>
</span>
</div>
</div>

</body>