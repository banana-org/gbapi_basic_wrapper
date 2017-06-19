<?php

include("../gbapi_basic_wrapper.php");

/*
A "multicall" to the GB API, returning data 
on multiple submissions in a single call
*/

$_aItemTypes = array(
	"Skin",
	"Map"
);

$_aItemIds = array(
	155524,
	32455
);

$_aFields = array(
	array(
		"name",
		"text"
	),
	array(
		"name",
		"userid"
	),
);

$_aApiResponse = GBAPI_GetMulti($_aItemTypes,$_aItemIds,$_aFields);

echo "<pre>";
print_r($_aApiResponse);
echo "</pre>";