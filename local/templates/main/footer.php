					<?if($dir!='/'){?>
							</div>
						</section>
						<!-- end news-section -->
					<?}?>
					<?if($path[1]=='service'){?>
<?
											  if($path[3]){
											  	if($filter_team){
												  if(count($filter_team)>0){
global $filterTeam;
$filterTeam["ID"] = $filter_team;
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "filterTeam",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "team_in"
	),
	false
);?>
<?}
}
}?>

<?if($filter_benefit){
	if(count($filter_benefit)>0){
global $filterBenefit;
$filterBenefit["ID"] = $filter_benefit;
?>
						<section class="benefits-section ">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list", 
								"benefit", 
								array(
									"ACTIVE_DATE_FORMAT" => "",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "Y",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"CHECK_DATES" => "Y",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "N",
									"DISPLAY_NAME" => "N",
									"DISPLAY_PICTURE" => "N",
									"DISPLAY_PREVIEW_TEXT" => "N",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(
										0 => "",
										1 => "",
									),
									"FILTER_NAME" => "filterBenefit",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "5",
									"IBLOCK_TYPE" => "content",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "N",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "4",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(
										0 => "benefit",
										1 => "",
									),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "SORT",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "ASC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "Y",
									"COMPONENT_TEMPLATE" => "benefit"
								),
								false
							);?>
						</section>
<?}
}?>

<?if($filter_pop){
	if(count($filter_pop)>0){
global $filterPop;
$filterPop["ID"] = $filter_pop;
?>
						<section class="benefits-section ">
					<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_service", 
	array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "filterPop",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "class",
			1 => "fav",
			2 => "main",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "main_service"
	),
	false
);?>
						</section>
<?}
}?>

					<?}?>
					<!-- end our-team_section <-->
					<?if($path[1]!='contact'){?>
					<div class="map-container contact_map-container">
						<div id="map"></div>
						<div class="map-contact">
							<div class="map-contact_logo">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/main/logo.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</div>
							<ul class="map-contact_list">
								<li>
									<span class="map-contact_icon glipf-home"></span>
									<span class="text">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/contact/address.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
</span>
								</li>
								<li>
									<span class="map-contact_icon glipf-call"></span>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/contact/phone.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
								</li>
								<li>
									<span class="map-contact_icon glipf-email"></span>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/local/templates/main/inc/pages/contact/mail.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?>
								</li>
							</ul>
							<a href="#make-appointment" class="map-contact_btn main-btn popup-content">записаться на прием</a>
						</div>
					</div>
					<?}?>
				</main>
				<!-- end main-content -->
				  <?
				  include_once ($_SERVER["DOCUMENT_ROOT"] . SITE_TEMPLATE_PATH . "/inc/templ/footer.php");
				  ?>
				<!-- end main-footer -->
			<div class="scroll-to-top"></div>
		</div>
		<!-- END GLOBAL-WRAPPER -->	
		<div class="zoom-anim-dialog mfp-hide" id="callback">
			<form action="#"  class="callback-form">
					<div class="callback-form_title">
						Оставьте свои данные
						<small>и мы свяжемся с вами в ближайшее время</small>
					</div>
					<div class="form-group">
						<input type="text" class="form-input" name="name_f" placeholder="ФИО"  id="name">
					</div>
					<div class="form-group">
						<input type="tel" class="form-input" name="phone_f" placeholder="Телефон">
					</div>
					<div class="form-group">
						<div class="g-recaptcha" style="margin: 0 auto;" data-sitekey="<?= htmlspecialchars(argument_recaptcha_sitekey(), ENT_QUOTES) ?>"></div>
					</div>
					<div class="callback-form_policy">
						<label class="wrapper-unified-checkbox">
							<input value="y" type="checkbox" name="checkbox_f" class="input-checkbox" tabindex="0">
							<span class="checkbox-text checkbox-text_mod">
								Я согласен на обработку персональных данных в соответствии с нашей <a target="_blank" href="/upload/politics-argument-uk.pdf" tabindex="0">политикой конфиденциальности</a>
							</span>
						</label>
					</div>
					<div class="err_msg"></div>
					<input type="submit" class="form-submit_btn main-btn" value="Перезвоните мне">
					<button  type="button" class="mfp-close">×</button>
			</form>
		</div>
		<!-- end callback -->
		<div class="zoom-anim-dialog mfp-hide" id="make-appointment">
			<form action="#"  class="callback-form">
					<div class="callback-form_title">
						Оставьте свои данные
						<small>
							и у кажите по какому вопросу вам
							нужна консультация, мы свяжемся с вами и 
							подберем самое удобное время для встречи
						</small>
					</div>
					<div class="form-group">
						<input type="text" class="form-input" name="name_f" placeholder="ФИО" id="name">
					</div>
					<div class="form-group">
						<input type="tel" class="form-input" name="phone_f" placeholder="Телефон">
					</div>
					<div class="form-group">
						<input type="email" class="form-input" name="email_f" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-input" name="text_f" placeholder="Какой вопрос Вас интересует?">
					</div>
					<div class="form-group">
						<div class="g-recaptcha" style="margin: 0 auto;" data-sitekey="<?= htmlspecialchars(argument_recaptcha_sitekey(), ENT_QUOTES) ?>"></div>
					</div>
					<div class="callback-form_policy">
						<label class="wrapper-unified-checkbox">
							<input value="y" type="checkbox" name="checkbox_f" class="input-checkbox" tabindex="0">
							<span class="checkbox-text checkbox-text_mod">
								Я согласен на обработку персональных данных в соответствии с нашей <a target="_blank" href="/upload/politics-argument-uk.pdf" tabindex="0">политикой конфиденциальности</a>
							</span>
						</label>
					</div>
					<div class="err_msg"></div>
					<input type="submit" class="form-submit_btn main-btn" value="Перезвоните мне">

					<button  type="button" class="mfp-close">×</button>
			</form>
		</div>
		<!-- end make-appointment -->
		<link href="<?=SITE_TEMPLATE_PATH?>/css/min.css" rel="stylesheet" />
		<link href="<?=SITE_TEMPLATE_PATH?>/css/main.css" rel="stylesheet" />
		<script src="<?=SITE_TEMPLATE_PATH?>/js/min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts_form.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(29727740, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/29727740" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>
</html>
