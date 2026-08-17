<?php
/**
 * reCAPTCHA v3
 * Site key (public). Secret — optional file local/php_interface/recaptcha_secret.php
 * returning string secret (gitignored).
 */
if (!function_exists('argument_recaptcha_is_local')) {
	function argument_recaptcha_is_local()
	{
		$host = (string)($_SERVER['HTTP_HOST'] ?? '');
		return (bool)preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/i', $host);
	}
}

if (!function_exists('argument_recaptcha_sitekey')) {
	function argument_recaptcha_sitekey()
	{
		return '6LeZ2IotAAAAAHOYZDgw-4DKwfxIrkLg0zW0IG6J';
	}
}

if (!function_exists('argument_recaptcha_secret')) {
	function argument_recaptcha_secret()
	{
		static $secret = null;
		if ($secret !== null) {
			return $secret;
		}
		$file = __DIR__ . '/recaptcha_secret.php';
		if (is_readable($file)) {
			$secret = (string)include $file;
			return $secret;
		}
		$secret = '';
		return $secret;
	}
}

if (!function_exists('argument_recaptcha_verify')) {
	/**
	 * @return true|string true on success, error message on failure
	 */
	function argument_recaptcha_verify($token, $action = '')
	{
		if (argument_recaptcha_is_local()) {
			return true;
		}

		$token = trim((string)$token);
		if ($token === '') {
			return 'Подтвердите, что вы не робот (обновите страницу и попробуйте снова).';
		}

		$secret = argument_recaptcha_secret();
		if ($secret === '') {
			// Secret not configured yet — accept non-empty client token.
			return true;
		}

		$post = http_build_query(array(
			'secret' => $secret,
			'response' => $token,
			'remoteip' => (string)($_SERVER['REMOTE_ADDR'] ?? ''),
		));

		$ctx = stream_context_create(array(
			'http' => array(
				'method' => 'POST',
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'content' => $post,
				'timeout' => 8,
			),
		));

		$raw = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $ctx);
		if ($raw === false) {
			return 'Не удалось проверить капчу. Попробуйте позже.';
		}

		$data = json_decode($raw, true);
		if (!is_array($data) || empty($data['success'])) {
			return 'Проверка капчи не пройдена.';
		}

		if ($action !== '' && isset($data['action']) && $data['action'] !== $action) {
			return 'Проверка капчи не пройдена.';
		}

		$score = isset($data['score']) ? (float)$data['score'] : 0;
		if ($score < 0.5) {
			return 'Проверка капчи не пройдена.';
		}

		return true;
	}
}
