<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Р РµРіСѓР»СЏСЂРЅС‹Рµ РїР»Р°С‚РµР¶Рё");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.subscribe",
	"",
	Array(
		"SEF_MODE" => "N", 
		"PER_PAGE" => "20", 
		"SET_TITLE" => "Y" 
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>