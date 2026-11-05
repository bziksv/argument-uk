<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
//$APPLICATION->SetPageProperty("not_show_nav_chain", "Y");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("title", "Ошибка 404");
$APPLICATION->SetPageProperty("description", "Запрашиваемая страница не существует, была удалена или перемещена по другому адресу.");
$APPLICATION->AddChainItem('Ошибка 404', '' ,  true);
$APPLICATION->SetTitle("Ошибка 404");?>



<div class="contact-section gray-section">

	<div class="container">

		
		<article class="services-detailed">
			<h2 class="title-left">Ошибка 404</h2>
			
			<p>Запрашиваемая страница не существует, была удалена или перемещена по другому адресу. <a href="/">Главная страница</a></p>
			
		</article>
	</div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>