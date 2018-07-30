<?php
include "ui.php";

function lgd_init ($module) {
    // set user agent
    // apparently this is a good thing
    ini_set('user_agent', 'LetsGoDil/1.1 (http://letsgodil.com/; git@shaji.in) github.com/djshaji/letsgodil/1.4');

    // Hello, world!
    print ("<title>Let's Go, Dil!</title>");

    // default font is now Montserrat
    // apparently!
    print ('<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">');
    
    // include default js/css
    print (
        '
         <link href="mdl/material.lgd.css" rel="stylesheet" type="text/css" />
        <script src="mdl/material.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="lgd.js"></script>
        <script src="main.js"></script>
        ');
}

?>