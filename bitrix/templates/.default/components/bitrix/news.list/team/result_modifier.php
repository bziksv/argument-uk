<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
foreach ($arResult['ITEMS'] as $key=>$arItem) {
	$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>262, 'height'=>320), BX_RESIZE_IMAGE_EXACT , true); 
	$arResult['ITEMS'][$key]['PICT']=$file["src"];
}
?>