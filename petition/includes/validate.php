<?php

	// Validate the Body of Text, Remove any HTML elements
	function validate_body($body) {
	
		if(strlen($body) <= 1000) {
			return TRUE;
		}
		
		else {
			return FALSE;
			}
	
	}
	
	function validate_name($name) {
	
		if(strlen($body) <= 60) {
			return TRUE;
		}
		
		else {
			return FALSE;
			}
	
	}
	
	
?>