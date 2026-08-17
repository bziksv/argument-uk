<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$cnt=count($arResult["ITEMS"]);
$k=0;
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
  <?
  $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
  $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
  $k++;
  ?>
<div class="service-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
  <h4 class="service-item_title">
     <?=$arItem["NAME"]?>
  </h4>
  <p>
    <?=$arItem["PREVIEW_TEXT"]?>
  </p>
  <div class="service-item_more-link">
    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
  </div>
</div>
<?if($cnt/2 >= $k){
$cnt=0;?>
                  </div>
                  <div class="service-more-btn">
                    <a href="/service/">
                      Полный перечень услуг <span class="min">для физических лиц</span>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="tablet-small-visible">
                    <div class="services-section_title services-section_title-second">услуги для физических лиц</div>
                  </div>
<?}?>
<?endforeach;?>
<?if($cnt==1){
?>
                  </div>
                  <div class="service-more-btn">
                    <a href="/service/">
                      Полный перечень услуг <span class="min">для физических лиц</span>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="tablet-small-visible">
                    <div class="services-section_title services-section_title-second">услуги для физических лиц</div>
                  </div>
<?}?>