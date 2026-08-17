<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult['SECTION']['PATH']){
	$arResult = end($arResult['SECTION']['PATH']);	
}


	$arFilter = Array('IBLOCK_ID'=>$arResult['IBLOCK_ID'],'ID'=>$arResult['ID']);
	$db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
	if($ar_result = $db_list->GetNext())
	{
		$arResult["DESCRIPTION2"] = $ar_result['DESCRIPTION'];
	}
?>

	
<article class="services-detailed">
	<h1 class="title">
		<?if($arResult["PROPERTIES"]["name"]["VALUE"]){?>
			<?=$arResult["PROPERTIES"]["name"]["~VALUE"]?>
		<?}else{?>
			<?=$arResult["NAME"]?>
		<?}?>
</h1>
	<?if($arResult["PICT"]){?>
	<div class="services-detailed_img">
		<img src="<?=$arResult["PICT"]?>" alt="<?=$arResult["NAME"]?>">
	</div>
	<?}?>
	<?if($arResult["DESCRIPTION"]){
		echo $arResult["DESCRIPTION"];
	}elseif($arResult["DESCRIPTION2"]){
		echo $arResult["DESCRIPTION2"];
	}else{?>
		<p>
		<?echo $arResult["PREVIEW_TEXT"];?>
	</p>
	<?}?>
	<div class="services-detailed_footer">
		<a href="#make-appointment" class="main-btn popup-content">Оставить заявку на услугу</a>
		<a href="/service/" class="main-btn gray-btn">Все услуги</a>
	</div>
</article>


