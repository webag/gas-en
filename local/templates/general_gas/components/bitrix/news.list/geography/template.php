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


<section class="s-geo">
	<div id="geomap" class="s-geo__map"></div>

	<div class="container">
		<h2 class="h1">Sales geography</h2>

		<div class="geo-items">
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<div class="geo-item <? echo ($key == 0) ? 'active' : '';?>">
					<h3 class="h3"><?=$arItem["NAME"]?></h3>
					<span class="lead"><?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></span>
					<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
						<?
						$photo_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 380, "height" => 220), BX_RESIZE_IMAGE_EXACT, true);
						?>
						<img src="<?=$photo_img["src"]?>" alt="<?=$arItem["NAME"]?>" class="geo-item__img">
					<? endif; ?>
					<div class="geo-item__text lead">
						<? if (!empty($arItem["PROPERTIES"]["OBORUD"]["VALUE"])) : ?>
							<p>Supplied equipment:<br><?=$arItem["PROPERTIES"]["OBORUD"]["VALUE"]?></p>
						<? endif; ?>
						<? if (!empty($arItem["PROPERTIES"]["CONCENTRATION"]["VALUE"])) : ?>
							<p>Concentration: <?=$arItem["PROPERTIES"]["CONCENTRATION"]["VALUE"]?>%</p>
						<? endif; ?>
						<? if (!empty($arItem["PROPERTIES"]["EFFECTIV"]["VALUE"])) : ?>
							<p>Capacity: <?=$arItem["PROPERTIES"]["EFFECTIV"]["VALUE"]?> м<sup>3</sup>/ч</p>
						<? endif; ?>
					</div>
					<div class="geo-item__footer">
						<? if (!empty($arItem["PROPERTIES"]["LOGO"]["VALUE"])) : ?>
							<?
							$logo_img = CFile::ResizeImageGet($arItem["PROPERTIES"]["LOGO"]["VALUE"], array("width" => 150, "height" => 70), BX_RESIZE_IMAGE_PROPORTIONAL, true);
							?>
							<img src="<?=$logo_img["src"]?>" alt="<?=$arItem["NAME"]?>">
						<? endif; ?>

						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="link">Details <i class="i-right-ar"></i></a>
					</div>
				</div>
			<?endforeach;?>
		</div>

	</div>

	<script>
		var locations_from_admin = [
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			['<?=$arItem["~NAME"]?>', <?=$arItem["PROPERTIES"]["MAP"]["VALUE"]?>],
			<?endforeach;?>
		];
	</script>

</section>