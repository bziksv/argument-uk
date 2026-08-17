<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="tab-container">
  <ul class="our-sevices_menu">
    <?
    $k = 0;
    foreach($arResult["SEC"] as  $arSec){
		if($arSec["SECTION"]["NAME"]){
      $k++;?>
      <li class="tab <?if($k==1){?>active<?}?>"><?=$arSec["SECTION"]["NAME"]?></li>
    <?
		}}?>
  </ul>

  <div class="our-sevices_content">
    <?
    $h = 0;
    foreach($arResult["SEC"] as  $arSec){
				if($arSec["SECTION"]["NAME"]){
      $h++;?>
      <div class="tab-item <?if($h==1){?>is-visible<?}?>">
        <div class="our-sevices_img">
          <?if($arSec["SECTION"]["PICTURE"]){?>
            <img src="<?=$arSec["SECTION"]["PICTURE"]?>" alt="alt">
          <?}else{?>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/static/our-sevices/01.jpg" alt="alt">
          <?}?>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?
            $cnt = count($arSec["ITEMS"]);
            $r=0;
            foreach($arSec["ITEMS"] as  $arIten){?>
              <?
				$r++;
               $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
               $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
              ?>
              <div class="our-sevices_item"  id="<?=$this->GetEditAreaId($arIten['ID']);?>">
                <h4 class="our-sevices_item-title">
                  <a href="<?=$arIten["DETAIL_PAGE_URL"]?>">• <?=$arIten["NAME"]?></a>
                </h4>
                <p>
                  <?=$arIten["PREVIEW_TEXT"]?>
                </p>
              </div>
              <?
              if($cnt>1){
                  if($cnt/2<=$r){
                    $cnt=0;
                    ?>
                    </div>
                    <div class="col-md-6">
                    <?
                  }
              }

            }?>
          </div>

        </div>
      </div>
	  <?}}?>
  </div>

  <!-- end our-sevices_content -->
</div>