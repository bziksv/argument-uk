<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

function argument_legal_h($value): string
{
	return htmlspecialcharsbx((string) $value);
}

function argument_legal_var($value): string
{
	return argument_legal_h($value);
}

function argument_legal_link(string $url, ?string $text = null): string
{
	$text = $text ?? $url;

	return '<a href="' . argument_legal_h($url) . '" target="_blank" rel="noopener">' . argument_legal_var($text) . '</a>';
}

function argument_legal_mailto(string $email): string
{
	return '<a href="mailto:' . argument_legal_h($email) . '">' . argument_legal_var($email) . '</a>';
}

function argument_legal_tel(string $phone, string $telHref): string
{
	return '<a href="tel:' . argument_legal_h($telHref) . '">' . argument_legal_var($phone) . '</a>';
}

function argument_legal_internal_link(string $path, string $host): string
{
	return '<a href="' . argument_legal_h($path) . '">' . argument_legal_var($host . $path) . '</a>';
}
