<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<article class="services-detailed">
	<h2 class="title-left">
		<?if($arResult["PROPERTIES"]["name"]["VALUE"]){?>
			<?=$arResult["PROPERTIES"]["name"]["~VALUE"]?>
		<?}else{?>
			<?=$arResult["NAME"]?>
		<?}?>
</h2>
	<?if($arResult["PICT"]){?>
	<div class="services-detailed_img">
		<img src="<?=$arResult["PICT"]?>" alt="<?=$arResult["NAME"]?>">
	</div>
	<?}?>
	<?if($arResult["DETAIL_TEXT"]){
		echo argument_html_fit_heading_levels($arResult["DETAIL_TEXT"], 2);
	}else{?>
		<p>
		<?echo argument_html_fit_heading_levels((string)$arResult["PREVIEW_TEXT"], 2);?>
	</p>
	<?}?>
	<div class="services-detailed_footer">
		<a href="#make-appointment" class="main-btn popup-content">Оставить заявку на услугу</a>
		<a href="/service/" class="main-btn gray-btn">Все услуги</a>
	</div>
</article>
