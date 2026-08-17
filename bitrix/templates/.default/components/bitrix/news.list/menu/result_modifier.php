<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
  $arFilter = Array('IBLOCK_ID'=>4, 'GLOBAL_ACTIVE'=>'Y');
  $db_list = CIBlockSection::GetList(Array("SORT"=>"­­ASC"), $arFilter, true);
  while($ar_result = $db_list->GetNext())
  {
		$ar_Section[$ar_result['ID']] = $ar_result;
  }

	$arSelect = Array("ID", "NAME", "DETAIL_PAGE_URL", "IBLOCK_SECTION_ID");
	$arFilter = Array("IBLOCK_ID"=>4, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement())
	{
	 $arFields = $ob->GetFields();
		if($ar_Section[$arFields['IBLOCK_SECTION_ID']]){
			$ar_Section[$arFields['IBLOCK_SECTION_ID']]['ITEMS'][] = $arFields;
		}
		//print_r($arFields);
	}


foreach($ar_Section as $arSect){
		if($arSect['IBLOCK_SECTION_ID']){
			$arSection[$arSect['IBLOCK_SECTION_ID']]['LEVEL_2'][$arSect['ID']] = $arSect;
		}else{
			$arSection[$arSect['ID']] = $arSect;
		}
}
?>

<pre>
	<?print_r($arSection)?>
</pre>


