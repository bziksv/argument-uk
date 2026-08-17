<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="popular-services_section">
  <div class="container">
    <h2 class="section-title">Популярные <strong>услуги</strong></h2>
    <div class="row">
      <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6 service-column" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
          <div class="popular-services_item">
            <span class="popular-services_item-icon <?=$arItem["PROPERTIES"]["class"]["VALUE"]?>"></span>
            <h4 class="popular-services_item-title">
              <?=$arItem["NAME"]?>
            </h4>
            <p>
              <?=$arItem["PREVIEW_TEXT"]?>
            </p>
            <?if($arItem["PROPERTIES"]["link"]["VALUE"]){?>
            <a href="<?=$arItem["PROPERTIES"]["link"]["VALUE"]?>" class="popular-services_item-link">Подробнее</a>
            <?}?>
          </div>
        </div>
      <?endforeach;?>
    </div>
    <a href="/service/" class="all-services_conpany-link main-btn">Все услуги компании</a>
  </div>
</section>