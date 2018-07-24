<?php

function lgd_init ($module) {
    // set user agent
    // apparently this is a good thing
    ini_set('user_agent', 'MyCoolTool/1.1 (https://example.org/MyCoolTool/; MyCoolTool@example.org) BasedOnSuperLib/1.4');


    // default font is now Montserrat
    // apparently!
    print ('<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">');
    
    // include default js/css
    print (
        ' <link href="mui.min.css" rel="stylesheet" type="text/css" />
        <script src="mui.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <script src="main.js"></script>
        ');
}

?>