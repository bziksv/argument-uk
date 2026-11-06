<?php

require_once __DIR__ . '/include/html_paragraphs.php';
require_once __DIR__ . '/include/canonical.php';

AddEventHandler('main', 'OnEpilog', 'argument_set_canonical');

AddEventHandler('main', 'OnEndBufferContent', static function (&$content): void {
	if (!is_string($content) || $content === '') {
		return;
	}
	if (defined('ADMIN_SECTION') && ADMIN_SECTION === true) {
		return;
	}
	if (stripos($content, '</p>') === false || stripos($content, '<html') === false) {
		return;
	}
	$content = argument_html_strip_stray_p($content);
	$content = argument_html_merge_duplicate_rel($content);
});
