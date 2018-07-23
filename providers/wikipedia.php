<?php
include "../search.php";
include "../util.php";
class  Wikipedia extends Provider {
    public function search ($query) {
        $qs = "https://en.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=" . $query . "&utf8=";
        $result = util_get_url_as_json ($qs);
       print ($result ["query"] ["searchinfo"]["totalhits"]);
        // print (gettype ($result));
    }
}

$w = new Wikipedia () ;
$w -> search ("Albert");
?>