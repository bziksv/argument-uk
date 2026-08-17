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
							<article class="news-detailed">
								<div>
									<img src="<?=$arResult["PICT"];?>" alt="<?=$arResult["NAME"];?>">
								</div>
								<?if($arResult["DISPLAY_ACTIVE_FROM"]){?><div class="news-detailed_date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?> г</div><?}?>
								<div class="row">
									<div class="col-xl-3 col-lg-4 col-md-4 tablet-small-hidden">
										<div class="sidebar-banner text-center">
											<img src="<?=SITE_TEMPLATE_PATH?>/img/static/sidebar-banner/02.jpg" alt="alt">
											<div class="sidebar-banner_content">
												<span class="sidebar-banner_title">Правовая медиация</span>
												<a href="#make-appointment" class="main-btn sidebar-banner_btn popup-content">Оставить заявку</a>
											</div>
										</div>
									</div>
									<div class="col-xl-9 col-lg-8 col-md-8">
										<?if($arResult["DETAIL_TEXT"]){?>
											<?=$arResult["DETAIL_TEXT"];?>
										<?}else{?>
											<?=$arResult["PREVIEW_TEXT"];?>
										<?}?>
										<div class="text-right">
											<a href="<?=$arParams["SECTION_URL"]?>" class="main-btn all-news_btn">Весь список</a>
										</div>
										<div class="tablet-small-visible">
											<div class="sidebar-banner text-center">
												<img src="<?=SITE_TEMPLATE_PATH?>/img/static/sidebar-banner/02.jpg" alt="alt">
												<div class="sidebar-banner_content">
													<span class="sidebar-banner_title">Правовая медиация</span>
													<a href="" class="main-btn sidebar-banner_btn">Оставить заявку</a>
												</div>
											</div>
										</div>

									</div>
								</div>
							</article>