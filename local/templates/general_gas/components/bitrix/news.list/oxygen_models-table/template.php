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


<div class="lp-table">

	<div class="lp-table__headerwrap">
		<header class="lp-table__header lp-table__header--fixed">
			<div class="container lpt-row">
				<div class="lpt-col lpt-col--1">Model</div>
				<div class="lpt-col lpt-col--2">Measures</div>
				<div class="lpt-col lpt-col--3">Concentration, %</div>
				<div class="lpt-col lead lpt-col--4">90</div>
				<div class="lpt-col lead lpt-col--4">93</div>
				<div class="lpt-col lead lpt-col--4">95</div>
			</div>
		</header>
	</div>

	<main class="lp-table__main">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<div class="lpt-item <? echo ($key > 7) ? 'lpt-item--hidden' : '';?> ">
			<div class="container lpt-row">
				<div class="lpt-col lpt-col--1">
					<div class="lead"><?=$arItem["NAME"]?></div>
					<a href="#" class="link--blue fancy" data-src="#modal-order-go" rel="nofollow"><strong>Detailed</strong></a>
				</div>
				<div class="lpt-col lpt-col--2">
					<p>Dimension, LxWxH, mm: <strong><?=$arItem["PROPERTIES"]["SIZE"]["VALUE"]?></strong></p>
					<p>Weight, kg: <strong><?=$arItem["PROPERTIES"]["WEIGHT"]["VALUE"]?></strong></p>
				</div>
				<div class="lpt-col lpt-col--3">
					<p>Capacity, m<sup>3</sup>/hour</p>
					<p>Required air, m<sup>3</sup>/min</p>
				</div>
				<div class="lpt-col lpt-col--4">
					<p><?=$arItem["PROPERTIES"]["P_90"]["VALUE"]?></p>
					<p><?=$arItem["PROPERTIES"]["V_90"]["VALUE"]?></p>
				</div>
				<div class="lpt-col lpt-col--4">
					<p><?=$arItem["PROPERTIES"]["P_93"]["VALUE"]?></p>
					<p><?=$arItem["PROPERTIES"]["V_93"]["VALUE"]?></p>
				</div>
				<div class="lpt-col lpt-col--4">
					<p><?=$arItem["PROPERTIES"]["P_95"]["VALUE"]?></p>
					<p><?=$arItem["PROPERTIES"]["V_95"]["VALUE"]?></p>
				</div>
			</div>
		</div>
		<?endforeach;?>
	</main>

	<footer class="lp-table__footer">
		<? if (count($arResult["ITEMS"]) > 8) : ?>
			<a href="#" class="link lp-table__full">View full table</a>
		<? endif; ?>
	</footer>

</div>
