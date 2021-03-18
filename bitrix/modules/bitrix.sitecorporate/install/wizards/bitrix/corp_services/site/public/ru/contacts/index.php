<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РљРѕРЅС‚Р°РєС‚РЅР°СЏ РёРЅС„РѕСЂРјР°С†РёСЏ");
?>
<p>РћР±СЂР°С‚РёС‚РµСЃСЊ Рє РЅР°С€РёРј СЃРїРµС†РёР°Р»РёСЃС‚Р°Рј Рё РїРѕР»СѓС‡РёС‚Рµ РїСЂРѕС„РµСЃСЃРёРѕРЅР°Р»СЊРЅСѓСЋ РєРѕРЅСЃСѓР»СЊС‚Р°С†РёСЋ РїРѕ СѓСЃР»СѓРіР°Рј РЅР°С€РµРіРѕ Р±Р°РЅРєР°.</p>

<p>Р’С‹ РјРѕР¶РµС‚Рµ РѕР±СЂР°С‚РёС‚СЊСЃСЏ Рє РЅР°Рј РїРѕ С‚РµР»РµС„РѕРЅСѓ, РїРѕ СЌР»РµРєС‚СЂРѕРЅРЅРѕР№ РїРѕС‡С‚Рµ РёР»Рё РґРѕРіРѕРІРѕСЂРёС‚СЊСЃСЏ Рѕ РІСЃС‚СЂРµС‡Рµ РІ РЅР°С€РµРј РѕС„РёСЃРµ. Р‘СѓРґРµРј СЂР°РґС‹ РїРѕРјРѕС‡СЊ РІР°Рј Рё РѕС‚РІРµС‚РёС‚СЊ РЅР° РІСЃРµ РІР°С€Рё РІРѕРїСЂРѕСЃС‹. </p>

<h2>РўРµР»РµС„РѕРЅС‹</h2>

<ul>
  <li>РўРµР»РµС„РѕРЅ/С„Р°РєСЃ: 
    <ul>
      <li><b>(495) 212-85-06</b> </li>
    </ul>
  </li>

  <li>РўРµР»РµС„РѕРЅС‹: 
    <ul>
      <li><b>(495) 212-85-07</b> </li>
    
      <li><b>(495) 212-85-08</b> </li>
    </ul>
  </li>
</ul>

<h2>РќР°С€ РѕС„РёСЃ РІ РњРѕСЃРєРІРµ</h2>

<p><?$APPLICATION->IncludeComponent("bitrix:map.google.view", ".default", array(
	"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
	"INIT_MAP_TYPE" => "NORMAL",
	"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
	"MAP_WIDTH" => "600",
	"MAP_HEIGHT" => "500",
	"CONTROLS" => array(
		0 => "LARGE_MAP_CONTROL",
		1 => "MINIMAP",
		2 => "HTYPECONTROL",
		3 => "SCALELINE",
	),
	"OPTIONS" => array(
		0 => "ENABLE_SCROLL_ZOOM",
		1 => "ENABLE_DBLCLICK_ZOOM",
		2 => "ENABLE_DRAGGING",
	),
	"MAP_ID" => ""
	),
	false
);?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>