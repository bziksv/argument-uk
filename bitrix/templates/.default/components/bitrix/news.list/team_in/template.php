<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$cnnt = count($arResult["ITEMS"]);
?>
<section class="our-specialists_section gray-section">
	<div class="container">
		<h2 class="section-title">
			Наши специалисты <strong>в данной сфере</strong>
		</h2>
		<div class="our-specialists_slider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="our-specialists_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="our-specialists_item-img">
						<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
					</div>
					<div class="our-specialists_item-name">
						<?=$arItem["NAME"];?>
						<span class="our-specialists_item-post"><?=$arItem["PREVIEW_TEXT"];?></span>
					</div>
					<?if($arItem["DETAIL_TEXT"]){?>
									<div class="desc_team">
										<h3><?=$arItem["NAME"];?></h3>
										<?=$arItem["~DETAIL_TEXT"];?>
									</div>
					<?}?>
				</div>
			<?endforeach;?>
			<?if($cnnt<5){?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="our-specialists_item">
						<div class="our-specialists_item-img">
							<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
						</div>
						<div class="our-specialists_item-name">
							<?=$arItem["NAME"];?>
							<span class="our-specialists_item-post"><?=$arItem["PREVIEW_TEXT"];?></span>
						</div>
						<?if($arItem["DETAIL_TEXT"]){?>
										<div class="desc_team">
											<h3><?=$arItem["NAME"];?></h3>
											<?=$arItem["~DETAIL_TEXT"];?>
										</div>
						<?}?>
					</div>
				<?endforeach;?>
			<?}?>
			<?if($cnnt==2){?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="our-specialists_item">
						<div class="our-specialists_item-img">
							<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
						</div>
						<div class="our-specialists_item-name">
							<?=$arItem["NAME"];?>
							<span class="our-specialists_item-post"><?=$arItem["PREVIEW_TEXT"];?></span>
						</div>
						<?if($arItem["DETAIL_TEXT"]){?>
										<div class="desc_team">
											<h3><?=$arItem["NAME"];?></h3>
											<?=$arItem["~DETAIL_TEXT"];?>
										</div>
						<?}?>
					</div>
				<?endforeach;?>
			<?}?>
			<?if($cnnt==1){?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="our-specialists_item">
						<div class="our-specialists_item-img">
							<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
						</div>
						<div class="our-specialists_item-name">
							<?=$arItem["NAME"];?>
							<span class="our-specialists_item-post"><?=$arItem["PREVIEW_TEXT"];?></span>
						</div>
						<?if($arItem["DETAIL_TEXT"]){?>
										<div class="desc_team">
											<h3><?=$arItem["NAME"];?></h3>
											<?=$arItem["~DETAIL_TEXT"];?>
										</div>
						<?}?>
					</div>
				<?endforeach;?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="our-specialists_item">
						<div class="our-specialists_item-img">
							<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
						</div>
						<div class="our-specialists_item-name">
							<?=$arItem["NAME"];?>
							<span class="our-specialists_item-post"><?=$arItem["PREVIEW_TEXT"];?></span>
						</div>
						<?if($arItem["DETAIL_TEXT"]){?>
										<div class="desc_team">
											<h3><?=$arItem["NAME"];?></h3>
											<?=$arItem["~DETAIL_TEXT"];?>
										</div>
						<?}?>
					</div>
				<?endforeach;?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<div class="our-specialists_item">
						<div class="our-specialists_item-img">
							<img src="<?=$arItem["PICT"];?>" alt="<?=$arItem["NAME"];?>">
						</div>
						<div class="our-specialists_item-name">
							<?=$arItem["NAME"];?>
							<span class="our-specialists_item-post"><?=$arItem["PREVIEW_TEXT"];?></span>
						</div>
						<?if($arItem["DETAIL_TEXT"]){?>
										<div class="desc_team">
											<h3><?=$arItem["NAME"];?></h3>
											<?=$arItem["~DETAIL_TEXT"];?>
										</div>
						<?}?>
					</div>
				<?endforeach;?>
			<?}?>
		</div>
		<!-- end our-specialists_slider -->
	</div>
</section>