<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use \Bitrix\Main\Localization\Loc;
Loc::LoadMessages(__FILE__);
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
$path=explode('/', $dir);
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta name="keywords" content="" />
		<!--<meta name="description" content="" />-->
		<meta content="browserconfig.xml" name="msapplication-config" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?$APPLICATION->ShowTitle()?>
		</title>
		<?$APPLICATION->ShowHead();?>
		<link href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico" rel="icon" type="image/png" />
		<link href="<?=SITE_TEMPLATE_PATH?>/img/favicon.png" rel="icon" type="image/png" />
		<link href="<?=SITE_TEMPLATE_PATH?>/img/apple-touch-icon.png" rel="apple-touch-icon" />
		<style>body{opacity: 0;}</style>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	</head>
	<body>
		<!--[if lt IE 10]>
		<p class="browsehappy"><br>Вы используете <strong>устаревший</strong> браузер. 
		Пожалуйста, <a href="http://browsehappy.com/">обновите его</a> для корректного 
		отображения сайтов.</p>
		<![endif]-->
		  <div id="panel">
		    <?$APPLICATION->ShowPanel();?>
		  </div>
		<div class="global-wrapper">
			<div class="wrapper-loader">
				<div class="preloader">
					<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
				</div>
			</div>
				  <?
				  include_once ($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/inc/templ/header.php");
				  ?>
				<!-- END UI-HEADER -->
				<main class="main-content">

								<?if($path[1]=='service' && $path[3]!=''){?>
<?
global $filterSlider;
global $banner1;
global $banner1_desc;
global $banner2;
global $filter_team;
global $filter_benefit;
global $filter_pop;

global $nameServ;
$happy_end='';
$banner1_desc='';
CModule::IncludeModule("iblock");
$arSelect = Array("ID", "NAME", "PROPERTY_happy_end", "PROPERTY_slide", "PROPERTY_team", "PROPERTY_name", "PROPERTY_banner_1", "PROPERTY_benefit", "PROPERTY_pop", "PROPERTY_banner1_desc", "PROPERTY_banner_2");
$arFilter = Array("IBLOCK_ID"=>4, "CODE"=>$path[3], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>9999), $arSelect);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
$happy_end = $arFields["PROPERTY_HAPPY_END_VALUE"];
	if($arFields["PROPERTY_TEAM_VALUE"]){
	$filter_team[$arFields["PROPERTY_TEAM_VALUE"]] = $arFields["PROPERTY_TEAM_VALUE"];
}
	if($arFields["PROPERTY_POP_VALUE"]){
	$filter_pop[$arFields["PROPERTY_POP_VALUE"]] = $arFields["PROPERTY_POP_VALUE"];
}
	if($arFields["PROPERTY_BENEFIT_VALUE"]){
	$filter_benefit[$arFields["PROPERTY_BENEFIT_VALUE"]] = $arFields["PROPERTY_BENEFIT_VALUE"];
}
	if($arFields["PROPERTY_NAME_VALUE"]){
		$nameServ = $arFields["~PROPERTY_NAME_VALUE"];
	}else{
		$nameServ = $arFields["NAME"];
	}
$banner1_desc =  $arFields["PROPERTY_BANNER1_DESC_VALUE"];
$filter_Slider[$arFields["PROPERTY_SLIDE_VALUE"]] =  $arFields["PROPERTY_SLIDE_VALUE"];
$banner_1 = CFile::ResizeImageGet($arFields["PROPERTY_BANNER_1_VALUE"], array('width'=>278, 'height'=>410), BX_RESIZE_IMAGE_PROPORTIONAL, true); 

$banner1 = $banner_1["src"];

$banner_2 = CFile::ResizeImageGet($arFields["PROPERTY_BANNER_2_VALUE"], array('width'=>278, 'height'=>410), BX_RESIZE_IMAGE_PROPORTIONAL, true); 

$banner2 = $banner_2["src"];

}
					  if($filter_Slider){
$filterSlider["ID"] =  $filter_Slider;
					  }
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_slide_in", 
	array(
		"NAME_S" => $nameServ,
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
		"FILTER_NAME" => "filterSlider",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
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
		"COMPONENT_TEMPLATE" => "main_slide_in"
	),
	false
);?>
					<?}else{?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_slide", 
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
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "form",
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
		"COMPONENT_TEMPLATE" => "main_slide"
	),
	false
);?>
					<?}?>
					<!-- end main-slider -->
					<?if($dir!='/'){?>
						<section class="contact-section gray-section">
							<div class="container">
								<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
									"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
										"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
										"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
									),
									false
								);?>
								<?if($path[1]=='news'){?>
									<h1>Анонсы <strong>новостей</strong></h1>
								<?}?>
					<?}?>
							