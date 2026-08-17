<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CModule::IncludeModule("iblock");
  $arFilter = Array('IBLOCK_ID'=>4, 'GLOBAL_ACTIVE'=>'Y','ACTIVE' => 'Y',);
  $db_list = CIBlockSection::GetList(Array("sort"=>"asc"), $arFilter, true);
  while($ar_result = $db_list->GetNext())
  {
    $ar_Section[$ar_result['ID']] = $ar_result;
  }

  $arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID");
  $arFilter = Array("IBLOCK_ID"=>4, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
  $res = CIBlockElement::GetList(Array("name"=>"­­asc"), $arFilter, false, Array("nPageSize"=>500), $arSelect);
  while($ob = $res->GetNextElement())
  {
   $arFields = $ob->GetFields();
    if($ar_Section[$arFields['IBLOCK_SECTION_ID']]){
      $ar_Section[$arFields['IBLOCK_SECTION_ID']]['ITEMS'][$arFields['ID']] = $arFields;

			$ar_Section[$arFields['IBLOCK_SECTION_ID']]['ITEMS_2'][$arFields['ID']]['ITEMS_2'][] = $arFields["PROPERTY_FOR_LINK_VALUE"];

			  $VALUES = array();
			  $redss = CIBlockElement::GetProperty($arFields['IBLOCK_ID'], $arFields['ID'], "sort", "asc", array("CODE" => "for_link"));
			  while ($obdd = $redss->GetNext())
			  {
			      $VALUES[] = $obdd;
			  }
		if($VALUES[0]){
			$ar_Section[$arFields['IBLOCK_SECTION_ID']]['ITEMS'][$arFields['ID']]['ITEMS_2'] = $VALUES;
		}

    }
  }


foreach($ar_Section as $arSect){
    if($arSect['IBLOCK_SECTION_ID']){
      //$arSection[$arSect['IBLOCK_SECTION_ID']]['LEVEL_2'][$arSect['ID']] = $arSect;
    }else{
      $arSection[$arSect['ID']] = $arSect;
    }
}

foreach($ar_Section as $arSect){
    if($arSect['IBLOCK_SECTION_ID']){
      $arSection[$arSect['IBLOCK_SECTION_ID']]['LEVEL_2'][$arSect['ID']] = $arSect;
    }else{
     // $arSection[$arSect['ID']] = $arSect;
    }
}


foreach($arResult as $kay=> $arItem){
if($arItem["PARAMS"]['level']){

$arResult[$kay]["PARAMS"]['level_2'] = $arSection;
      }
}?>
