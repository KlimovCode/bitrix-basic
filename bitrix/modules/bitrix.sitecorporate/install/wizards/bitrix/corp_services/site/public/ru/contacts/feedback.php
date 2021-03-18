<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Р—Р°РґР°С‚СЊ РІРѕРїСЂРѕСЃ");
?>
<p><?$APPLICATION->IncludeComponent("bitrix:main.feedback", "template", array(
	"USE_CAPTCHA" => "Y",
	"OK_TEXT" => "РЎРїР°СЃРёР±Рѕ, РІР°С€ РІРѕРїСЂРѕСЃ РїСЂРёРЅСЏС‚. Р’ Р±Р»РёР¶Р°Р№С€РµРµ РІСЂРµРјСЏ РјС‹ СЃ РІР°РјРё СЃРІСЏР¶РµРјСЃСЏ РїРѕ СѓРєР°Р·Р°РЅРЅРѕРјСѓ E-Mail Р°РґСЂРµСЃСѓ.",
	"EMAIL_TO" => "",
	"REQUIRED_FIELDS" => array(
		0 => "NAME",
		1 => "EMAIL",
		2 => "MESSAGE",
	),
	"EVENT_MESSAGE_ID" => array(
	)
	),
	false
);?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>