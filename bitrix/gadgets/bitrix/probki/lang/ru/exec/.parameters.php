<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$arCity = Array();

$arCity["c213"] = "РњРѕСЃРєРІР° (Р РѕСЃСЃРёСЏ)";
$arCity["c2"] = "РЎР°РЅРєС‚-РџРµС‚РµСЂР±СѓСЂРі (Р РѕСЃСЃРёСЏ)";
$arCity["c54"] = "Р•РєР°С‚РµСЂРёРЅР±СѓСЂРі (Р РѕСЃСЃРёСЏ)";
$arCity["c143"] = "РљРёРµРІ (РЈРєСЂР°РёРЅР°)";


$arParameters = Array(
		"PARAMETERS"=> Array(
			"CACHE_TIME" => array(
				"NAME" => "Р’СЂРµРјСЏ РєРµС€РёСЂРѕРІР°РЅРёСЏ, СЃРµРє (0-РЅРµ РєРµС€РёСЂРѕРІР°С‚СЊ)",
				"TYPE" => "STRING",
				"DEFAULT" => "3600"
				),
		"SHOW_URL" => Array(
				"NAME" => "РџРѕРєР°Р·С‹РІР°С‚СЊ СЃСЃС‹Р»РєСѓ РЅР° РїРѕРґСЂРѕР±РЅСѓСЋ РёРЅС„РѕСЂРјР°С†РёСЋ",
				"TYPE" => "CHECKBOX",
				"MULTIPLE" => "N",
				"DEFAULT" => "N",
			),
		),
		"USER_PARAMETERS"=> Array(
			"CITY"=>Array(
				"NAME" => "Р“РѕСЂРѕРґ",
				"TYPE" => "LIST",
				"MULTIPLE" => "N",
				"DEFAULT" => "c213",
				"VALUES"=>$arCity,
			),
		),
	);

?>
