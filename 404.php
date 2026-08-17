<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
//$APPLICATION->SetPageProperty("not_show_nav_chain", "Y");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
define("HIDE_SIDEBAR", true);


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->AddChainItem('Страница не найдена', '' ,  true);
$APPLICATION->SetTitle("Страница не найдена");?>



<div class="contact-section gray-section">

	<div class="container">

		
		<article class="services-detailed">
			<h2 class="title-left">404 Not Found</h2>
			
			<p>Ошибка 404. «Страница не найдена» <a href="/" >Главная страница</a></p>	
			
		</article>
	</div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>