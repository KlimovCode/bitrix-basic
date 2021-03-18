<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РЎС‡РµС‚ РїРѕР»СЊР·РѕРІР°С‚РµР»СЏ");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.account",
	"",
	Array(
		"SET_TITLE" => "Y" 
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>