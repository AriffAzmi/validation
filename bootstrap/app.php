<?php

require __DIR__."/vendor/autoload.php";

use Module\Validator;

function validate()
{
	return (new Validator());
}