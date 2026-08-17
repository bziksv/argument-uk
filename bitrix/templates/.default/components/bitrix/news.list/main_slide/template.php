<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="main-slider">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="main-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="main-slide_content" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
				<div class="container">
					<div class="row">
						<div class="offset-xl-8 offset-lg-7 offset-md-6 col-xl-4 col-lg-5  col-md-6">
							<?if($arItem["PROPERTIES"]["form"]["VALUE"]){}else{?>
							<form action="#" class="main-form">
								<div class="main-form_title">
									Наши юристы 
									проконсультируют Вас по 
									любым вопросам
								</div>
								<div class="main-form_group">
									<input type="text" class="main-form_input" name="name" placeholder="ФИО">
								</div>
								<div class="main-form_group">
									<input type="tel" class="main-form_input"  name="phone" placeholder="Телефон">
								</div>
								<div class="main-form_policy">
									<label class="wrapper-unified-checkbox">
										<input value="y" type="checkbox" name="checkbox" class="input-checkbox">
										<span class="checkbox-text">
											Я согласен на обработку персональных данных в соответсвии с нашей <a target="_blank" href="/upload/politics-argument-uk.pdf">политикой конфиденциальности</a>
										</span>
									</label>
									<div class="err_msg"></div>
									<input type="submit" class="main-form_submit main-btn" value="Оставить заявку">
								</div>
							</form>
							<?}?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>