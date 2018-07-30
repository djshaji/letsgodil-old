function lgd_spinners (show) {
    var s1 = document.getElementById ("spinner1") ;
    var s2 = document.getElementById ("spinner2") ;
    if (show ) {
        if (s1) {
            s1.style.visibility = "visible";
        }

        if (s2) {
            s2.style.visibility = "visible";
        }
    }
    else {
        if (s1) {
            s1.style.visibility = "hidden";
        }

        if (s2) {
            s2.style.visibility = "hidden";
        }
    }
}

function lgd_set_title () {
	var titles = [
		"Let\'s Go, Dil!",
		"#LetsGD",
		"Let\'s, Go Dil!",
		"Let\'s Go Dil!"
	]
	
	document.getElementById("title").innerHTML = titles [Math.floor(Math.random() * Math.floor(4))];
}

function lgd_set_subtitle () {
	var subtitles = [
		"Where do you want to go today?",
		"Where does your heart want to go today?",
		"Listen to your Heart!",
		"Let\'s Live, Let\'s Go Dil!" 
	]	
	
	document.getElementById("subtitle").innerHTML = subtitles [Math.floor(Math.random() * Math.floor(4))];
}

function lgd_set_titles () {
	lgd_set_title ();
	lgd_set_subtitle ();
}

function lgd_query (id) {
	var q = document.getElementById("search").value;
	if (q == '') {
		alert ("Enter a search term!");
		return;
	}

    lgd_spinners (true);

    if (id != null) {
		document.getElementById (id).style.visibility = "visible" ;
		componentHandler.upgradeElement (document.getElementById (id));
	}

	var uri = "go.php?q=" + q;
	window.location.replace (uri);
}

function lgd_set_search() {
	// This needs to be fixed!
	document.getElementById("search").value = window.location.href.substr( window.location.href.indexOf("?") + 3).replace ("%20", " ");
	document.title = "#Lets GD:  " . concat (window.location.href.substr( window.location.href.indexOf("?") + 3)).replace ("%20", " ");
}


function lgd_fortune_change () 
{
    if (this.readyState == 4 && this.status == 200)
    {
        text = this.responseText
        text = text .replace(/(\r\n|\\n|\r)/gm,"<br>").replace(/(\\t)/gm,"    ").slice (1, -1).replace(/(\\")/gm,'"')
        document.getElementById("fortune").innerHTML = text
    }
}

function lgd_fortune ()
{
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = fortune_change
    xmlhttp.open ("GET", "http://shajikhan.in/api/fortune", true)
    xmlhttp.send ()
}

function lgd_finish (module) {
    lgd_spinners (false);
}