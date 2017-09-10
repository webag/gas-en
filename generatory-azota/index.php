<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("General Gas | Производим генераторы азота и кислорода");
?>


<div class="s-main-nav__wrapforfix">
	<nav class="s-main-nav s-main-nav--fix">
		<div class="s-main-nav__phone">
			<a href="tel:+7(499)399-34-77" class="link--black h4">+7 (499) 399-34-77</a>
		</div>
		<!--
		<div class="container">
			<a href="#s-lp-preims" class="scrollto">Преимущества</a>
			<a href="#s-lp-econom" class="scrollto">Выгода</a>
			<a href="#s-lp-comp" class="scrollto">Конструкция</a>
			<a href="#s-lp-basecomp" class="scrollto">Комплект поставки</a>
			<a href="#s-lp-variants" class="scrollto" data-scroll-offset="70">Варианты исполнения</a>
			<a href="#s-home-about" class="scrollto">О нас</a>
			<a href="#s-simple-map" class="scrollto">Контакты</a>
		</div>
		-->

		<div class="container">
			<a href="/products/" class="active">PRODUCTS</a>
			<a href="/factory/">PRODUCTION</a>
			<a href="/cases/">PROJECTS</a>
			<a href="/info/">USEFUL INFORMATION</a>
			<a href="/usage/">APPLICATION</a>
			<a href="/about/">ABOUT US</a>
			<a href="/contacts/">CONTACTS</a>
		</div>
	</nav>
</div>


<section class="home-slide lp-header" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/header-bg.jpg)">
	<div class="container">
		<div class="home-slide__content">
			<span class="h3 home-slide__uptitle">Manufactured</span>
			<h1 class="h1 home-slide__title">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/gn/h1.php"
				));?>
			</h1>
			<span class="h3 home-slide__subtitle">Shipping worldwide</span>
			<div class="home-slide__triggers">
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/home/trigger_1.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Free trial period of&nbsp;30&nbsp;days</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_2.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Afterhours technical support service</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/home/trigger_4.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Rent from 60&nbsp;000 rubles per month</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_4.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">2 years assurance</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_5.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">All generators in stock</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_6.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Installment and finance lease</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="s-sale-kompred">
	<div class="container">

		<div class="sale-block row--nopad wp">

			<div class="grid-4 grid-12_m sale-man"> <!--sale-iphone -->
				<h3 class="h2">PROMOTIONAL EVENT!</h3>
				<p class="lead-big">Commissioning works as a gift</p>
				<div class="sale-counter">
					<p class="lead">Until the end of the promotional event:</p>
					<div class="sale-counter__row">
						<span><span class="iphone-counter__days">0</span><small> days</small></span>
						<span class="iphone-counter__hours">00</span>:<span class="iphone-counter__minutes">00</span>:<span class="iphone-counter__seconds">00</span>
					</div>
				</div>
			</div>

			<div class="grid-8 grid-12_m sale-block__white">
				<div class="sale-big-form">
					<h3 class="h2 sale-big-form__title"><mark>Leave an application</mark> FOR RECEIVING THE COMMERCIAL PROPOSAL</h3>
					<p class="lead">Our manager will contact you within 15 minutes to clarify the details</p>
					<form class="ajax-form column-form grey-form">
						<div class="row">
							<div class="grid-6 grid-12_xs">
								<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
								<span class="form-subtitle">How to contact you?</span>
								<input type="tel" name="user_tel" placeholder="Telephone number*" data-label="Телефон" data-req="true">
								<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
							</div>
							<div class="grid-6 grid-12_xs">
								<label class="style-fileinput link">
									<input type="file" name="file_tz[]" data-multiple-caption="{count} файла(ов)" multiple />
									<i class="i-skrep"></i><span class="style-fileinput__text">Attach a technical requirements or data sheet</span>
								</label>
								<span class="form-subtitle">What kind of power do you need?</span>
								<input type="text" name="user_clean" placeholder="Nitrogen purity" data-label="Чистота азота">
								<input type="text" name="user_proizv" placeholder="Capacity" data-label="Производительность">
							</div>
							<div class="grid-12 column-form__btnwrap">
								<input type="hidden" value="Заявка на коммерческое предложение (генератор азота)" name="form_subject">
								<button type="submit" class="btn btn--icon">Send an application <i class="i-forward"></i></button>
							</div>
							<p class="grid-12 form-note">We do not share your personal information with third parties. By clicking the button "Send application", you consent to <a href="#">personal data processing.</a></p>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-preims" id="s-lp-preims">
	<div class="container">
		<h2 class="h1">GENERAL GAS GENERATORS ADVANTAGES</h2>

		<div class="row">

			<div class="grid-5 grid-0_m">
				<div class="lp-preims-who">
					<div class="lead-big">Alexey Karnaukh</div>
					<span>Technical manager</span>
				</div>
			</div>
			<div class="grid-7 grid-12_m">

				<div class="row lp-preims">
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_1.svg" alt="1"></div>
						<p class="lead-big">Technical support service</p>
						<p class="lp-preim__text">All generators are under control of our company, traverse through diagnostics and under observation every day 24 hours a day. Technical support serviceis also available to our customers 24/7</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_2.svg" alt="1"></div>
						<p class="lead-big">Highest build quality</p>
						<p class="lp-preim__text">Generators service maintenance is not required for 5 years, and the mechanical life is from 10 years, through the use of the most tested and high-quality German and Japanese components that have established on the market</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_3.svg" alt="1"></div>
						<p class="lead-big">Supply variations</p>
						<p class="lp-preim__text">You can choose hardware version (in-frame, on the chassis, in the container)</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_4.svg" alt="1"></div>
						<p class="lead-big">All norms are complied</p>
						<p class="lp-preim__text">Amount of noise not exceed the admissible values according to the conducted laboratory tests, and not violate the admissible values fixed in the federal statutes</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_5.svg" alt="1"></div>
						<p class="lead-big">Easy and pleasant operation</p>
						<p class="lp-preim__text">Using our generators not require the operator's personal attendance, since the handling  is carried out via the Internet using a smartphone, tablet or stationary computer</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_6.svg" alt="1"></div>
						<p class="lead-big">Highest rate of shipment</p>
						<p class="lp-preim__text">All generators are in stock, the delivery and assembly time is approximately 3 to 7 days depending on the delivery region area</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>


