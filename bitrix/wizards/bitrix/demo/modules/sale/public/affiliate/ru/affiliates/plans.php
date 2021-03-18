<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РџР»Р°РЅС‹");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.affiliate.plans",
	"",
	Array(
		"SET_TITLE" => "Y", 
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>