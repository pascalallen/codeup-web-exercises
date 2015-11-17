<?php
	function inputHas($key){
		return isset($_REQUEST[$key]);	
	}

	function inputGet($key){
		if(inputHas($key)){
			return escape($_REQUEST[$key]);
		}
		return null;
	}

	function escape($input){
		return strip_tags(htmlspecialchars($input));
	}

?>