<section class="s-lp-econom" id="s-lp-econom">
	<!--<object id="econom-lines" type="image/svg+xml" data="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp-genasot/eco-lines.svg" class="s-lp-econom__lines"></object>-->

	<div class="container">
		<header class="s-lp-econom__header">
			<h2 class="h1">ECONOMIC BENEFIT</h2>
			<p class="h3">THE ADVANTAGES OF ALTERNATIVE SOURCES OF NITROGEN PRODUCTION</p>
		</header>

		<div class="econom-block__row">

			<div class="econom-block wp wp--fadeup">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/econom_1.jpg" alt="1" class="econom-block__img">
				<div class="econom-block__content">
					<p class="lead-big">Cylinder gas</p>
					<p>The average cost per cylinder is 300 rubles</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">The total cost of 1 m<sup>3</sup> of gaseous nitrogen:</span>
					<span class="econom-block__val econom-block__val--red"><strong>53</strong>rubles</span>
				</div>
			</div>

			<div class="econom-block wp wp--fadeup">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/econom_2.jpg" alt="2" class="econom-block__img">
				<div class="econom-block__content">
					<p class="lead-big">Gasifier system</p>
					<p>The average market value of one ton of liquid nitrogen is ~ 14 000 rubles</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">The total cost of 1 m<sup>3</sup> of gaseous nitrogen:</span>
					<span class="econom-block__val econom-block__val--red"><strong>17,5</strong>rubles</span>
				</div>
			</div>

			<div class="econom-block wp wp--fadeup">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/econom_3.jpg" alt="3" class="econom-block__img">
				<div class="econom-block__content">
					<p class="lead-big">Cryogenic system</p>
					<p>The consumption of electricity per 1 m<sup>3</sup> of nitrogen at a purity of 99.998% is 1.33 kW/h, while calculating 5 rubles per 1 kW/h</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">The total cost of 1 m<sup>3</sup> of gaseous nitrogen:</span>
					<span class="econom-block__val econom-block__val--red"><strong>6,6</strong>rubles</span>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-econom-after">
	<div class="container">
		<div class="sale-econom wp wp--fadeup">

			<div class="econom-block">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/econom-sale.jpg" alt="1" class="econom-block__img">
				<div class="econom-block__content">
					<p class="lead-big">General Gas nitrogen generator</p>
					<p>The consumption of electricity per 1 m<sup>3</sup> of produced nitrogen at a purity of 99.99% is 0.5 kW/h, while calculating 5 rubles per 1 kW/h:</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">The total cost of 1 m<sup>3</sup> of gaseous nitrogen :</span>
					<span class="econom-block__val econom-block__val--green"><strong>2,5</strong>rubles</span>
				</div>
			</div>

			<div class="sale-econom__content">

				<div class="sale-econom-center">
					<div class="lead sale-econom-center__title">MAINTENANCE CHARGES</div>
					<p>Adsorbent working time depends on the operation conditions  on the average from 5 to 7 years.  System maintenance intervals - once a year, during which the following operations are performed:</p>
					<ul class="standart-list">
						<li>Сompressed air filters change;</li>
						<li>Refrigerated dehydrator prevention;</li>
						<li>Pneumatic valves check;</li>
						<li>Recommended compressor maintenance service.</li>
					</ul>
					<p class="lead sale-econom-center__last">In rare cases, the cost of all works can exceed 5% of the cost of the entire system for the year.</p>
				</div>

				<div class="sale-econom-right">
					<p class="sale-econom-right__title">Get the most favourable offer</p>
					<p class="lead-big">for the production of your own nitrogen.</p>
					<ul class="checked-list">
						<li>Fast payback period (from 10 months)</li>
						<li>Complete independence from the suppliers of nitrogen supplied in cylinders</li>
						<li>Rapid and easily accessible introduction</li>
					</ul>
					<a href="#" class="btn btn--green fancy" data-src="#modal-order-gn" rel="nofollow">Get the proposal</a>
					<p class="form-note">We do not share your personal information with third parties. By clicking the button "Get the proposal", you consent to <a href="#">personal data processing.</a></p>
				</div>

			</div>

		</div>
	</div>
