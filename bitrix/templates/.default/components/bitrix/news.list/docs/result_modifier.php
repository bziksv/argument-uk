<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    $arFilter = Array('IBLOCK_ID'=>3, 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array("SORT"=>"­­ASC"), $arFilter, true);
  while($ar_result = $db_list->GetNext())
  {
		$ar_Section[$ar_result['ID']] = $ar_result;
  }

  foreach($arResult["ITEMS"] as $arItem){
  		$url='';
		if($ar_Section[$arItem['IBLOCK_SECTION_ID']]){
			$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['ID']]['SECTION'] = $ar_Section[$arItem['IBLOCK_SECTION_ID']];
			$file = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>380, 'height'=>350), BX_RESIZE_IMAGE_PROPORTIONAL, true); 
			$arItem['PICT']=$file["src"];
			$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['ID']]['ITEMS'][] = $arItem;
		}
  }

$arResult["SEC"] = $arrSection;
?>