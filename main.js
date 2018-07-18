function placeholder () {
    alert ("This will do something, someday!") ;
}

function set_title () {
	var titles = [
		"Let\'s Go, Dil!",
		"#LetsGD",
		"Let\'s, Go Dil!",
		"Let\'s Go Dil!"
	]
	
	document.getElementById("title").innerHTML = titles [Math.floor(Math.random() * Math.floor(4))];
}

function set_subtitle () {
	var subtitles = [
		"Where do you want to go today?",
		"Where does your heart want to go today?",
		"Listen to your Heart!",
		"Let\'s Live, Let\'s Go Dil!" 
	]	
	
	document.getElementById("subtitle").innerHTML = subtitles [Math.floor(Math.random() * Math.floor(4))];
}

function set_titles () {
	set_title ();
	set_subtitle ();
}

function query () {
	var q = document.getElementById("search").value;
	var uri = "go.php?q=" + q;
	window.location.replace (uri);
}

function set_search() {
	document.getElementById("search").value = window.location.href.substr( window.location.href.indexOf("?") + 3)
}

function trigger_search (e) {
    if (e.keyCode == 13)
    {
		query ();
        return false;
    }
    return true;
}