<title>
Shaji API Gateway
</title>

<html>
<body>
<?php
    $app = $_GET['app'];
    $arg = $_GET['arg'];

    $cmd = "../bin/" . $app . " " . $arg ;
    echo `$cmd` ;
?>
</body>
</html>