</section>


<section class="s-lp-comp" id="s-lp-comp">
	<div class="container">
		<h2 class="h1">GENERAL GAS NITROGEN GENERATOR DESIGN</h2>

		<div class="lp-comps lp-comps--genasot">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp-img.png" alt="compimg" class="lp-comps__img lp-comps__img--genasot">

			<div class="row--nopad">
				<div class="grid-4 grid-6_m grid-12_s">
					<div class="lp-comp wp wp--fadeleft">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_1.jpg" alt="1">
						<div class="lp-comp__content">
							<span>Operator touch-screen</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_1.svg" alt="1">
						</div>
					</div>
				</div>
				<div class="grid-4 grid-offset-4 grid-6_m grid-offset-0_m grid-12_s">
					<div class="lp-comp wp wp--faderight">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_2.jpg" alt="1">
						<div class="lp-comp__content">
							<span>Reliable Japanese pneumatic valves</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_2.svg" alt="1">
						</div>
					</div>
				</div>
			</div>

			<div class="row--nopad">
				<div class="grid-4 grid-6_m grid-12_s">
					<div class="lp-comp wp wp--fadeleft">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_3.jpg" alt="1">
						<div class="lp-comp__content">
							<span>US gas analyzer production gas to within 0.1 ppm</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_3.svg" alt="1">
						</div>
					</div>
				</div>
				<div class="grid-4 grid-offset-4 grid-6_m grid-offset-0_m grid-12_s">
					<div class="lp-comp wp wp--faderight">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_4.jpg" alt="1">
						<div class="lp-comp__content">
							<span>High-quality Japanese adsorbent</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_4.svg" alt="1">
						</div>
					</div>
				</div>
			</div>

			<div class="row--nopad">
				<div class="grid-4 grid-6_m grid-12_s">
					<div class="lp-comp wp wp--fadeleft">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_5.jpg" alt="1">
						<div class="lp-comp__content">
							<span>German flow meter production gas with an accuracy of 1L/min</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_5.svg" alt="1">
						</div>
					</div>
				</div>
				<div class="grid-4 grid-offset-4 grid-6_m grid-offset-0_m grid-12_s">
					<div class="lp-comp wp wp--faderight">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_6.jpg" alt="1">
						<div class="lp-comp__content">
							<span>Moistureproof and dust-protected electrical cabinet</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_6.svg" alt="1">
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-sale-info">

	<!--<div class="s-sale-info__lines">
		<object id="saleinfo-lines" type="image/svg+xml" data="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp-genasot/basecomp-lines.svg"></object>
	</div>-->

	<div class="container">

		<div class="sale-block row--nopad">

			<div class="grid-8 grid-7_l grid-12_m sale-info sale-info--genox">
				<h3 class="h2">YOU NEED MORE INFORMATION?</h3>
				<p class="lead sale-info__text">If you need to get more general and technical information about our nitrogen generator and exclusive conditions, leave an application and we will call you back within 5 minutes and consult on all issues of interest.</p>
				<div class="sale-info__hwo">
					<div class="lead-big">Igor Morozov</div>
					<span>Project Manager</span>
				</div>
			</div>

			<div class="grid-4 grid-5_l grid-12_m sale-block__white">
				<div class="sale-small-form">
					<h3 class="h3 sale-small-form__title">Leave an application</h3>
					<p class="lead">Our manager will contact you within 15 minutes to clarify the details</p>
					<form class="ajax-form vertical-form grey-form">
						<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
						<input type="tel" name="user_tel" placeholder="Telephone number*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
						<input type="hidden" value="Получение информации (генератор азота)" name="form_subject">
						<button type="submit" class="btn btn--icon">Send <i class="i-forward"></i></button>
						<p class="grid-12 form-note">We do not share your personal information with third parties. By clicking the button "Send", you consent to <a href="#">personal data processing.</a></p>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-basecomp" id="s-lp-basecomp">
	<div class="container">
		<h2 class="h1">GENERATOR STANDART SUPPLY PACKAGE</h2>

		<div class="basecomps basecomps--anim basecomps--genasot row">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/basekomp.jpg" alt="genasot" class="basecomps__img">

			<div class="grid-3 basecomps__left">
				<div class="basecomp">
					<p class="lead">Filter system</p>
					<p class="basecomp__descr">Serves for cleaning and protection from microparticles of oil, dust and other contaminants contained in compressed air</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Air vessel</p>
					<p class="basecomp__descr">Serves as a kind of "buffer" of compressed air to stabilize the pressure at the inlet to the adsorption columns</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Compressor</p>
					<p class="basecomp__descr">Serves for air compression (the system uses oil-flooded screw compressor and non-lube compressor)</p>
					<figure><span class="dot"></span></figure>
				</div>
			</div>

			<div class="grid-3 grid-offset-6 basecomps__right">
				<div class="basecomp">
					<p class="lead">Compress production air vessel</p>
					<p class="basecomp__descr">Serves for partial accumulation and equalization of emerging pressure surges</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Adsorptive generator</p>
					<p class="basecomp__descr">Serves to separate prepared compressed air into its main components - nitrogen and oxygen</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Output of production gas</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Compressed air dehumidifier</p>
					<p class="basecomp__descr">Serves to reduce the humidity of compressed air to the temperature of dew point</p>
					<figure class="reverse"><span class="dot"></span></figure>
				</div>
			</div>

		</div>

		<div class="basecomp-dops row">
			<div class="grid-3 grid-12_l">
				<h3>Additional options</h3>
			</div>
			<div class="grid-3 grid-4_l grid-12_s">
				<div class="basecomp-dop">
					<div class="basecomp-dop__num lead-big">01</div>
					<div class="lead">Booster compressor</div>
					<div class="basecomp-dop__descr">Serves to increase the pressure of the production gas;</div>
				</div>
			</div>
			<div class="grid-3 grid-4_l grid-12_s">
				<div class="basecomp-dop">
					<div class="basecomp-dop__num lead-big">02</div>
					<div class="lead">Refuelling point</div>
					<div class="basecomp-dop__descr">Equipment package allows filling standard cylinders with compressed gas at a pressure of up to 200 bar;</div>
				</div>
			</div>
			<div class="grid-3 grid-4_l grid-12_s">
				<div class="basecomp-dop">
					<div class="basecomp-dop__num lead-big">03</div>
					<div class="lead">Polishing treatment system</div>
					<div class="basecomp-dop__descr">Allows to obtain production oxygen or nitrogen of higher level gas</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-sale-trial">
	<div class="container">

		<div class="sale-block row--nopad">

			<div class="grid-8 grid-7_l grid-12_m sale-trial">
				<h2 class="h2">Test our Nitrogen Generator <mark>totally free of charge for 30 DAYS</mark></h2>
				<ul class="lead checked-list checked-list--orange">
					<li>Bring the generator  free of charge.</li>
					<li>Install a unit and bring into operation free of charge.</li>
					<li>Put right the process of gas feeding into final point.</li>
				</ul>
				<p class="lead sale-trial__subtitle">By the end of the test check, you will be able to:</p>
				<ul class="lead standart-list">
					<li>Unsubscribe from equipment.</li>
					<li>Buy out the generator.</li>
					<li>Take the generator for a lease.</li>
				</ul>
			</div>

			<div class="grid-4 grid-5_l grid-12_m sale-block__white">
				<div class="sale-small-form">
					<h3 class="h3 sale-small-form__title">Leave an application</h3>
					<p class="lead">Our manager will contact you within 15 minutes to clarify the details</p>
					<form class="ajax-form vertical-form grey-form">
						<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
						<input type="tel" name="user_tel" placeholder="Telephone number*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
						<input type="hidden" value="Заявка на бесплатное тестирование (генератор азота)" name="form_subject">
						<button type="submit" class="btn btn--icon">Send <i class="i-forward"></i></button>
						<p class="grid-12 form-note">We do not share your personal information with third parties. By clicking the button "Send", you consent to <a href="#">personal data processing.</a></p>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-variants" id="s-lp-variants">
	<div class="container">
		<h2 class="h1">HARDWARE VERSION</h2>

		<div class="row">
			<div class="grid-4 grid-12_m">
				<div class="work-variant wp">
					<span class="lead-extrabig">01</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/work-var-1.jpg" alt="1">
					<h4 class="lead-extrabig work-variant__title">IN-FRAME</h4>
					<p class="work-variant__text">All the generators models can be mounted in-frame  for quick assembly in any heated space. In this case, the equipment is in full technical readiness for start.</p>
					<!--<a href="#" class="link">Подробнее <i class="i-right-ar"></i></a>-->
				</div>
			</div>
			<div class="grid-4 grid-12_m">
				<div class="work-variant wp">
					<span class="lead-extrabig">02</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/work-var-2.jpg" alt="2">
					<h4 class="lead-extrabig work-variant__title">IN THE CONTAINER</h4>
					<p class="work-variant__text">We produce oxygen and nitrogen generators in a container version based on a 20 or 40 foot sea container, in any environmental: for both the tropical climate and the conditions of the Far North.</p>
					<!--<a href="#" class="link">Подробнее <i class="i-right-ar"></i></a>-->
				</div>
			</div>
			<div class="grid-4 grid-12_m">
				<div class="work-variant wp">
					<span class="lead-extrabig">03</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/work-var-3.jpg" alt="3">
					<h4 class="lead-extrabig work-variant__title">SELF-SUPPORTING (ON THE CHASSIS)</h4>
					<p class="work-variant__text">Generators can be mounted in a special container with power supply self-sufficient system (diesel or gas generator) and mounted on a chassis for transportation by any motor-car or trailer unit.</p>
					<!--<a href="#" class="link">Подробнее <i class="i-right-ar"></i></a>-->
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-table">

	<div class="s-lp-table__title">
		<div class="container ">
			<h2 class="h1">Genarator model range</h2>
		</div>
	</div>

	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"asot_models-table",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "2",
			"IBLOCK_TYPE" => "site_info",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "50",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("WEIGHT", "P_90", "P_93", "P_95", "SIZE", "V_90", "V_93", "V_95", ""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "ID",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		)
	);?>

	<div class="container lp-table-mob">
		<a href="#" class="btn">Download table</a>
	</div>
