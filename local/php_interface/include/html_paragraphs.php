<?php

/**
 * Убирает закрывающие </p>, перед которыми нет открытого <p>.
 * Так в HTML5 разбирает страницу браузер: лишний конец абзаца — ошибка валидатора
 * «No p element in scope but a p end tag seen».
 */
function argument_html_strip_stray_p(string $html): string
{
	if ($html === '' || stripos($html, '</p>') === false) {
		return $html;
	}

	$closesP = [
		'address' => true, 'article' => true, 'aside' => true, 'blockquote' => true,
		'center' => true, 'details' => true, 'dialog' => true, 'dir' => true,
		'div' => true, 'dl' => true, 'fieldset' => true, 'figcaption' => true,
		'figure' => true, 'footer' => true, 'form' => true,
		'h1' => true, 'h2' => true, 'h3' => true, 'h4' => true, 'h5' => true, 'h6' => true,
		'header' => true, 'hgroup' => true, 'hr' => true, 'listing' => true,
		'main' => true, 'menu' => true, 'nav' => true, 'ol' => true, 'p' => true,
		'plaintext' => true, 'pre' => true, 'search' => true, 'section' => true,
		'summary' => true, 'table' => true, 'ul' => true, 'xmp' => true,
	];
	$void = [
		'area' => true, 'base' => true, 'br' => true, 'col' => true, 'embed' => true,
		'hr' => true, 'img' => true, 'input' => true, 'link' => true, 'meta' => true,
		'param' => true, 'source' => true, 'track' => true, 'wbr' => true,
	];
	$raw = [
		'script' => true, 'style' => true, 'textarea' => true, 'title' => true,
		'xmp' => true, 'iframe' => true, 'noframes' => true,
	];
	$scopeBarrier = [
		'button' => true, 'applet' => true, 'caption' => true, 'html' => true,
		'table' => true, 'td' => true, 'th' => true, 'marquee' => true,
		'object' => true, 'template' => true,
	];

	$parts = preg_split(
		'/(<!--.*?-->|<[a-zA-Z\/!][^"\'>]*(?:"[^"]*"|\'[^\']*\')*[^>]*>)/s',
		$html,
		-1,
		PREG_SPLIT_DELIM_CAPTURE
	);
	if ($parts === false) {
		return $html;
	}

	$out = '';
	$stack = [];
	$rawUntil = null;

	$pInScope = static function (array $stack) use ($scopeBarrier): bool {
		for ($i = count($stack) - 1; $i >= 0; $i--) {
			$name = $stack[$i];
			if ($name === 'p') {
				return true;
			}
			if (isset($scopeBarrier[$name])) {
				return false;
			}
		}

		return false;
	};

	$closeP = static function (array &$stack) use ($scopeBarrier): void {
		for ($i = count($stack) - 1; $i >= 0; $i--) {
			if ($stack[$i] === 'p') {
				array_splice($stack, $i, 1);
				return;
			}
			if (isset($scopeBarrier[$stack[$i]])) {
				return;
			}
		}
	};

	foreach ($parts as $part) {
		if ($part === '') {
			continue;
		}

		if ($rawUntil !== null) {
			$out .= $part;
			if (preg_match('/^<\/' . preg_quote($rawUntil, '/') . '\b/i', $part)) {
				for ($i = count($stack) - 1; $i >= 0; $i--) {
					if ($stack[$i] === $rawUntil) {
						array_splice($stack, $i, 1);
						break;
					}
				}
				$rawUntil = null;
			}
			continue;
		}

		if ($part[0] !== '<' || (isset($part[1]) && $part[1] === '!')) {
			$out .= $part;
			continue;
		}

		if (!preg_match('/^<\s*(\/)?\s*([a-zA-Z0-9]+)/', $part, $match)) {
			$out .= $part;
			continue;
		}

		$isEnd = $match[1] === '/';
		$name = strtolower($match[2]);

		if ($isEnd) {
			if ($name === 'p' && !$pInScope($stack)) {
				continue;
			}
			$out .= $part;
			if ($name === 'p') {
				$closeP($stack);
			} else {
				for ($i = count($stack) - 1; $i >= 0; $i--) {
					if ($stack[$i] === $name) {
						array_splice($stack, $i);
						break;
					}
				}
			}
			continue;
		}

		if (isset($closesP[$name])) {
			$closeP($stack);
		}
		$out .= $part;
		$selfClose = (bool)preg_match('/\/\s*>$/', $part);
		if (!$selfClose && !isset($void[$name])) {
			$stack[] = $name;
			if (isset($raw[$name])) {
				$rawUntil = $name;
			}
		}
	}

	return $out;
}

/**
 * Анонс в карточке. Если в тексте уже есть свой абзац или блок, вторую
 * обёртку <p> не добавляем: вложенный </p> валидатор считает лишним.
 */
function argument_html_preview_paragraph(string $html): string
{
	if (preg_match('/<\s*(p|div|ul|ol|li|h[1-6]|table|blockquote|section|article|figure|dl)\b/i', $html)) {
		return $html;
	}

	return '<p>' . $html . '</p>';
}
