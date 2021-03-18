<?
// С…РѕСЃС‚С‹ РґР»СЏ СЂР°СЃРїСЂРµРґРµР»РµРЅРёСЏ РЅР°РіСЂСѓР·РєРё СЃРєР°С‡РёРІР°РЅРёР№ СЃ РІРµСЂРѕСЏС‚РЅРѕСЃС‚СЊСЋ РІС‹Р±РѕСЂР°: 70, 50
/*
$arrHOSTS = array(
	"70" => "http://download1.bitrixsoft.ru",
	"50" => "http://download2.bitrixsoft.ru"
);
*/

// РёРЅС‚РµСЂРІР°Р» РІ С‚РµС‡РµРЅРёРё РєРѕС‚РѕСЂРѕРіРѕ РЅРµ Р±СѓРґСѓС‚ СЂРµРіРёСЃС‚СЂРёСЂРѕРІР°С‚СЊСЃСЏ СЃРѕР±С‹С‚РёСЏ СЃРєР°С‡РёРІР°РЅРёСЏ РѕС‚ РѕРґРЅРѕРіРѕ РїРѕСЃРµС‚РёС‚РµР»СЏ СЃР°Р№С‚Р°
$DOWNLOAD_EVENT_INTERVAL = 21600; // СЃРµРє.

$sCurUrl = urldecode($_SERVER["REQUEST_URI"]);
$sCurUrl = str_replace("\0", "", $sCurUrl);

if($p = strpos($sCurUrl, "?"))
{
	$sParams = substr($sCurUrl, $p+1);
	parse_str($sParams, $arParams);
	$GLOBALS += $arParams;
	$_GET = $arParams;
	$HTTP_GET_VARS = $_GET;
	$_REQUEST += $arParams;
	$sCurUrl = substr($sCurUrl, 0, $p);
}

$sCurUrl = preg_replace("/\.+/", ".", $sCurUrl);
$sCurUrl = preg_replace("'[\\/]+'", "/", $sCurUrl);

$DIR = dirname($sCurUrl);
$file = substr($sCurUrl, strlen($DIR)+1);
$filename = $_SERVER["DOCUMENT_ROOT"].$DIR."/files/".$file;

if(file_exists($filename) && is_file($filename))
{
	session_cache_limiter('');
	session_start();

	$cur_pos = 0;
	$p = strpos($_SERVER["HTTP_RANGE"], "=");
	if($p>0)
	{
		$bytes = substr($_SERVER["HTTP_RANGE"], $p+1);
		$p = strpos($bytes, "-");
		if($p!==false) $cur_pos = intval(substr($bytes, 0, $p));
	}
	include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
	if(CModule::IncludeModule("statistic"))
	{
		if($cur_pos<=0) // РїСЂРѕРІРµСЂРёРј СЃРєР°С‡РёРІР°РµС‚СЃСЏ Р»Рё СЃ СЃР°РјРѕРіРѕ РЅР°С‡Р°Р»Р°
		{
			if(strlen($event1)<=0 && strlen($event2)<=0)
			{
				$event1 = "download";
				$event2 = $file;
			}
			$e = $event1."/".$event2."/".$event3;
			if(!in_array($e, $_SESSION["DOWNLOAD_EVENTS"])) // РїСЂРѕРІРµСЂРёРј РЅРµ СЃРєР°С‡РёРІР°Р»СЃСЏ Р»Рё РІ РґР°РЅРЅРѕР№ СЃРµСЃСЃРёРё
			{
				$w = CStatEvent::GetByEvents($event1, $event2);
				$wr = $w->Fetch();
				$z = CStatEvent::GetEventsByGuest($_SESSION["SESS_GUEST_ID"], $wr["EVENT_ID"], $event3, $DOWNLOAD_EVENT_INTERVAL);
				if(!($zr=$z->Fetch())) // РїСЂРѕРІРµСЂРёРј РЅРµ СЃРєР°С‡РёРІР°Р» Р»Рё РїРѕСЃРµС‚РёС‚РµР»СЊ Р·Р° РїРѕСЃР»РµРґРЅРёРµ 6 С‡Р°СЃРѕРІ
				{
					CStatistic::Set_Event($event1, $event2, $event3);
					$_SESSION["DOWNLOAD_EVENTS"][] = $e;
				}
			}
		}
	}
	ob_end_clean();
	session_write_close();

	while (list($key,$value)=each($arrHOSTS)) $max_weight += intval($key);
	mt_srand ((double) microtime() * 1000000);
	$rand = $max_weight*(rand()/getrandmax());
	reset($arrHOSTS);
	while (list($key,$value)=each($arrHOSTS))
	{
		if($rand>=$step && $rand<=$step+intval($key))
		{
			$host=$value;
			break;
		}
		$step += intval($key);
	}
	if (strlen($host)<=0) $host="http://".$_SERVER["HTTP_HOST"];

	header("Request-URI: ".$host.$DIR."/files/".$file);
	header("Content-Location: ".$host.$DIR."/files/".$file);
	header("Location: ".$host.$DIR."/files/".$file);
}
else
{
	include($_SERVER["DOCUMENT_ROOT"]."/404.php");
}
?>
