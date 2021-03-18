<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Р¤РѕСЂРјР° РѕР±СЂР°С‚РЅРѕР№ СЃРІСЏР·Рё");
?><?$APPLICATION->IncludeComponent("bitrix:main.feedback", ".default", array(
	"USE_CAPTCHA" => "Y",
	"OK_TEXT" => "РЎРїР°СЃРёР±Рѕ, РІР°С€Рµ СЃРѕРѕР±С‰РµРЅРёРµ РїСЂРёРЅСЏС‚Рѕ.",
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>