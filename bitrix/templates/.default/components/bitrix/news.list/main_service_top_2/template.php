<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$items = $arResult["ITEMS"];
if (!$items) {
	return;
}
$first = array_slice($items, 0, 1);
$rest = array_slice($items, 1);
?>
<div class="col-md-6">
	<div class="wrapper_service-item">
<?foreach($first as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="service-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<h2 class="service-item_title"><?=$arItem["NAME"]?></h2>
		<p><?=$arItem["PREVIEW_TEXT"]?></p>
		<div class="service-item_more-link">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
		</div>
	</div>
<?endforeach;?>
	</div>
	<div class="service-more-btn">
		<a href="/service/">
			Полный перечень услуг <span class="min">для юридических лиц</span>
		</a>
	</div>
</div>
<div class="col-md-6">
	<div class="tablet-small-visible">
		<div class="services-section_title services-section_title-second">услуги для юридических лиц</div>
	</div>
<?foreach($rest as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="service-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<h2 class="service-item_title"><?=$arItem["NAME"]?></h2>
		<p><?=$arItem["PREVIEW_TEXT"]?></p>
		<div class="service-item_more-link">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
		</div>
	</div>
<?endforeach;?>
</div>
