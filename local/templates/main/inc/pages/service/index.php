<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-md-4">
									<aside class="sidebar">
<?$APPLICATION->IncludeComponent("bitrix:news.list", "service_in", Array(
	"ACTIVE_DATE_FORMAT" => "",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "4",	// Код информационного блока
		"IBLOCK_TYPE" => "-",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "200",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>

										<div class="tablet-small-hidden">
											<div class="sidebar-banner">
												<?if($banner1){?>
													<img src="<?=$banner1?>" alt="alt">
												<?}else{?>
													<img src="<?=SITE_TEMPLATE_PATH?>/img/static/sidebar-banner/01.jpg" alt="alt">
												<?}?>

												<div class="sidebar-banner_content">
													<span class="sidebar-banner_number"><?=$happy_end?></span>
													<p>
														<?if($banner1_desc){
echo $banner1_desc;
																		   }else{?>
													<?$APPLICATION->IncludeComponent(
														"bitrix:main.include", 
														".default", 
														array(
															"COMPONENT_TEMPLATE" => ".default",
															"AREA_FILE_SHOW" => "file",
															"PATH" => "/local/templates/main/inc/pages/service/number.php",
															"EDIT_TEMPLATE" => ""
														),
														false
													);?>
														<?}?>
													</p>
												</div>
											</div>
											<div class="sidebar-banner text-center">
												<?if($banner2){?>
													<img src="<?=$banner2?>" alt="alt">
												<?}else{?>
													<img src="<?=SITE_TEMPLATE_PATH?>/img/static/sidebar-banner/02.jpg" alt="alt">
												<?}?>
												<div class="sidebar-banner_content">
													<span class="sidebar-banner_title">
													<?$APPLICATION->IncludeComponent(
														"bitrix:main.include", 
														".default", 
														array(
															"COMPONENT_TEMPLATE" => ".default",
															"AREA_FILE_SHOW" => "file",
															"PATH" => "/local/templates/main/inc/pages/service/sidebar_text_app.php",
															"EDIT_TEMPLATE" => ""
														),
														false
													);?>
													</span>
													<a href="#make-appointment" class="main-btn sidebar-banner_btn popup-content">Оставить заявку</a>
												</div>
											</div>
										</div>
									</aside>
								</div>
								<div class="col-xl-9 col-lg-8 col-md-8">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"service_detail", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"ELEMENT_ID" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "main",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "service_detail"
	),
	false
);?>

									<div class="row tablet-small-visible">
										<div class="col-md-12 col-sm-6 col-12">
											<div class="sidebar-banner">
												<?if($banner1){?>
													<img src="<?=$banner1?>" alt="alt">
												<?}else{?>
													<img src="<?=SITE_TEMPLATE_PATH?>/img/static/sidebar-banner/01.jpg" alt="alt">
												<?}?>
												<div class="sidebar-banner_content">
													<span class="sidebar-banner_number"><?=$happy_end?></span>
													<p>
														<?if($banner1_desc){
echo $banner1_desc;
																		   }else{?>
													<?$APPLICATION->IncludeComponent(
														"bitrix:main.include", 
														".default", 
														array(
															"COMPONENT_TEMPLATE" => ".default",
															"AREA_FILE_SHOW" => "file",
															"PATH" => "/local/templates/main/inc/pages/service/number.php",
															"EDIT_TEMPLATE" => ""
														),
														false
													);?>
														<?}?>
												</div>
											</div>
										</div>
										<div class="col-md-12 col-sm-6 col-12 text-center">
											<div class="sidebar-banner">
												<?if($banner2){?>
													<img src="<?=$banner2?>" alt="alt">
												<?}else{?>
													<img src="<?=SITE_TEMPLATE_PATH?>/img/static/sidebar-banner/02.jpg" alt="alt">
												<?}?>
												<div class="sidebar-banner_content">
													<span class="sidebar-banner_title">
													<?$APPLICATION->IncludeComponent(
														"bitrix:main.include", 
														".default", 
														array(
															"COMPONENT_TEMPLATE" => ".default",
															"AREA_FILE_SHOW" => "file",
															"PATH" => "/local/templates/main/inc/pages/service/sidebar_text_app.php",
															"EDIT_TEMPLATE" => ""
														),
														false
													);?>
													</span>
													<a href="#make-appointment" class="main-btn sidebar-banner_btn popup-content">Оставить заявку</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

	