</section>


<section class="s-sale-modrow">
	<div class="container">

		<div class="sale-block row--nopad">

			<div class="grid-8 grid-7_l grid-12_m sale-modrow">
				<h3 class="sale-modrow__title">Fill out the form and get the full generators model range to your email address</h3>
			</div>

			<div class="grid-4 grid-5_l grid-12_m sale-block__white">
				<div class="sale-small-form">
					<h3 class="h3 sale-small-form__title">Leave an application</h3>
					<p class="lead">And within 5 minutes you will receive a file with a full generators model range</p>
					<form class="ajax-form vertical-form grey-form">
						<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
						<input type="tel" name="user_tel" placeholder="Telephone number*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
						<input type="hidden" value="Получить модельный ряд генераторов (генератор азота)" name="form_subject">
						<button type="submit" class="btn btn--icon">Receive file <i class="i-forward"></i></button>
						<p class="grid-12 form-note">We do not share your personal information with third parties. By clicking the button "Receive file", you consent to <a href="#">personal data processing.</a></p>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-serts">
	<div class="container">
		<h2 class="h1">CERTIFICATES</h2>

		<div class="row">
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_1_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_1.jpg" alt="Акт освидетельствования грузовых контейнеров">
					</a>
					<span>Freight containers examination certificate</span>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_2_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_2.jpg" alt="Декларация соответствия">
					</a>
					<span>Certificate of conformance</span>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_3_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_3.jpg" alt="Сертификат соответствия">
					</a>
					<span>Safe for operation Certificate</span>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_4_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_4.jpg" alt="Сертификат соответствия ISO 9001-2015">
					</a>
					<span>ISO 9001-2015 certificate of conformance</span>
				</div>
			</div>
		</div>

	</div>
