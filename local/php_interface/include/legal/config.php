<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

return [
	'operator_name' => 'ООО Юридическая компания «Аргумент»',
	'operator_short' => 'ООО ЮК «Аргумент»',
	'operator_legal_form' => 'ООО ЮК «Аргумент»',
	'inn' => '3662157200',
	'ogrn' => '1103668028529',
	'site' => 'https://argument-uk.ru/',
	'site_host' => 'argument-uk.ru',
	'email' => 'ukargument@mail.ru',
	'phone' => '+7 (473) 230 00 49',
	'phone_tel' => '+74732300049',
	'address_legal' => '394088, Россия, Воронежская обл., г. Воронеж, ул. Владимира Невского, д. 19, кв. 22',
	'address_office' => 'г. Воронеж, ул. Кольцовская, д. 24«Б»',
	'urls' => [
		'cookie' => '/legal/argument-cookie-policy/',
		'recommendation' => '/legal/argument-recommendation-technologies/',
		'personal_data' => '/legal/argument-personal-data-policy/',
		'consent' => '/legal/argument-pdn-consent/',
	],
	'third_parties' => include __DIR__ . '/third_parties_data.php',
];
