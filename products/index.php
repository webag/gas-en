<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Products");
?>

<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Products</h1>
	</div>
</section>


<section class="s-products">
	<div class="container">

		<div class="row">
			<div class="grid-3 grid-6_s">
				<div class="home-product">
					<header class="home-product__header">N<small>2</small></header>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product_1.jpg" alt="Генераторы азота" class="home-product__img">
					<div class="home-product__num">
						<span class="h2">01</span>
						<figure>
							<i class="i-right-ar"></i>
						</figure>
					</div>
					<footer class="home-product__footer">
						<div class="link">Nitrogen generators</div>
					</footer>
					<a href="/generatory-azota/" class="home-product__link"></a>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="home-product">
					<header class="home-product__header">O<small>2</small></header>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product_2.jpg" alt="Генераторы кислорода" class="home-product__img">
					<div class="home-product__num">
						<span class="h2">02</span>
						<figure>
							<i class="i-right-ar"></i>
						</figure>
					</div>
					<footer class="home-product__footer">
						<div class="link">Oxygen generators</div>
					</footer>
					<a href="/generatory-kisloroda/" class="home-product__link"></a>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="home-product">
					<header class="home-product__header">N<small>2</small></header>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product_4.jpg" alt="Модульные азотные станции" class="home-product__img">
					<div class="home-product__num">
						<span class="h2">03</span>
						<figure>
							<i class="i-right-ar"></i>
						</figure>
					</div>
					<footer class="home-product__footer">
						<div class="link">Modular nitrogen stations</div>
					</footer>
					<a href="#" class="home-product__link"></a>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="home-product">
					<header class="home-product__header">O<small>2</small></header>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/home/product_3.jpg" alt="Модульные кислородные станции" class="home-product__img">
					<div class="home-product__num">
						<span class="h2">04</span>
						<figure>
							<i class="i-right-ar"></i>
						</figure>
					</div>
					<footer class="home-product__footer">
						<div class="link">Modular oxygen stations</div>
					</footer>
					<a href="#" class="home-product__link"></a>
				</div>
			</div>
		</div>

	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>