<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="container">
	<?foreach($arResult as $arItem):?>
		<?if($arItem["SELECTED"]):?>
			<a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a>
		<?else:?>
			<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		<?endif?>
	<?endforeach?>
</div>
<?endif?>

<? //echo '<pre>'; print_r($arResult); echo '</pre>'; ?>