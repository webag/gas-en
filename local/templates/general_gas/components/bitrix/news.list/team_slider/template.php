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

<? if (!empty($arResult["ITEMS"])) : ?>
<section class="s-team">
	<div class="s-team__lines">
		<object id="balon-lines" type="image/svg+xml" data="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/eco-lines.svg"></object>
	</div>

	<div class="container">
		<h2 class="h1">Наша команда</h2>
	</div>

	<!--noindex-->
		<div class="team-slider slider-black-arrows">
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<div class="team-panel">
					<?
					$photo = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 290, "height" => 256), BX_RESIZE_IMAGE_EXACT, true);
					?>
					<img src="<?=$photo["src"]?>" alt="<?=$arItem["NAME"]?>" class="team-panel__photo">
					<div class="team-panel__content">
						<div class="team-panel__name"><?=$arItem["NAME"]?></div>
						<span class="team-panel__dolg"><?=$arItem["PREVIEW_TEXT"]?></span>
					</div>
				</div>
			<?endforeach;?>

			<? if (count($arResult["ITEMS"]) < 8) : ?>
				<?foreach($arResult["ITEMS"] as $key => $arItem):?>
					<div class="team-panel">
						<?
						$photo = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 290, "height" => 256), BX_RESIZE_IMAGE_EXACT, true);
						?>
						<img src="<?=$photo["src"]?>" alt="<?=$arItem["NAME"]?>" class="team-panel__photo">
						<div class="team-panel__content">
							<div class="team-panel__name"><?=$arItem["NAME"]?></div>
							<span class="team-panel__dolg"><?=$arItem["PREVIEW_TEXT"]?></span>
						</div>
					</div>
				<?endforeach;?>
			<? endif; ?>

		</div>
	<!--/noindex-->

</section>
<? endif; ?>