<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="head-menu_hidden">
			<?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
					continue;
			?>

					<li class=" <?=$arItem["PARAMS"]['class_mob']?>">
						<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			</li>
			<?endforeach?>
</ul>
<?endif?>