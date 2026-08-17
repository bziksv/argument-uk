<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<nav class="head-nav">
		<ul class="head-menu">
			<?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
					continue;
				if($arItem["PARAMS"]['footer']){
					continue;
				}
			?>
				<?if($arItem["SELECTED"]):?>
					<li class="head-menu_item active <?=$arItem["PARAMS"]['class']?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<?else:?>
					<li class="head-menu_item <?=$arItem["PARAMS"]['class']?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<?endif?>
			<?if($arItem["PARAMS"]['level']){?>
				<div class="dropdown-content">
					<ul class="dropdown-menu">
						<?foreach($arItem["PARAMS"]['level_2'] as $level_2){?>
							<li class="dropdown-menu_item">
								<a ><?=$level_2['NAME']?></a>

								<?if($level_2['LEVEL_2'] || $level_2["ITEMS"]){?>
									<ul class="dropdown-menu_second-level">
										<li class="dropdown-menu_title"><?=$level_2['NAME']?></li>
										<?foreach($level_2["LEVEL_2"] as $level_3){ ?>
											<li>
												<a href="<?=$level_3['SECTION_PAGE_URL']?>"><?=$level_3['NAME']?></a>

												<?if($level_3['ITEMS']){?>
													<ul class="dropdown-menu_third-level">
														<li class="dropdown-menu_title"><?=$level_3['NAME']?></li>

														<?foreach($level_3["ITEMS"] as $level_4){?>
															<li><a href="<?=$level_4['DETAIL_PAGE_URL']?>"><?=$level_4['NAME']?></a></li>
														<?}?>
													</ul>
												<?}?>
											</li>
										<?}?>
												<?foreach($level_2["ITEMS"] as $level_22){?>
													<li><a href="<?=$level_22['DETAIL_PAGE_URL']?>"><?=$level_22['NAME']?></a>
													<?if($level_22['ITEMS_2']){?>
														<ul class="dropdown-menu_third-level">
															<li class="dropdown-menu_title"><?=$level_22['NAME']?></li>

															<?foreach($level_22["ITEMS_2"] as $level_44){?>
																<li><a href="<?=$level_22['DETAIL_PAGE_URL']?><?=$level_44['DESCRIPTION']?>"><?=$level_44["VALUE"]?></a></li>
															<?}?>
														</ul>
													<?}?>
</li>
												<?}?>
									</ul>
								<?}?>
							</li>
						<?}?>
					</ul>
				</div>
			<?}?>
			</li>
			<?endforeach?>
		</ul>
	</nav>
<?endif?>