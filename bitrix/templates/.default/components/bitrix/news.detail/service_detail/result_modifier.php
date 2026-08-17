<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
if($arResult["DETAIL_PICTURE"]){
	$file = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"]["ID"], array('width'=>893, 'height'=>255), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
}else{
	$file = CFile::ResizeImageGet($arResult["PREVIEW_PICTURE"]["ID"], array('width'=>893, 'height'=>255), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
}
$arResult['PICT']=$file["src"];

?>