</section>


<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/includes/global/video-section.php"
));?>


<?$arrFilter = Array("SECTION_ID" => 2);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"cases_slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("", ""),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "site_info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("OBORUD", "CONCENTRATION", "EFFECTIV", "LOGO", "CITY"),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"geography",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("", ""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "site_info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "50",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("OBORUD", "CONCENTRATION", "EFFECTIV", "MAP", "LOGO", "CITY"),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"clients_slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "37",
		"FIELD_CODE" => array("", ""),
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "site_info",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array("LOGOS", ""),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N"
	)
);?>


<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/includes/global/about-section.php"
));?>


<section class="s-sale-balon">
	<!--<div class="s-sale-balon__lines">
		<object id="balon-lines" type="image/svg+xml" data="<?/*=SITE_TEMPLATE_PATH*/?>/img/lp-genasot/balon-lines.svg"></object>
	</div>-->

	<div class="container">

		<div class="sale-block row--nopad">

			<div class="grid-4 grid-12_m sale-ballon">
				<h3 class="sale-ballon__title">STILL BUY NITROGEN IN CYLINDERS?</h3>
			</div>

			<div class="grid-8 grid-12_m sale-block__white">
				<div class="sale-big-form">
					<h3 class="h2 sale-big-form__title"><mark>LEAVE AN APPLICATION</mark> FOR CALCULATING THE VALUE OF THE GENERATOR</h3>
					<p class="lead">Our manager will contact you within 15 minutes to clarify the details</p>
					<form class="ajax-form column-form grey-form">
						<div class="row">
							<div class="grid-6 grid-12_xs">
								<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
								<span class="form-subtitle">How to contact you?</span>
								<input type="tel" name="user_tel" placeholder="Telephone number*" data-label="Телефон" data-req="true">
								<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
							</div>
							<div class="grid-6 grid-12_xs">
								<label class="style-fileinput link">
									<input type="file" name="file_tz[]" data-multiple-caption="{count} файла(ов)" multiple />
									<i class="i-skrep"></i><span class="style-fileinput__text">Attach a technical requirements or data sheet</span>
								</label>
								<span class="form-subtitle">How many cylinders consume in a month?</span>
								<input type="text" name="user_kolbalon" placeholder="Количество баллонов" data-label="Количество баллонов">
								<input type="text" name="user_smena" placeholder="Длительность рабочей смены" data-label="Длительность рабочей смены">
							</div>
							<div class="grid-12 column-form__btnwrap">
								<input type="hidden" value="Заявка на расчет окупаемости генератора (генератор азота)" name="form_subject">
								<button type="submit" class="btn btn--icon">Send an application <i class="i-forward"></i></button>
							</div>
							<p class="grid-12 form-note">We do not share your personal information with third parties. By clicking the button "Send an application", you consent to <a href="#">personal data processing.</a></p>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => "/includes/global/section-photo-fabric.php"
));?>


