<?php

include("../gbapi_basic_wrapper.php");

/*
A standard call to the GB API, returning data on one submission
*/

$_sItemType = "Skin";
$_sItemId = 155524;
$_aFields = array(
	"name",
	"Url().sGetProfileUrl()"
);

$_aApiResponse = GBAPI_Get($_sItemType,$_sItemId,$_aFields);

echo "<pre>";
print_r($_aApiResponse);
echo "</pre>";