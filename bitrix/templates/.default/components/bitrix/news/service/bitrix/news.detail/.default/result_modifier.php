<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

// Задаем нужные размеры: ширина 1200px, высота 0 (чтобы сохранялись строгие пропорции оригинала)
$arSize = array('width' => 1200, 'height' => 0);

if(!empty($arResult["DETAIL_PICTURE"]["ID"])){
    $file = CFile::ResizeImageGet(
        $arResult["DETAIL_PICTURE"]["ID"], 
        $arSize, 
        BX_RESIZE_IMAGE_PROPORTIONAL, 
        false // последний параметр лучше false, чтобы не было лишних артефактов
    ); 
} elseif(!empty($arResult["PREVIEW_PICTURE"]["ID"])){
    $file = CFile::ResizeImageGet(
        $arResult["PREVIEW_PICTURE"]["ID"], 
        $arSize, 
        BX_RESIZE_IMAGE_PROPORTIONAL, 
        false
    ); 
}

// Присваиваем результат только если ресайз прошел успешно
if($file) {
    $arResult['PICT'] = $file["src"];
}
?>