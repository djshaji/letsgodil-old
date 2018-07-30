<?php
function search_box1() {
	print ('
	<div class="mui-container-fluid">
	<div class="mui-textfield"
	style="width: 70%; margin-left: 5.3em;margin-top: 0;vertical-align: 0;" >

<input id="search" type="text" placeholder="I want to ..." >
<button style="margin-top: 1.2em" 
		  class="mui-btn mui-btn--raised mui-btn--danger"
		  onclick="javascript: query ()">
		  Go, Dil!</button>
</div>
</div>
');

}

function banner () {
    print ('
        <div class="mui-appbar" >
        <a href="index" >
        <img 	src="logo_small.png" 
                alt="Go Dil"
                style="margin-top: .5em; margin-left: .5em">
        
                </a>
        
        <label 	class="mui--text-display1" 
                id="title"
                style="margin-left: .3em;margin-top: 0;vertical-align: 30%; "
                >
            Let\'s Go, Dil!
        </label>
        </div>
        ');


}

function ui_search_entry ($module, $box_no) {
    $x = parse_url ($_GET);

    print ('
    <form action="javascript: lgd_query ('. $x['path'] . ')">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"
    style="width: 70%">
    <input class="mdl-textfield__input" type="text" id="search" width="70%">
    <label class="mdl-textfield__label" for="search">I want to ...</label>
    </div>
</form>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect"
    onclick="javascript: lgd_query ('. $x['path'] . ')"
    id="button' . $box_no . '">
    Go, Dil!
    </button>
    <span style="visibility:visible;margin-left:20px;vertical-align:-50%" id="spinner' . $box_no . '" class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></span>
    ');
//<div style="padding: 20px; visibility:hidden" id="spin">
}

function ui_header ($module) {
    print ('
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
            <!-- Title -->
            <a href="http://letsgodil.com">
            <img src="logo_small.png" style="margin-right:12px;margin-left:-45px"></a>
            <span class="mdl-layout-title">
                <h4>Let\'s Go, Dil!</h4>
            </span>
            </div>
        </header>

    ');
}

function ui_footer ($module) {
    // close the header!
    print ('</div>');
}
?>
