<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$sections = array();
$dbSections = CIBlockSection::GetList(
	array("LEFT_MARGIN" => "ASC"),
	array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y", "GLOBAL_ACTIVE" => "Y"),
	false
);
while ($section = $dbSections->GetNext())
{
	$sections[$section["ID"]] = $section;
}

$tabs = array();
foreach ($arResult["ITEMS"] as $item)
{
	$sectionId = (int)$item["IBLOCK_SECTION_ID"];
	if (!isset($sections[$sectionId]))
	{
		continue;
	}

	$section = $sections[$sectionId];
	$root = $section;
	while (!empty($root["IBLOCK_SECTION_ID"]) && isset($sections[$root["IBLOCK_SECTION_ID"]]))
	{
		$root = $sections[$root["IBLOCK_SECTION_ID"]];
	}

	$rootId = (int)$root["ID"];
	if (!isset($tabs[$rootId]))
	{
		$picture = $root["PICTURE"];
		if (is_array($picture))
		{
			$picture = $picture["ID"];
		}
		$root["PICTURE"] = $picture ? CFile::GetPath($picture) : "";
		$tabs[$rootId] = array(
			"SECTION" => $root,
			"GROUPS" => array(),
		);
	}

	if ((int)$section["ID"] === $rootId)
	{
		$groupId = 0;
		$groupSection = null;
	}
	else
	{
		$group = $section;
		while ((int)$group["IBLOCK_SECTION_ID"] !== $rootId && isset($sections[$group["IBLOCK_SECTION_ID"]]))
		{
			$group = $sections[$group["IBLOCK_SECTION_ID"]];
		}
		$groupId = (int)$group["ID"];
		$groupSection = $group;
	}

	if (!isset($tabs[$rootId]["GROUPS"][$groupId]))
	{
		$tabs[$rootId]["GROUPS"][$groupId] = array(
			"SECTION" => $groupSection,
			"SORT" => $groupSection ? (int)$groupSection["LEFT_MARGIN"] : 0,
			"ITEMS" => array(),
		);
	}
	$tabs[$rootId]["GROUPS"][$groupId]["ITEMS"][] = $item;
}

foreach ($tabs as &$tab)
{
	uasort($tab["GROUPS"], function ($a, $b) {
		return $a["SORT"] <=> $b["SORT"];
	});
}
unset($tab);

uasort($tabs, function ($a, $b) {
	return (int)$a["SECTION"]["LEFT_MARGIN"] <=> (int)$b["SECTION"]["LEFT_MARGIN"];
});

$arResult["SEC"] = $tabs;
