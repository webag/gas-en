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


<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<article class="home-article">
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="home-article__thumb">
			<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
				<?
				$photo_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 180, "height" => 130), BX_RESIZE_IMAGE_EXACT, true);
				?>
				<img src="<?=$photo_img["src"]?>" alt="<?=$arItem["NAME"]?>">
			<? endif; ?>
		</a>
		<div class="home-article__content">
			<h3 class="h3"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
			<div class="home-article__prevtext">
				<p><?=$arItem["PREVIEW_TEXT"]?></p>
			</div>
		</div>
	</article>
<?endforeach;?>