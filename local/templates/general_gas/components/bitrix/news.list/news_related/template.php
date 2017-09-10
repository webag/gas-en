<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<section class="s-inner-related <? echo (empty($arResult["ITEMS"]) ? 's-inner-related--noitems' : '')?>">
	<? if (!empty($arResult["ITEMS"])) : ?>
		<div class="container">
			<p class="h2">Вам будет интересно</p>

			<div class="row">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="grid-3 grid-6_l grid-12_xs" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="intro">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="intro-thumb intro-thumb--nooverlay">
								<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
									<?
									$photo_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 288, "height" => 220), BX_RESIZE_IMAGE_EXACT, true);
									?>
									<div class="intro-thumb__img" style="background-image: url('<?=$photo_img["src"]?>')"></div>
								<? endif; ?>
							</a>
							<div class="intro-content">
								<h5 class="lead"><a href="#"><?=$arItem["NAME"]?></a></h5>
								<div class="intro-content__prevtext">
									<p><?=$arItem["PREVIEW_TEXT"]?></p>
								</div>
								<div class="intro-views">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/eye.svg" alt="eye">
									<span><?=$arItem["SHOW_COUNTER"]?></span>
								</div>
							</div>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	<? endif; ?>
</section>
