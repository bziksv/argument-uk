<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<h1><?=$arResult["NAME"];?></h1>
<div class="row">							
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 news-column"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="news-item">
			<div class="news-item_img">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
				</a>
			</div>
			<div class="news-item_body">
				<h4 class="news-item_title">
					<?=$arItem["NAME"];?>
				</h4>
				<p>
					<?=$arItem["PREVIEW_TEXT"];?>
				</p>
			</div>
			<div class="news-item_footer">
				<?if($arItem["DISPLAY_ACTIVE_FROM"]){?><span class="news-item_date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?> г</span><?}?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-item_more-link">Подробнее</a>
			</div>
		</div>
	</div>

<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>