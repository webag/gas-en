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


<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="intro">
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="intro-thumb">
			<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
				<?
				$photo_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 288, "height" => 220), BX_RESIZE_IMAGE_EXACT, true);
				?>
				<div class="intro-thumb__img" style="background-image: url('<?=$photo_img["src"]?>')"></div>
			<? endif; ?>
			<header class="intro-thumb__header">
				<div class="intro-label intro-label--pr">New projects</div>
			</header>
			<h5 class="lead"><?=$arItem["NAME"]?></h5>
		</a>
	</div>
<?endforeach;?>
