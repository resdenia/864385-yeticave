<?php
	function include_template($name, $data) {
	    $name = 'templates/' . $name;
	    $result = '';
	
	    if (!file_exists($name)) {
	        return $result;
	    }
	
	    ob_start();
	    extract($data);
	    require($name);
	    $result = ob_get_clean();
	
	    return $result;
	}
	
/*
	function current_price($price_str){
		$price_str =ceil($price_str);	
		$price_str = number_format($price_str, 0, ' ', ' ');
				
		return $price_str;
	}
*/
?>