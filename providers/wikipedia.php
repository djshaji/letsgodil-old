<?php
include "../search.php";
include "../util.php";
class  Wikipedia extends Provider {
    function print_query ($query) {
        print ($query -> $title);
    }

    public function search ($query) {
        $qs = "https://en.wikipedia.org/w/api.php?action=query&list=search&format=json&inprop=url&srsearch=" . $query . "&utf8=";
        $result = util_get_url_as_json ($qs);
    //    print ($result ["query"] ["searchinfo"]["totalhits"]);
        
       foreach ($result ["query"]["search"] as &$res) {
            $q = new Query ();
            $q -> query = $query;
            $q -> title = $res ["title"];
            $q -> id = $res["pageid"];
            $q -> info = $res["snippet"];
            $q -> provider = "Wikipedia";
            $q -> timestamp = $res ["timestamp"];
            
            $qim = "https://en.wikipedia.org/w/api.php?action=query&prop=info|images&inprop=url&pageids=" . $res["pageid"];
            $qres = util_get_url_as_json ($qim);
            $q -> url = $qres ["query"]["pages"][$q -> id]["fullurl"];
            add_card_legacy ($q);
       }
    }
}

/* Left this here from testing and spent a good half
    hour trying to figure out why all my searches
    returned results for good 'ol Alby

$w = new Wikipedia () ;
$w -> search ("Albert"); */
?>