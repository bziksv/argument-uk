<?php

/**
 * Самоссылающийся canonical, если страница его ещё не задала.
 * ShowLink в шаблоне подставляет свойство в момент сборки буфера,
 * а OnEpilog срабатывает раньше, поэтому ссылка попадает в head.
 */
function argument_set_canonical(): void
{
	if (defined('ADMIN_SECTION') && ADMIN_SECTION === true) {
		return;
	}
	if (defined('ERROR_404') && ERROR_404 === 'Y') {
		return;
	}

	global $APPLICATION;
	if (!is_object($APPLICATION)) {
		return;
	}
	if ($APPLICATION->GetPageProperty('canonical')) {
		return;
	}

	$request = \Bitrix\Main\Context::getCurrent()->getRequest();
	if ($request->isAjaxRequest()) {
		return;
	}

	$host = strtolower((string)$request->getHttpHost());
	$host = preg_replace('/:\d+$/', '', $host);
	if ($host === '' || $host === null) {
		return;
	}

	if ($host === 'argument-uk.ru' || $host === 'www.argument-uk.ru') {
		$scheme = 'https';
		$host = 'argument-uk.ru';
	} else {
		$scheme = $request->isHttps() ? 'https' : 'http';
	}

	$path = $APPLICATION->GetCurPage(false);
	if ($path === '' || $path[0] !== '/') {
		return;
	}

	$canonical = $scheme . '://' . $host . $path;
	$APPLICATION->SetPageProperty('canonical', htmlspecialchars($canonical, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
}
