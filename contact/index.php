<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контакты ЮК \"Аргумент\" | Контактные данные для связи");
$APPLICATION->SetPageProperty("title", "Контакты ЮК \"Аргумент\"");
$APPLICATION->SetTitle("Контакты");
?>
<h1>Наши контакты</h1>
<?
include($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/inc/pages/contact/index.php');
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>