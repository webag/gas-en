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


<section class="s-details">
	<div class="container">

		<div class="details-block case-details">

			<div class="row case-details__top-row">
				<div class="grid-6 grid-12_s">
					<p class="h3">Completed projects</p>
					<h1 class="h1 case-details__title"><?=$arResult["NAME"]?></h1>
					<p class="h3 case-details__city"><?=$arResult["PROPERTIES"]["CITY"]["VALUE"]?></p>

					<? if (!empty($arResult["PROPERTIES"]["LOGO"]["VALUE"])) : ?>
						<?
						$logo_img = CFile::ResizeImageGet($arResult["PROPERTIES"]["LOGO"]["VALUE"], array("width" => 226, "height" => 150), BX_RESIZE_IMAGE_PROPORTIONAL, true);
						?>
						<img src="<?=$logo_img["src"]?>" alt="<?=$arResult["NAME"]?> logo" class="case-details__logo">
					<? endif; ?>

					<? if (!empty($arResult["DETAIL_PICTURE"]["SRC"])) : ?>
						<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" class="bordered-img case-details__img-phone">
					<? endif; ?>

					<div class="case-details__info user-content">
						<p class="h2">PROJECT INFORMATION</p>
						<? if (!empty($arResult["PROPERTIES"]["PROBLEM"]["VALUE"])) : ?>
							<p class="lead-extrabig">Поставленная задача</p>
							<?=$arResult["PROPERTIES"]["PROBLEM"]["~VALUE"]["TEXT"];?>
						<? endif; ?>
						<? if (!empty($arResult["PROPERTIES"]["SOLUTION"]["VALUE"])) : ?>
							<p class="lead-extrabig case-details__solution-title">Решение</p>
							<?=$arResult["PROPERTIES"]["SOLUTION"]["~VALUE"]["TEXT"]?>
						<? endif; ?>
					</div>
				</div>

				<div class="grid-6 grid-12_s case-details__right">
					<? if (!empty($arResult["DETAIL_PICTURE"]["SRC"])) : ?>
						<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["NAME"]?>" class="bordered-img case-details__img-desktop">
					<? endif; ?>

					<div class="row">
						<div class="grid-offset-1 grid-offset-0_m case-details__product">
						<? if (!empty($arResult["PROPERTIES"]["OBORUD"]["VALUE"])) : ?>
							<p class="lead-extrabig"><?=$arResult["PROPERTIES"]["OBORUD"]["VALUE"]?></p>
						<? endif; ?>

						<? if (!empty($arResult["PROPERTIES"]["VARIANT_ISP"]["VALUE"])) : ?>
							<div class="case-details__prodvar">
								<span>Hardware version:</span>
								<p class="lead-big"><?=$arResult["PROPERTIES"]["VARIANT_ISP"]["VALUE"]?></p>
							</div>
						<? endif; ?>

						<div class="case-details__params">
							<? if (!empty($arResult["PROPERTIES"]["CONCENTRATION"]["VALUE"])) : ?>
								<div class="case-details-param">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/details/i-conc.svg" alt="1">
									<div class="case-details-param__content">
										<p>Gas concentration</p>
										<p class="lead-big"><?=$arResult["PROPERTIES"]["CONCENTRATION"]["VALUE"]?>%</p>
									</div>
								</div>
							<? endif; ?>
							<? if (!empty($arResult["PROPERTIES"]["DAVLEN"]["VALUE"])) : ?>
								<div class="case-details-param">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/details/i-dav.svg" alt="1">
									<div class="case-details-param__content">
										<p>Pressure</p>
										<p class="lead-big"><?=$arResult["PROPERTIES"]["DAVLEN"]["VALUE"]?> bar</p>
									</div>
								</div>
							<? endif; ?>
							<? if (!empty($arResult["PROPERTIES"]["EFFECTIV"]["VALUE"])) : ?>
								<div class="case-details-param">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/details/i-proiz.svg" alt="1">
									<div class="case-details-param__content">
										<p>Capacity</p>
										<p class="lead-big"><?=$arResult["PROPERTIES"]["EFFECTIV"]["VALUE"]?> m<sup>3</sup>/h</p>
									</div>
								</div>
							<? endif; ?>
						</div>
					</div>
					</div>

				</div>
			</div>


			<? if (!empty($arResult["PROPERTIES"]["PHOTOS"]["VALUE"])) : ?>
				<div class="case-details__photos">
					<p class="h1">PROJECT FOTO REPORT</p>
					<div class="row">
						<? foreach ($arResult["PROPERTIES"]["PHOTOS"]["VALUE"] as $key => $photo_id) : ?>
							<?
							$photo_big = CFile::ResizeImageGet($photo_id, array("width" => 1900, "height" => 1000), BX_RESIZE_IMAGE_PROPORTIONAL, true);
							$photo_small = CFile::ResizeImageGet($photo_id, array("width" => 363, "height" => 276), BX_RESIZE_IMAGE_EXACT, true);
							?>
							<div class="<? echo ($key < 3 ? 'grid-4' : 'grid-3'); ?> grid-6_s">
								<a href="<?=$photo_big['src']?>" class="fancy" data-fancybox="case_photos"><img src="<?=$photo_small['src']?>" alt="<?=$photo_small['alt']?>" class="bordered-img-hover"></a>
							</div>
						<? endforeach; ?>
					</div>
				</div>
			<? endif; ?>

		</div>

	</div>
</section>


<?
global $arrFilter;
$arrFilter = Array(
	"!ID" => $arResult["ID"],
	"SECTION_ID" => $arResult["SECTION"]["PATH"][0]["ID"],
	"PROPERTY_CONCENTRATION" => $arResult["PROPERTIES"]["CONCENTRATION"]["VALUE"]
);
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"cases_related",
	Array(
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
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("", ""),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "site_info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("CONCENTRATION"),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>