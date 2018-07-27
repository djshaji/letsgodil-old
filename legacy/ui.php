<?php
function search_box () {
	print ('
	<div class="mui-container-fluid">
	<div class="mui-textfield"
	style="width: 70%; margin-left: 5.3em;margin-top: 0;vertical-align: 0;" >

<input onkeydown="javascript: trigger_search (e)" id="search" type="text" placeholder="I want to ..." >
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
?>