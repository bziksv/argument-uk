<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$res = CIBlockSection::GetByID($arResult["IBLOCK_SECTION_ID"]);
if($ar_res = $res->GetNext())
  $name = $ar_res['NAME'];

if($ar_res['IBLOCK_SECTION_ID']){
	$res2 = CIBlockSection::GetByID($ar_res["IBLOCK_SECTION_ID"]);
	if($ar_res2 = $res2->GetNext())
	  $name = $ar_res2['NAME'];

}
$APPLICATION->AddChainItem($name." - ".$arResult["NAME"], "");
?>