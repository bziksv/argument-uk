<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("form");
   CModule::IncludeModule("iblock");

$clear=array();
foreach ($_POST as $key=>$arPost) {
    $clear[$key]=trim(htmlspecialchars($arPost));
}

$arEventFields = array(
	"NAME"                  => $clear["name"],
	"PHONE"                  => $clear["phone"],
);
CEvent::Send("CALLBACK", 's1', $arEventFields);


	$el = new CIBlockElement;
	
    $PROP = array();
    $PROP["phone"] = $clear['phone'];


    $arLoadProductArray = Array(
        "MODIFIED_BY"    => $USER->GetID(),
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID"      => 7,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $clear["name"],
        "ACTIVE"         => "Y"
    );

    $el->Add($arLoadProductArray);


?>


	<div class="mass"  style="color:green;">Ваша заявка принята!</div>
