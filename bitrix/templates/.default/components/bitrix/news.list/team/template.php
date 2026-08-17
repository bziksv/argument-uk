<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<section class="our-team_section">
	<div class="container">
		<h2 class="section-title">Наша <strong>Команда</strong></h2>
	</div>
	<div class="container">
		<div class="row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-lg-4 col-md-6 col-sm-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="our-team_item">
						<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
						<div class="our-team-name">
							<?=$arItem["NAME"];?>
							<span class="our-team_position"><?=$arItem["PREVIEW_TEXT"];?></span>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</section>