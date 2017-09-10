<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<? if ($arResult["NavPageCount"] > 1) : ?>

	<?$page = $arResult["nStartPage"]?>
	<section class="s-pagination">
		<div class="container">
			<?if($arResult["NavPageNomer"] > 1) : // Если страница не первая ?>
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="pag-btn pag-btn--prev"><i class="i-right-ar"></i> Previous</a>
			<? else: ?>
				<a href="#" class="pag-btn pag-btn--prev pag-btn--disabled"><i class="i-right-ar"></i> Previous</a>
			<? endif; ?>


			<nav class="pagination">
				<?while($page <= $arResult["nEndPage"]): // Цикл для пробежки по страницам ?>
					<?if ($page == $arResult["NavPageNomer"]): // Если страница текущая ?>
						<a href="#" class="active"><?=$page?></a>
					<?else: // Если страница не текущая ?>
						<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$page?>"><?=$page?></a>
					<?endif?>
					<?$page++?>
				<?endwhile?>
			</nav>

			<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]) : // Если страница не последняя ?>
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" class="pag-btn pag-btn--next">Next <i class="i-right-ar"></i></a>
			<? else:?>
				<a href="#" class="pag-btn pag-btn--next pag-btn--disabled">Next <i class="i-right-ar"></i></a>
			<? endif ?>
		</div>
	</section>

<? endif; ?>
