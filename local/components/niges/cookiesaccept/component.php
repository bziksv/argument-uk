<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

if (!CModule::IncludeModule('niges.cookiesaccept')) {
	return;
}

$arResult = CNigesCookiesAcceptHelper::loadSettings(SITE_ID);

if ($arResult['TEXTBTN'] === '') {
	$arResult['TEXTBTN'] = 'Принять';
}

$cookiePolicyUrl = '/legal/argument-cookie-policy/';

if ($arResult['MAINTEXT'] === '') {
	$arResult['MAINTEXT'] = CNigesCookiesAcceptHelper::sanitizeHtml(
		'Для корректной работы сайта и показа релевантной рекламы мы используем '
		. '<a href="' . $cookiePolicyUrl . '" target="_blank" rel="noopener noreferrer">cookie-файлы</a>. '
		. 'Продолжая пользоваться сайтом, вы соглашаетесь с нашей политикой использования файлов cookies. '
		. 'Вы можете отключить сохранение cookies в настройках браузера.'
	);
} else {
	$arResult['MAINTEXT'] = str_replace(
		[
			'/upload/cookies-argument-uk.pdf',
			'http://argument-uk.ru/upload/cookies-argument-uk.pdf',
			'https://argument-uk.ru/upload/cookies-argument-uk.pdf',
		],
		$cookiePolicyUrl,
		$arResult['MAINTEXT']
	);
}

$arResult['COOKIE_NAME'] = CNigesCookiesAcceptHelper::getCookieName($arResult['TEXTVER']);
$arResult['OPACITY'] = round(((int)$arResult['BTNOPACITY']) / 100, 2);

$this->IncludeComponentTemplate();
