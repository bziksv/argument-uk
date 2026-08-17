<?
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Application; 
$dir = Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory();
$path = explode("/", $dir);
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
if ($path['1'] != 'mortgage' && $path['1'] != 'documents') {
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/swiper.min.css");
}
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/media.css");
Asset::getInstance()->addString('<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>');
Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
if ($path['1'] != 'mortgage' && $path['1'] != 'documentss') {
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/swiper.min.js");
}
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");
if ($path['1'] != 'documents') {
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/parallax.min.js");
}
if ($path['1'] == 'location') {
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts_location.js");
    Asset::getInstance()->addString('<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhUJTG3XlAtZSS1CTS66Sz6wIIAlJpo04&callback=initMap"></script>');
}
if ($path[2] == 'webcam') {
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/webcam.js");
}