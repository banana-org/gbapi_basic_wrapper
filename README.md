# gbapi_basic_wrapper

A basic GameBanana API (http://api.gamebanana.com) wrapper written in PHP.

# Installation

Include gbapi_basic_wrapper.php in your PHP script:

`include("gbapi_basic_wrapper.php");`

# Functions

Return data on one submission:

`GBAPI_Get ( string $p_sItemType, int $p_sItemId, array $p_aFields [, bool $p_bReturnObject] )`

Return data on multiple submissions:

`GBAPI_GetMulti ( array $p_aItemTypes, array $p_aItemIds, array $p_aFields [, bool $p_bReturnObject] )`
