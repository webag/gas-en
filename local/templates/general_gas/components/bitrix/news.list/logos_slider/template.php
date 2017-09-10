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



<section class="s-clients-slider">

	<div class="container clients-slider-panel__wrap">
		<div class="clients-slider-panel">
			<h3 class="h3">Нам доверяют
				<strong>>100</strong>
				<small>крупнейших компаний России, Европы и СНГ</small>
			</h3>
		</div>
	</div>

	<div class="clients-slider">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<? if (!empty($arItem["PROPERTIES"]["LOGO"]["VALUE"])) : ?>
				<?
				$logo = CFile::ResizeImageGet($arItem["PROPERTIES"]["LOGO"]["VALUE"], array('width'=>192, "height"=>122), BX_RESIZE_IMAGE_PROPORTIONAL, true);
				?>
				<div class="clients-slide">
					<img src="<?=$logo['src']?>" alt="<?=$arItem["NAME"]?>">
				</div>
			<? endif; ?>
		<?endforeach;?>
		<!--
		<? if (count($arResult["ITEMS"]) < 10) : ?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<? if (!empty($arItem["PROPERTIES"]["LOGO"]["VALUE"])) : ?>
					<?
					$logo = CFile::ResizeImageGet($arItem["PROPERTIES"]["LOGO"]["VALUE"], array('width'=>192, "height"=>122), BX_RESIZE_IMAGE_PROPORTIONAL, true);
					?>
					<div class="clients-slide">
						<img src="<?=$logo['src']?>" alt="<?=$arItem["NAME"]?>">
					</div>
				<? endif; ?>
			<?endforeach;?>
		<? endif; ?>
		-->
	</div>

</section>