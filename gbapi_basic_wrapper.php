<?php

define("API_URL","http://api.gamebanana.com");

function GBAPI_Get($p_sItemType,$p_sItemId,$p_aFields,$p_bReturnObject=false)
{
	$_sApiCall = API_URL."/Core/Item/Data";
	$_sApiCall .= "?itemtype=$p_sItemType";
	$_sApiCall .= "&itemid=$p_sItemId";
	$_sApiCall .= "&fields=".implode(",",$p_aFields);
	
	if ($p_bReturnObject)
	{
		$_sApiCall .= "&return_object=1";
	}
	
	$_jsonResponse = file_get_contents($_sApiCall);
	
	return json_decode($_jsonResponse);
}

function GBAPI_GetMulti($p_aItemTypes,$p_aItemIds,$p_aFields,$p_bReturnObject=false)
{
	$_sApiCall = API_URL."/Core/Item/Data";
	
	foreach ($p_aFields as $_iKey => $_aFieldsGroup)
	{
		$p_aFields[$_iKey] = implode(",",$_aFieldsGroup);
	}
	
	$_sApiCall .= "?".http_build_query(array(
		"itemtype" => $p_aItemTypes,
		"itemid" => $p_aItemIds,
		"fields" => $p_aFields,
	));
	
	if ($p_bReturnObject)
	{
		$_sApiCall .= "&return_object=1";
	}
	
	$_jsonResponse = file_get_contents($_sApiCall);
	
	return json_decode($_jsonResponse);
}