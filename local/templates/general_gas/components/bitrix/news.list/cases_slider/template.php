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


<section class="s-cases-slider">
	<div class="container">
		<h2 class="h1">Recently completed projects</h2>
	</div>

	<div class="cases-slider slider-black-arrows">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<div class="case-panel">
				<header class="case-panel__header">
					<div class="case-panel__title">
						<h3><?=$arItem["NAME"]?></h3>
						<span class="lead"><?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></span>
					</div>
					<? if (!empty($arItem["PROPERTIES"]["LOGO"]["VALUE"])) : ?>
						<?
						$logo_img = CFile::ResizeImageGet($arItem["PROPERTIES"]["LOGO"]["VALUE"], array("width" => 140, "height" => 60), BX_RESIZE_IMAGE_PROPORTIONAL, true);
						?>
						<img src="<?=$logo_img["src"]?>" alt="<?=$arItem["NAME"]?>">
					<? endif; ?>
				</header>
				<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
					<?
					$photo_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 380, "height" => 220), BX_RESIZE_IMAGE_EXACT, true);
					?>
					<img src="<?=$photo_img["src"]?>" alt="<?=$arItem["NAME"]?>" class="case-panel__img">
				<? endif; ?>
				<div class="case-panel__text lead">
					<? if (!empty($arItem["PROPERTIES"]["OBORUD"]["VALUE"])) : ?>
						<p>Supplied equipment: <?=$arItem["PROPERTIES"]["OBORUD"]["VALUE"]?></p>
					<? endif; ?>
					<? if (!empty($arItem["PROPERTIES"]["CONCENTRATION"]["VALUE"])) : ?>
						<p>Concentration: <?=$arItem["PROPERTIES"]["CONCENTRATION"]["VALUE"]?>%</p>
					<? endif; ?>
					<? if (!empty($arItem["PROPERTIES"]["EFFECTIV"]["VALUE"])) : ?>
						<p>Capacity: <?=$arItem["PROPERTIES"]["EFFECTIV"]["VALUE"]?> м<sup>3</sup>/ч</p>
					<? endif; ?>
				</div>
				<footer class="case-panel__footer">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="link">Details <i class="i-right-ar"></i></a>
				</footer>
			</div>
		<?endforeach;?>

	</div>

</section>