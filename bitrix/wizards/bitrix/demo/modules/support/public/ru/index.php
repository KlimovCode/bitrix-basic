<?
define("NEED_AUTH",true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РўРµС…РЅРёС‡РµСЃРєР°СЏ РїРѕРґРґРµСЂР¶РєР°");
?><p>Р”Р»СЏ РїСЂРѕСЃРјРѕС‚СЂР° СЃРѕР·РґР°РЅРЅС‹С… РѕР±СЂР°С‰РµРЅРёР№ РІ СЃР»СѓР¶Р±Сѓ С‚РµС…РЅРёС‡РµСЃРєРѕР№ РїРѕРґРґРµСЂР¶РєРё Рё РґР°Р»СЊРЅРµР№С€РµРіРѕ РѕР±СЃСѓР¶РґРµРЅРёСЏ РІРѕРїСЂРѕСЃРѕРІ РІРѕСЃРїРѕР»СЊР·СѓР№С‚РµСЃСЊ СЃСЃС‹Р»РєРѕР№ "РњРѕРё РѕР±СЂР°С‰РµРЅРёСЏ". РЎРѕР·РґР°РЅРёРµ РЅРѕРІРѕРіРѕ РѕР±СЂР°С‰РµРЅРёСЏ РІС‹РїРѕР»РЅСЏРµС‚СЃСЏ РїРѕ С€Р°РіР°Рј СЃ РїРѕРјРѕС‰СЊСЋ СЃРїРµС†РёР°Р»СЊРЅРѕР№ С„РѕСЂРјС‹ РІРЅРёР·Сѓ.</p>


<p><?$APPLICATION->IncludeComponent("bitrix:support.wizard", ".default", Array(
	"IBLOCK_TYPE"	=>	"services",
	"IBLOCK_ID"	=>	"#IBLOCK.ID(XML_ID=services-master)#",
	"PROPERTY_FIELD_TYPE"	=>	"type",
	"PROPERTY_FIELD_VALUES"	=>	"values",
	"AJAX_MODE"	=>	"Y",
	"AJAX_OPTION_SHADOW"	=>	"Y",
	"AJAX_OPTION_JUMP"	=>	"N",
	"AJAX_OPTION_STYLE"	=>	"Y",
	"AJAX_OPTION_HISTORY"	=>	"N",
	"INCLUDE_IBLOCK_INTO_CHAIN"	=>	"N",
	"TICKETS_PER_PAGE"	=>	"50",
	"MESSAGES_PER_PAGE"	=>	"20",
	"SET_PAGE_TITLE"	=>	"N",
	"TEMPLATE_TYPE"	=>	"standard",
	"SHOW_RESULT"	=>	"Y",
	"SHOW_COUPON_FIELD"	=>	"N",
	"SECTIONS_TO_CATEGORIES"	=>	"N",
	"VARIABLE_ALIASES"	=>	array(
		"ID"	=>	"ID",
	)
	)
);?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>