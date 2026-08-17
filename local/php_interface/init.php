<?php
/**
 * reCAPTCHA v2 site key.
 * On localhost Google rejects domain-bound keys → use Google's official test key.
 */
if (!function_exists('argument_recaptcha_sitekey')) {
	function argument_recaptcha_sitekey()
	{
		$host = (string)($_SERVER['HTTP_HOST'] ?? '');
		if (preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/i', $host)) {
			// https://developers.google.com/recaptcha/docs/faq#id-like-to-run-automated-tests-with-recaptcha.-what-should-i-do
			return '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
		}
		return '6LeZ2IotAAAAAHOYZDgw-4DKwfxIrkLg0zW0IG6J';
	}
}
