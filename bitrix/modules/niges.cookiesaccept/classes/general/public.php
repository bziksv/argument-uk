<?php
class CNigesCookiesAcceptPublic
{
	/**
	 * Inject cookie notice at the end of page generation.
	 */
	public static function OnEpilog()
	{
		global $APPLICATION;

		if (defined('ADMIN_SECTION') && ADMIN_SECTION === true) {
			return;
		}

		if (!CModule::IncludeModule(cookiesaccept_MODULE_ID)) {
			return;
		}

		if (COption::GetOptionString(cookiesaccept_MODULE_ID, 'ACTIVE', 'N', SITE_ID) !== 'Y') {
			return;
		}

		if (defined('PUBLIC_AJAX_MODE') && PUBLIC_AJAX_MODE === true) {
			return;
		}
		if (isset($_REQUEST['ajax']) && (string)$_REQUEST['ajax'] !== '') {
			return;
		}
		if (isset($_REQUEST['bxajaxid']) && (string)$_REQUEST['bxajaxid'] !== '') {
			return;
		}

		ob_start();
		$APPLICATION->IncludeComponent(
			'niges:cookiesaccept',
			'.default',
			array(),
			false,
			array('HIDE_ICONS' => 'Y')
		);
		$banner = ob_get_clean();
		if (!is_string($banner) || trim($banner) === '') {
			return;
		}

		$page = ob_get_contents();
		if (is_string($page) && preg_match('/<\/body>/i', $page)) {
			ob_clean();
			echo preg_replace('/<\/body>/i', $banner . '</body>', $page, 1);
			return;
		}

		echo $banner;
	}
}
