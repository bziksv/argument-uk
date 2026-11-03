<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$serviceCatalogCount = function ($count) {
	$count = (int)$count;
	$mod10 = $count % 10;
	$mod100 = $count % 100;
	if ($mod10 === 1 && $mod100 !== 11)
	{
		return $count." услуга";
	}
	if ($mod10 >= 2 && $mod10 <= 4 && ($mod100 < 12 || $mod100 > 14))
	{
		return $count." услуги";
	}
	return $count." услуг";
};
?>
<h1 class="title-left"><?$APPLICATION->ShowTitle(false)?></h1>
<div class="tab-container">
  <ul class="our-sevices_menu">
    <?
    $k = 0;
    foreach($arResult["SEC"] as $arSec){
		if($arSec["SECTION"]["NAME"]){
      $k++;?>
      <li class="tab <?if($k==1){?>active<?}?>"><?=$arSec["SECTION"]["NAME"]?></li>
    <?
		}}?>
  </ul>

  <div class="our-sevices_content">
    <?
    $h = 0;
    foreach($arResult["SEC"] as $arSec){
		if(!$arSec["SECTION"]["NAME"]){
			continue;
		}
		$h++;
		$groups = array();
		$misc = null;
		foreach($arSec["GROUPS"] as $arGroup){
			if($arGroup["SECTION"]){
				$groups[] = $arGroup;
			}else{
				$misc = $arGroup;
			}
		}
		if($misc && !empty($misc["ITEMS"])){
			$groups[] = $misc;
		}
    ?>
      <div class="tab-item <?if($h==1){?>is-visible<?}?>">
        <div class="service-catalog">
          <div class="service-catalog__grid">
            <?foreach($groups as $groupIndex => $arGroup){
				$groupItems = array_values($arGroup["ITEMS"]);
				$panelId = "service-panel-".$h."-".$groupIndex;
				if($arGroup["SECTION"]){
					$groupUrl = $arGroup["SECTION"]["SECTION_PAGE_URL"];
					if(!$groupUrl){
						$groupUrl = "/service/".$arGroup["SECTION"]["CODE"]."/";
					}
					$groupName = $arGroup["SECTION"]["NAME"];
				}else{
					$groupUrl = "#".$panelId;
					$groupName = "Прочие услуги";
				}
            ?>
            <div class="service-catalog__cell">
              <a class="service-catalog__card" href="<?=$groupUrl?>"<?if($groupItems){?> aria-expanded="false" aria-controls="<?=$panelId?>"<?}?>>
                <span class="service-catalog__name"><?=$groupName?></span>
                <?if($groupItems){?><span class="service-catalog__count"><?=$serviceCatalogCount(count($groupItems))?></span><?}?>
              </a>
              <?if($groupItems){?>
              <div class="service-catalog__panel" id="<?=$panelId?>">
                <ul class="service-catalog__list">
                  <?foreach($groupItems as $arItem){
                    $preview = trim(strip_tags((string)($arItem["~PREVIEW_TEXT"] ?? $arItem["PREVIEW_TEXT"])));
                  ?>
                  <li class="service-catalog__service">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
                    <?if($preview !== ""){?><p class="service-catalog__preview"><?=htmlspecialcharsbx($preview)?></p><?}?>
                  </li>
                  <?}?>
                </ul>
              </div>
              <?}?>
            </div>
            <?}?>
          </div>
        </div>
      </div>
    <?}?>
  </div>
</div>
<script src="<?=$this->GetFolder()?>/script.js"></script>
