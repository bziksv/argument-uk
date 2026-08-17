<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="col-md-7">
	<div class="tab-container">
		<ul class="documents_tab-names">
		    <?
		    $k = 0;
		    foreach($arResult["SEC"] as  $arSec){
		      $k++;?>
				<li class="tab <?if($k==1){?>active<?}?>"><?=$arSec["SECTION"]["NAME"]?></li>
		    <?}?>
		</ul>
		<div class="documents-tab_content">
		    <?
		    $h = 0;
		    foreach($arResult["SEC"] as  $arSec){
		      $h++;?>
				<div class="tab-item <?if($h==1){?>is-visible<?}?>">
					<div class="document-slider">
			            <?
			            $cnt = count($arSec["ITEMS"]);
			            $r=0;
			            foreach($arSec["ITEMS"] as  $arIten){?>
			              <?
							$r++;
			               $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			               $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			              ?>
							<div class="document-item" id="<?=$this->GetEditAreaId($arIten['ID']);?>">
								<div class="document-item_img">
									<a href="<?=$arIten["PREVIEW_PICTURE"]["SRC"]?>" class="fancybox" data-fancybox="group2">
										<img src="<?=$arIten["PICT"]?>" alt="<?=$arIten["NAME"]?>">
									</a>
								</div>
								<?=$arIten["NAME"]?>
							</div>
						<?}?>
					</div>
				</div>
			<?}?>
		</div>
	</div>
</div>