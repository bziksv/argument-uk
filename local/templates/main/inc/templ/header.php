<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
?>
				<header class="ui-header">
					<div class="main-head">
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-3 col-md-4 col-12">
									<div class="head-logo">
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
								</div>
								<div class="col-lg-6 order-lg-3 col-md-8 col-12">
									<div class="row align-items-end">
										<div class="col-sm-6 col-12">
											<div class="head-adress">
												<span class="main-head_icon glipf-home">
												</span>
												<div class="head-adress_text">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/contact/address.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
												</div>
											</div>
											<a href="#make-appointment" class="main-btn popup-content">записаться на прием</a>
										</div>
										<div class="col-sm-6 col-12">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/phone.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
											<a href="#callback" class="main-btn popup-content">заказать звонок</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 order-lg-2 col-md-12 col-12 col-mod-left">
									<div class="head_company-motto">
										<span class="company-motto_top-text">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/text_1.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
										</span>
										<span class="company-motto_bottom-text">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/text_2.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="head_bottom-panel">
						<div class="container">
							<div class="hamburger-and-menu">
								<div class="hamburger hamburger--spring">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
<?$APPLICATION->IncludeComponent("bitrix:menu", "mob_menu", Array(
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
<?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
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
							<ul class="scroll-hidden_block">
								<li>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/phone_2.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
								</li>
								<li><a href="#callback" class="main-btn callback-btn popup-content">заказать звонок</a></li>
							</ul>
						</div>
					</div>
					<!-- end head_bottom-panel -->
				</header>