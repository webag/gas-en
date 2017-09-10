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


<section class="panels-list">
	<? if (!empty($arResult["ITEMS"])) : ?>
		<div class="container">
			<div class="row">

				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="grid-3 grid-6_l grid-12_xs" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="intro">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="intro-thumb">
								<? if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])) : ?>
									<?
									$photo_img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 288, "height" => 220), BX_RESIZE_IMAGE_EXACT, true);
									?>
									<div class="intro-thumb__img" style="background-image: url('<?=$photo_img["src"]?>')"></div>
								<? endif; ?>
								<header class="intro-thumb__header">
									<div class="intro-label intro-label--pr"><?=$arItem["PROPERTIES"]["TYPE_OBOR"]["VALUE"]?></div>
								</header>
								<h5 class="lead"><?=$arItem["NAME"]?></h5>
							</a>
						</div>
					</div>
				<?endforeach;?>

			</div>
		</div>
	<? endif; ?>
</section>


<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>


<div class="list-before-sale-offset"></div>