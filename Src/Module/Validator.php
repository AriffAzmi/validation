<?php 

namespace Module;

/**
* @package Validator class
* @author Ariff Azmi
* @version 1.0
*/
class Validator
{
	
	function __construct()
	{
		return $this;
	}

	public function data($method=null,$keys=null)
	{
		$response="";
		foreach ($keys as $field) {

			if ( (!isset($method[$field])) || empty($method[$field]) ) {
		        
		        $flag=true;
		        $response[] = [
		        	'status' => false,
		        	"message" => "".$field." is required and cannot be empty"
		        ];
				
		    }
		}

	    return $response;
	}
}