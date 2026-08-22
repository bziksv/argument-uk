	<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	?>
 				<footer class="main-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-12 main-footer_left" style="padding-top: 2em;">
								<div class="footer-logo">
									<a href="/">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/logo.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</a>
								</div>
								<div class="footer_policy-copyright">

									<div class="copyright">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/copy.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
									</div>
								</div>
								<div class="studio">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/studio.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
							</div>
							<div class="col-lg-8 col-12 main-footer_right">
								<div class="row">
									<div class="column">
										<div class="footer-title">Услуги юридическим лицам</div>
										<ul class="footer-menu">
                    <?$APPLICATION->IncludeComponent(
  "bitrix:news.list", 
  "main_service_bottom", 
  array(
    "ACTIVE_DATE_FORMAT" => "",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "N",
    "DISPLAY_PICTURE" => "N",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(
      0 => "",
      1 => "",
    ),
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "4",
    "IBLOCK_TYPE" => "content",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "3",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "",
    "PARENT_SECTION" => "3",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(
      0 => "main",
      1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "ASC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "main_service_top"
  ),
  false
);?>
											<li><a href="/service/">Другие услуги</a></li>
										</ul>
									</div>
									<div class="column">
										<div class="footer-title">Услуги физическим лицам</div>
										<ul class="footer-menu">
                    <?$APPLICATION->IncludeComponent(
  "bitrix:news.list", 
  "main_service_bottom", 
  array(
    "ACTIVE_DATE_FORMAT" => "",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "N",
    "DISPLAY_PICTURE" => "N",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(
      0 => "",
      1 => "",
    ),
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "4",
    "IBLOCK_TYPE" => "content",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "3",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "",
    "PARENT_SECTION" => "6",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(
      0 => "main",
      1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "ASC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "main_service_top"
  ),
  false
);?>
										</ul>
									</div>
									<div class="column">
<?$APPLICATION->IncludeComponent("bitrix:menu", "f_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
									</div>
								</div>
								<div style="border-top: 1px solid #ccdae9; margin-top: 10px; padding-top: 10px; color: #ccdae9; font-size: .875rem;">Мы используем файлы <a target="_blank" style="color: #ccdae9; text-decoration: underline;" href="/legal/argument-cookie-policy/">cookies</a> для персонализации рекламы и анализа трафика. Продолжая работу с сайтом, вы даёте <a target="_blank" style="color: #ccdae9; text-decoration: underline;" href="/legal/argument-pdn-consent/">согласие на обработку персональных данных</a> и подтверждаете, что ознакомлены с нашей <a style="color: #ccdae9; text-decoration: underline;" target="_blank" href="/legal/argument-personal-data-policy/">политикой обработки персональных данных</a> и <a style="color: #ccdae9; text-decoration: underline;" target="_blank" href="/legal/argument-recommendation-technologies/">правилами использования рекомендательных технологий</a>. Вы можете отключить cookies в настройках браузера.</div>
							</div>
						</div>
					</div>
				</footer>