<?php

function add_card ($card) {
	echo "<div class=\"mui-panel\" 
			style=\"margin-bottom: 1em\"\">
	<div style=\"display:inline; \">
    <table class=\"mui-table\" 
		style=\"display:inline;
				vertical-align: 220%;
				margin-left: 1em
				height:inherit\">
		<thead>
		<tr><th>
		<img 	src=\"$card->thumb\" 
			alt=\"$card->name\"
			style=\"margin-top: .5em; margin-left: .5em; height: 3em\"
			>
		
		</th>		
		<th>

		<table width=\"100%\">
		<col style=\"width: 25%\">
		
		<thead>
		<tr><th>
		
		<span class=\"mui--text-headline\">		
			$card->name</span>
		</th>
		</tr>
		<tr>
		<td>
			<span class=\"mui--text-body1\" >
			$card->description
			</span>
		</td>
		</tr>
		</thead>
		</table>
		</th>		
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
		</td>
		<td>
			<span class=\"mui--text-caption\" >
			$card->info
			<br><br>
			<span class=\"mui--text-caption\" >
			<a href=\"$card->url\">More Info</a>
			</span>
		</td>
		</tr>
		</tbody>
	</table>
	</div>	
	</div>";

}

class DataCard {
	public $name = null ;
	public $description = null;
	public $thumb = null;
	public $url = null;
	public $info = null ;
	public $provider = null;
} 

class DataSource {
	function get_patrick ($query) {
		$card = new DataCard ();
		$card -> name = "Patrick Jane";
		$card -> description = "He is the Mentalist";
		$card -> url = "shaji.in";
		$card -> provider = "shaji.in";
		$card -> thumb = "logo.png";
		$card -> info = "Patrick Jane is an independent consultant with the California Bureau of Investigation (CBI) who has a remarkable track record for solving serious crimes by using his sharp skills of observation.";

		return $card;
	}
	
	function get ($query) {
		$card = new DataCard ();
		$card -> name = $query;
		$card -> description = "Nothing found!";
		$card -> url = null;
		$card -> provider = null;
		$card -> thumb = "logo.png";
		$card -> info = "Nothing found for " . $query . "! Sorry!";

		return $card;

	}
}


class Query {
	public $query = null ;
	public $title = null ;
	public $description = null;
	public $thumb = null;
	public $id = null ;
	public $url = null;
	public $info = null ;
	public $provider = null;
	public $error = null;
	public $error_code = null ;
	public $timestamp = null;
} 

class Provider {
	public function search ($query) {
		return null ;
	}
}

?>