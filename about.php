<?php
// include "ui.php";
?>

<!doctype html>
<html>
<title>About Let's Go, Dil!</title>
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

<body style="background-image: url(pangong.jpg);"
  onload="javascript: lgd_finish ('about');">
<?php ui_header ('about') ; ?>
<div class="mdl-grid">

  <div class="mdl-card" 
    style="opacity: .82; border-radius: 20px;
      width:90%;padding:20px
      position:absolute; margin:20px;height:100%
    ">

    <div  
      style="opacity:1;border-radius: 20px;
        width:96%;margin:20px;
        max-width:100%;max-height:100%;height:100%
        ">
      <span >
      Where do you want to go? What do you want to do? What do you want to be?
      </span>
      <br><br>
      <div class="mdl-card__title">
      <span class="mdl-card__title-text"> 
      What are you waiting for? </span>
      </div>
      <br>
      <i>The Time is Now. Your Time is Now.</i>
      <br><br>
      What are you waiting for? You have only one life to live. Do what you want to do. Be what you want to be. For once in your life, listen to your heart, and say:
      <br><br>
      <div class="mdl-card__title">
      <span class="mdl-card__title-text mdl-color-text--red-A700">
      <strong>Let's Go, Dil!</strong>
      </span>
      </div>
      <br>
      Find ways to to do what your heart wants to. Find resources to make your dreams happen. Find what you need to make those dreams a reality, which you had thought would never, could never, come true.
      <br><br>
      Connect with others who share the same dreams as you. Find help, or help others. Get inspired. Plan a trip, learn a new skill, get a new hobby, visit a new place, or simply live the life that you always wanted to.
      <br><br>
      That's the life that you were born to live. Time is running out. <span class="mui--text-danger"><b>Let go of that fear.</b></span>
      <br><br>
      <span class="mdl-color-text--deep-orange-A700">
      <b>So, what do you want to do?</b></span>
      
  
<?php ui_search_entry  ("about", 1); ?>

		
</div>
</div>
<div class="mdl-card" style="border-radius: 20px; opacity: .82;margin:20px;width:43%">
<button style="border-radius: 20px;margin:10px" onclick="window.location.replace ('https://github.com/djshaji/letsgodil')" class="mdl-buttonmdl-js-button mdl-button--raised mdl-button--colored">
<img src="github.png">
</button>
<span style="padding:10px"> <b>#LetsGD is  an open source project.</b>
Download the source on 
<a href="https://github.com/djshaji/letsgodil"> <b>Github</b>.</a>
</span>
</div>

  <div class="mdl-card" style="border-radius: 20px; opacity: .82;margin:20px;width:43%">
    <button onclick="window.location.replace ('http://shajikhan.in')" class="mdl-buttonmdl-js-button mdl-button--raised mdl-button--colored"
      style="border-radius: 20px;margin:10px;height:36px; font-family: Montserrat;font-size: 106%">
      <b>👨‍💻 Developer</b>
    </button>
    <span style="padding:10px">
      <b><span class="mdl-color-text--deep-orange-A700">Let's Go Dil</span></b> is developed by <a href="http://shajikhan.in"><b>Shaji</b></a>. 
        Visit his <a href="http://shajikhan.in"><b>website</b></a>, or follow him on
        <a style="text-decoration: none" href="https://plus.google.com/+ShajiDJ"><b>Google+</b></a>.
    </span>
</div>
 <!-- grid -->
</div> 
<?php ui_footer ('about'); ?>

</body>