<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<ul class="sidebar-menu">
    <?
    foreach($arResult["SEC"] as  $arSec){?>
      <li class="sidebar-menu_item ">
		  <a><?=$arSec["SECTION"]["NAME"]?></a>
     		<ul class="sidebar-menu_dropdown">
	            <?foreach($arSec["ITEMS"] as  $arIten){?>
	              <?
	               $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	               $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	              ?>
	              <li id="<?=$this->GetEditAreaId($arIten['ID']);?>">
	                  <a href="<?=$arIten["DETAIL_PAGE_URL"]?>"><?=$arIten["NAME"]?></a>
	              </li>
	        	<?}?>
        	</ul>
      </li>
    <?}?>
  </ul>