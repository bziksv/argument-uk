<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//  $arFilter = Array('IBLOCK_ID'=>4, 'GLOBAL_ACTIVE'=>'Y', 'DEPTH_LEVEL'=>1);
    $arFilter = Array('IBLOCK_ID'=>4, 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array("SORT"=>"­­ASC"), $arFilter, true);
  while($ar_result = $db_list->GetNext())
  {
		$ar_Section[$ar_result['ID']] = $ar_result;
  }

  foreach($arResult["ITEMS"] as $arItem){
  		$url='';
		if($ar_Section[$arItem['IBLOCK_SECTION_ID']]){
			if($ar_Section[$arItem['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']){
				$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']]['SECTION'] = $ar_Section[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']];
				$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
				if($ar_Section[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']]['PICTURE']){
					$url=CFile::GetPath($ar_Section[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']]['PICTURE']);
					$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['IBLOCK_SECTION_ID']]['SECTION']['PICTURE'] = $url;
				}
			}else{
				$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['ID']]['SECTION'] = $ar_Section[$arItem['IBLOCK_SECTION_ID']];
				$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['ID']]['ITEMS'][] = $arItem;
				if($ar_Section[$arItem['IBLOCK_SECTION_ID']]['PICTURE']){
					$url=CFile::GetPath($ar_Section[$arItem['IBLOCK_SECTION_ID']]['PICTURE']);
					$arrSection[$ar_Section[$arItem['IBLOCK_SECTION_ID']]['ID']]['SECTION']['PICTURE'] = $url;
				}
			}
		}
  }

$arResult["SEC"] = $arrSection;
?>