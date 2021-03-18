<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

$APPLICATION->SetTitle("Р’С…РѕРґ РЅР° СЃР°Р№С‚");
?>
<p>Р’С‹ Р·Р°СЂРµРіРёСЃС‚СЂРёСЂРѕРІР°РЅС‹ Рё СѓСЃРїРµС€РЅРѕ Р°РІС‚РѕСЂРёР·РѕРІР°Р»РёСЃСЊ.</p>

<p><a href="<?=SITE_DIR?>">Р’РµСЂРЅСѓС‚СЊСЃСЏ РЅР° РіР»Р°РІРЅСѓСЋ СЃС‚СЂР°РЅРёС†Сѓ</a></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>