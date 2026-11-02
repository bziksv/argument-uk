<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<h1 class="title-left"><?$APPLICATION->ShowTitle(false)?></h1>
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
        <?foreach($arSec["GROUPS"] as $arGroup){
          $groupItems = array_values($arGroup["ITEMS"]);
          $groupCount = count($groupItems);
          $splitAt = (int)ceil($groupCount / 2);
        ?>
        <div class="our-sevices_group">
          <?if($arGroup["SECTION"]){
            $groupUrl = $arGroup["SECTION"]["SECTION_PAGE_URL"];
            if(!$groupUrl){
              $groupUrl = $arResult["LIST_PAGE_URL"].$arGroup["SECTION"]["CODE"]."/";
            }
          ?>
          <h3 class="our-sevices_group-title">
            <a href="<?=$groupUrl?>"><?=$arGroup["SECTION"]["NAME"]?></a>
          </h3>
          <?}?>
          <div class="row">
            <div class="col-md-6">
              <?foreach($groupItems as $index => $arIten){
                if($index === $splitAt){?>
                  </div>
                  <div class="col-md-6">
                <?}?>
                <div class="our-sevices_item" id="<?=$this->GetEditAreaId($arIten['ID']);?>">
                  <h4 class="our-sevices_item-title">
                    <a href="<?=$arIten["DETAIL_PAGE_URL"]?>">• <?=$arIten["NAME"]?></a>
                  </h4>
                  <p>
                    <?=$arIten["PREVIEW_TEXT"]?>
                  </p>
                </div>
              <?}?>
            </div>
          </div>
        </div>
        <?}?>
      </div>
	  <?}}?>
  </div>

  <!-- end our-sevices_content -->
</div>