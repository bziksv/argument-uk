<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

require_once __DIR__ . '/legal_helpers.php';

function argumentLegalThirdPartiesData(): array
{
	static $data = null;
	if ($data === null) {
		$data = include __DIR__ . '/third_parties_data.php';
	}

	return $data;
}

function argumentLegalRenderThirdPartyConsentLine(array $service): string
{
	$parts = [argument_legal_var($service['name'])];
	if (!empty($service['inn'])) {
		$parts[0] .= ' (ИНН ' . argument_legal_var($service['inn']) . ')';
	}

	$description = $service['link_label'];
	if (!empty($service['suffix'])) {
		$description .= ', ' . $service['suffix'];
	}

	return $parts[0] . ' (' . argument_legal_var($description) . ') — '
		. '<a href="' . argument_legal_h($service['url']) . '" target="_blank" rel="noopener">'
		. argument_legal_var($service['url']) . '</a>';
}

function argumentLegalRenderThirdPartyPolicyLine(array $service): string
{
	$parts = [argument_legal_var($service['name'])];
	if (!empty($service['inn'])) {
		$parts[0] .= ' (ИНН ' . argument_legal_var($service['inn']) . ')';
	}

	$line = $parts[0] . ' — ';
	$line .= '<a href="' . argument_legal_h($service['url']) . '" target="_blank" rel="noopener">'
		. argument_legal_var($service['link_label']) . '</a>';
	if (!empty($service['suffix'])) {
		$line .= ', ' . argument_legal_var($service['suffix']);
	}

	return $line;
}

function argumentLegalRenderThirdPartyRecommendationLine(array $block): string
{
	$links = [];
	foreach ($block['urls'] as $url) {
		$links[] = '<a href="' . argument_legal_h($url) . '" target="_blank" rel="noopener">'
			. argument_legal_var($url) . '</a>';
	}

	return implode(', ', $links) . ' — ' . argument_legal_var($block['text']);
}
