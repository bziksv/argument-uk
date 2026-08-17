<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
	<div class="container">
		<h2 class="section-title">Выгоды <strong>при сотрудничестве</strong></h2>
		<div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 benifit-column" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="benefit-item">
						<div class="benefit-item_header <?=$arItem["PROPERTIES"]["benefit"]["DESCRIPTION"];?>"><?=$arItem["PROPERTIES"]["benefit"]["VALUE"];?></div>
						<h4 class="benefit-item_title"><?=$arItem["NAME"];?></h4>
						<p>
							<?=$arItem["PREVIEW_TEXT"];?>
						</p>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>