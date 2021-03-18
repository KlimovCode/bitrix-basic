<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РљР°Р»РµРЅРґР°СЂСЊ СЃРѕР±С‹С‚РёР№");
?>В  <?$APPLICATION->IncludeComponent(
	"bitrix:calendar.grid",
	"",
	Array(
		"CALENDAR_TYPE" => "events",
		"ALLOW_SUPERPOSE" => "N",
		"ALLOW_RES_MEETING" => "N"
	),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>