<section class="s-simple-map" id="s-simple-map">
	<div class="simple-map js-simple-map" data-coord-x="55.720919" data-coord-y="37.725981"></div>

	<div class="container">

		<div class="simple-map-panel grid-5 grid-12_l">
			<h3 class="h2 simple-map-panel__title">WE INVITE YOU TO VISIT OUR OFFICE AND PRODUCTION</h3>
			<h3 class="h3">ADDRESS:</h3>
			<address class="lead">Russian Federation, Moscow, 1st Graivoronovsky Passage 20, Building 35, Business Park "Turas", 5 Floor</address>
			<a href="tel:+7(499)3993477" class="h3">+7 (499) 399 34 77</a>
		</div>

	</div>

</section>


<div id="modal-order-gn" class="modal">
	<p class="h3 modal__title">Leave an application</p>
	<p class="modal__subtitle">Our manager will contact you within 15 minutes to clarify the details</p>
	<form class="ajax-form vertical-form">
		<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
		<input type="tel" name="user_contacts" placeholder="Telephone number*" data-label="Контакты" data-req="true">
		<input type="email" name="user_email" placeholder="E-mail" data-label="E-mail">
		<input type="hidden" value="Новая заявка (генераторы азота)" name="form_subject">
		<button type="submit" class="btn btn--icon">Send <i class="i-forward"></i></button>
	</form>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>