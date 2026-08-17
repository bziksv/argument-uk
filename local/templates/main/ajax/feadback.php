<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("form");
   CModule::IncludeModule("iblock");

$clear=array();
foreach ($_POST as $key=>$arPost) {
    $clear[$key]=trim(htmlspecialchars($arPost));
}


$arEventFields = array(
	"NAME"                  => $clear["name"],
	"MAIL"                  => $clear["mail"],
	"PHONE"                  => $clear["phone"],
	"MASS"                  => $clear["text"],
);
CEvent::Send("FEADBACK", 's1', $arEventFields);


	$el = new CIBlockElement;
	
    $PROP = array();
    $PROP["mail"] = $clear['mail'];
    $PROP["phone"] = $clear['phone'];


    $arLoadProductArray = Array(
        "MODIFIED_BY"    => $USER->GetID(),
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID"      => 6,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $clear["name"],
        "PREVIEW_TEXT"           => $clear["text"],
        "ACTIVE"         => "Y"
    );

    $el->Add($arLoadProductArray);


?>


	<div class="mass"  style="color:green;margin: -10px 0 15px 21px;">Ваша заявка принята!</div>
