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


<section class="s-inner">
	<div class="container">

		<div class="inner-block">

			<div class="inner-block-intro" style="background-image: url('<?=$arResult["DETAIL_PICTURE"]["SRC"]?>');">
				<div class="inner-block-intro__content">
					<h1 class="h2 inner-block__title"><?=$arResult["NAME"]?></h1>
					<p class="inner-block__subtitle"><?=$arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]?></p>
					<div class="inner-block__topshare">
						<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
						<script src="//yastatic.net/share2/share.js"></script>
						<div class="ya-share2" data-services="vkontakte,facebook,twitter" data-counter=""></div>
					</div>
				</div>
			</div>

			<header class="inner-block__header inner-block__header--mod">
				<div class="inner-block__content">
					<time><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
				</div>
			</header>

			<main class="inner-block__main">
				<div class="inner-block__content user-content">
					<?=$arResult["DETAIL_TEXT"]?>
				</div>
			</main>

			<footer class="inner-block__footer">
				<div class="inner-block__content">
					<div class="inner-block__views">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/eye.svg" alt="eye">
						<span><?=$arResult["SHOW_COUNTER"]?></span>
					</div>
					<time><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
					<div class="inner-block__bottomshare">
						<p class="inner-block__bottomshare-title">Поделиться в социальных сетях</p>
						<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
						<script src="//yastatic.net/share2/share.js"></script>
						<div class="ya-share2" data-services="vkontakte,facebook,twitter" data-counter=""></div>
					</div>
				</div>
			</footer>

		</div>

	</div>
</section>


<?
global $arrFilter;
$arrFilter = Array(
	"!ID" => $arResult["ID"],
);
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"info_related",
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
		"FIELD_CODE" => array("SHOW_COUNTER", ""),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $arResult["IBLOCK_ID"],
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
		"PROPERTY_CODE" => array("TYPE_OBOR"),
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