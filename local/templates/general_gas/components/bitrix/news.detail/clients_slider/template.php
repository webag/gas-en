<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<section class="s-clients-slider">

	<div class="container clients-slider-panel__wrap">
		<div class="clients-slider-panel">
			<h3 class="h3">We are trusted by
				<strong>>100</strong>
				<small>Largest Companies in Russia, Europe and the CIS </small>
			</h3>
		</div>
	</div>

	<div class="clients-slider">
		<?foreach($arResult["PROPERTIES"]["LOGOS"]["VALUE"] as $logo_id):?>
			<?
			$logo = CFile::ResizeImageGet($logo_id, array('width'=>192, "height"=>122), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			?>
			<div class="clients-slide">
				<img src="<?=$logo['src']?>" alt="<?=$logo_id?>">
			</div>
		<?endforeach;?>
		<? if (count($arResult["PROPERTIES"]["LOGOS"]["VALUE"]) < 10) : ?>
			<?foreach($arResult["PROPERTIES"]["LOGOS"]["VALUE"] as $logo_id):?>
				<?
				$logo = CFile::ResizeImageGet($logo_id, array('width'=>192, "height"=>122), BX_RESIZE_IMAGE_PROPORTIONAL, true);
				?>
				<div class="clients-slide">
					<img src="<?=$logo['src']?>" alt="<?=$logo_id?>">
				</div>
			<?endforeach;?>
		<? endif; ?>
	</div>

</section>
