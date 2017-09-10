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

<section class="s-filter">
	<div class="container">

		<a href="#" class="link filter-show-mob" rel="nofollow"><span>Фильтр</span><i class="i-right-ar"></i></a>

		<div class="filter-block">
			<p class="h3 filter-block__title">UPDATE YOU NEED</p>

			<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">

				<?foreach($arResult["HIDDEN"] as $arItem):?>
					<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
				<?endforeach;?>

				<? foreach($arResult["ITEMS"] as $key=>$arItem): ?>
					<? if ($arItem["DISPLAY_TYPE"] == "K") : ?>
						<div class="filter-section">
							<span class="filter-section__title"><?=$arItem["NAME"]?></span>
							<? $arCur = current($arItem["VALUES"]); ?>
							<div class="filter-section__content">
								<label class="filter-button">
									<input type="radio" value="" name="<? echo $arCur["CONTROL_NAME_ALT"] ?>" id="<? echo "all_".$arCur["CONTROL_ID"] ?>" onclick="smartFilter.click(this)"/>
									<span>All</span>
								</label>
								<?foreach($arItem["VALUES"] as $val => $ar):?>
									<label class="filter-button" data-role="label_<?=$ar["CONTROL_ID"]?>">
										<input type="radio" value="<? echo $ar["HTML_VALUE_ALT"] ?>" name="<? echo $ar["CONTROL_NAME_ALT"] ?>" id="<? echo $ar["CONTROL_ID"] ?>" <? echo $ar["CHECKED"]? 'checked="checked"': '' ?> <?=$ar['DISABLED'] ? 'disabled': '' ?> onclick="smartFilter.click(this)"/>
										<span><?=$ar["VALUE"];?></span>
									</label>
								<?endforeach;?>
							</div>
						</div>
					<? endif; ?>
				<?endforeach;?>

				<?
				$has_number_filter = false;
				foreach($arResult["ITEMS"] as $arItem):
					if ($arItem["DISPLAY_TYPE"] == "B"):
						$has_number_filter = true;
					endif;
				endforeach;
				?>

				<? if ($has_number_filter) : ?>
				<div class="filter-section">
					<span class="filter-section__title">Behaviors</span>
					<div class="filter-section__content">

						<? foreach($arResult["ITEMS"] as $key=>$arItem): ?>
							<? if ($arItem["DISPLAY_TYPE"] == "B") : ?>
								<div class="filter-param">
									<div class="filter-param__title"><?=$arItem["NAME"]?></div>
									<div class="filter-param__range">
										<div class="filter-param__inputwrap <?if (!empty($arItem["VALUES"]["MIN"]["HTML_VALUE"])):?>is-selected <? endif ?>">
											<span>from</span>
											<input
												class="min-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
												placeholder="<?=$arItem["VALUES"]["MIN"]["VALUE"]?>"
											/>
											<div class="filter-param__deselect" title="Cancel filter"></div>
										</div>
										<div class="filter-param__inputwrap <?if (!empty($arItem["VALUES"]["MAX"]["HTML_VALUE"])):?>is-selected <? endif ?>">
											<span>to</span>
											<input
												class="max-price"
												type="text"
												name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
												id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
												value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
												size="5"
												onkeyup="smartFilter.keyup(this)"
												placeholder="<?=$arItem["VALUES"]["MAX"]["VALUE"]?>"
											/>
											<div class="filter-param__deselect" title="Cancel filter"></div>
										</div>
									</div>
								</div>
							<? endif; ?>
						<?endforeach;?>

					</div>
				</div>
				<? endif; ?>


				<div class="hidden">
					<input
						class="btn btn-themes"
						type="submit"
						id="set_filter"
						name="set_filter"
						value="Apply"
					/>
					<input
						class="btn btn-link"
						type="submit"
						id="del_filter"
						name="del_filter"
						value="Reset"
					/>
				</div>

			</form>

		</div>

	</div>
</section>