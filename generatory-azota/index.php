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
			<a href="/products/" class="active">Продукция</a>
			<a href="/factory/">Производство</a>
			<a href="/cases/">Проекты</a>
			<a href="/info/">Полезная информация</a>
			<a href="/usage/">Применения</a>
			<a href="/about/">О нас</a>
			<a href="/contacts/">Контакты</a>
		</div>
	</nav>
</div>


<section class="home-slide lp-header" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/header-bg.jpg)">
	<div class="container">
		<div class="home-slide__content">
			<span class="h3 home-slide__uptitle">Производим</span>
			<h1 class="h1 home-slide__title">
				<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/includes/gn/h1.php"
				));?>
			</h1>
			<span class="h3 home-slide__subtitle">Доставка в&nbsp;любую точку мира</span>
			<div class="home-slide__triggers">
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/home/trigger_1.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Бесплатный тестовый период 30&nbsp;дней</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_2.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Круглосуточная техническая поддержка</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/home/trigger_4.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Аренда от&nbsp;60&nbsp;000&nbsp;р./мес.</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_4.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Гарантия 2 года</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_5.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Все генераторы в&nbsp;наличии</div>
				</div>
				<div class="home-slide-trigger">
					<div class="home-slide-trigger__icon">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/h-trigger_6.svg" alt="">
					</div>
					<div class="home-slide-trigger__text">Рассрочка и&nbsp;лизинг</div>
				</div>

			</div>
		</div>
	</div>
</section>


<section class="s-sale-kompred">
	<div class="container">

		<div class="sale-block row--nopad wp">

			<div class="grid-4 grid-12_m sale-man"> <!--sale-iphone -->
				<h3 class="h2">Акция!</h3>
				<p class="lead-big">Пусконаладочные работы в&nbsp;подарок</p>
				<div class="sale-counter">
					<p class="lead">До конца акции осталось:</p>
					<div class="sale-counter__row">
						<span><span class="iphone-counter__days">0</span><small> дней</small></span>
						<span class="iphone-counter__hours">00</span>:<span class="iphone-counter__minutes">00</span>:<span class="iphone-counter__seconds">00</span>
					</div>
				</div>
			</div>

			<div class="grid-8 grid-12_m sale-block__white">
				<div class="sale-big-form">
					<h3 class="h2 sale-big-form__title"><mark>Оставьте заявку</mark> на&nbsp;коммерческое предложение</h3>
					<p class="lead">Наш менеджер свяжется с Вами в течение 15 минут для уточнения деталей</p>
					<form class="ajax-form column-form grey-form">
						<div class="row">
							<div class="grid-6 grid-12_xs">
								<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
								<span class="form-subtitle">Как с Вами связаться?</span>
								<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" data-req="true">
								<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
							</div>
							<div class="grid-6 grid-12_xs">
								<label class="style-fileinput link">
									<input type="file" name="file_tz[]" data-multiple-caption="{count} файла(ов)" multiple />
									<i class="i-skrep"></i><span class="style-fileinput__text">Прикрепите ТЗ или опросный лист</span>
								</label>
								<span class="form-subtitle">Какие мощности Вам нужны?</span>
								<input type="text" name="user_clean" placeholder="Чистота азота" data-label="Чистота азота">
								<input type="text" name="user_proizv" placeholder="Производительность" data-label="Производительность">
							</div>
							<div class="grid-12 column-form__btnwrap">
								<input type="hidden" value="Заявка на коммерческое предложение (генератор азота)" name="form_subject">
								<button type="submit" class="btn btn--icon">Отправить заявку <i class="i-forward"></i></button>
							</div>
							<p class="grid-12 form-note">Мы не передаем Вашу персональную информацию третьим лицам.<br>Нажимая кнопку «Отправить заявку», вы даете <a href="#">согласие на обработку персональных данных.</a></p>
						</div>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-preims" id="s-lp-preims">
	<div class="container">
		<h2 class="h1">Преимущества генераторов General Gas</h2>

		<div class="row">

			<div class="grid-5 grid-0_m">
				<div class="lp-preims-who">
					<div class="lead-big">Алексей Карнаух</div>
					<span>Технический директор</span>
				</div>
			</div>
			<div class="grid-7 grid-12_m">

				<div class="row lp-preims">
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_1.svg" alt="1"></div>
						<p class="lead-big">Техническая поддержка</p>
						<p class="lp-preim__text">Все генераторы находятся под нашим присмотром и&nbsp;диагностируются каждый день 24&nbsp;часа в&nbsp;сутки. Техническая поддержка работает круглосуточно 24/7</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_2.svg" alt="1"></div>
						<p class="lead-big">Высочайшее качество сборки</p>
						<p class="lp-preim__text">Генераторы не&nbsp;требуют никакого сервисного обслуживания в&nbsp;течение 5&nbsp;лет. Срок службы от&nbsp;10 лет благодаря самым качественным немецким и&nbsp;японским комплектующим</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_3.svg" alt="1"></div>
						<p class="lead-big">Все вариации поставок</p>
						<p class="lp-preim__text">Абсолютно все варианты исполнения (на&nbsp;раме, на&nbsp;шасси, в&nbsp;контейнере)</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_4.svg" alt="1"></div>
						<p class="lead-big">Соблюдены все нормы</p>
						<p class="lp-preim__text">Уровень звука не&nbsp;превышает самые требовательные лабораторные нормы</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_5.svg" alt="1"></div>
						<p class="lead-big">Легкая и приятная эксплуатация</p>
						<p class="lp-preim__text">Наши генераторы не&nbsp;требуют присутствия оператора и&nbsp;управляются через интернет, используя смартфон, планшет или&nbsp;стационарный компьютер</p>
					</div>
					<div class="lp-preim wp">
						<div class="lp-preim__icon"><img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/preims_6.svg" alt="1"></div>
						<p class="lead-big">Высочайшая скорость отгрузки</p>
						<p class="lp-preim__text">Все генераторы в&nbsp;наличии, срок поставки и&nbsp;монтажа до&nbsp;7 дней</p>
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
			<h2 class="h1">Экономическая выгода</h2>
			<p class="h3">Преимущества перед альтернативными источниками получения азота</p>
		</header>

		<div class="econom-block__row">

			<div class="econom-block wp wp--fadeup">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/econom_1.jpg" alt="1" class="econom-block__img">
				<div class="econom-block__content">
					<p class="lead-big">Балонный газ</p>
					<p>Средняя стоимость одного баллона 300 руб.</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">Итого за 1&nbsp;м<sup>3</sup> газообразнного азота:</span>
					<span class="econom-block__val econom-block__val--red"><strong>53</strong>руб</span>
				</div>
			</div>

			<div class="econom-block wp wp--fadeup">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/econom_2.jpg" alt="2" class="econom-block__img">
				<div class="econom-block__content">
					<p class="lead-big">Газификационная станция</p>
					<p>Среднерыночная стоимость одной тонны жидкого азота в ~ 14 000 рублей</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">Итого за 1&nbsp;м<sup>3</sup> газообразнного азота:</span>
					<span class="econom-block__val econom-block__val--red"><strong>17,5</strong>руб</span>
				</div>
			</div>

			<div class="econom-block wp wp--fadeup">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/econom_3.jpg" alt="3" class="econom-block__img">
				<div class="econom-block__content">
					<p class="lead-big">Криогенная станция</p>
					<p>Потребление электроэнергии на 1 м<sup>3</sup> азота при чистоте 99.998% составляет – 1,33 кВт/ч., при стоимости 1 кВт/ч в 5 рублей</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">Итого за 1&nbsp;м<sup>3</sup> газообразнного азота:</span>
					<span class="econom-block__val econom-block__val--red"><strong>6,6</strong>руб</span>
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
					<p class="lead-big">Генератор азота General Gas</p>
					<p>Потребление электроэнергии на 1м<sup>3</sup> произведенного азота при чистоте 99.99% составляет – 0,5&nbsp;кВт/ч., при стоимости 1&nbsp;кВт/ч в&nbsp;5&nbsp;рублей:</p>
				</div>
				<div class="econom-block__footer">
					<span class="lead">Итого за 1&nbsp;м<sup>3</sup> газообразнного азота:</span>
					<span class="econom-block__val econom-block__val--green"><strong>2,5</strong>руб</span>
				</div>
			</div>

			<div class="sale-econom__content">

				<div class="sale-econom-center">
					<div class="lead sale-econom-center__title">ЭКСПЛУАТАЦИОННЫЕ ЗАТРАТЫ</div>
					<p>Срок службы адсорбента зависит от условий эксплуатации, и в среднем достигает 5-7 лет, периодичность технического обслуживания системы один раз в год, в него входит:</p>
					<ul class="standart-list">
						<li>Замена фильтров сжатого воздуха;</li>
						<li>Профилактика рефрижераторного осушителя;</li>
						<li>Проверку пневматических клапанов;</li>
						<li>Стандартное сервисное обслуживание компрессора.</li>
					</ul>
					<p class="lead sale-econom-center__last">Стоимость всех работ редко превышает 5%&nbsp;от стоимости всей системы за год.</p>
				</div>

				<div class="sale-econom-right">
					<p class="sale-econom-right__title">Получите самое выгодное предложение</p>
					<p class="lead-big">по производству собственного азота.</p>
					<ul class="checked-list">
						<li>Быстрая окупаемость (от 10 месяцев)</li>
						<li>Полная независимость от поставщиков азота в&nbsp;баллонах</li>
						<li>Быстрое и легкое внедрение</li>
					</ul>
					<a href="#" class="btn btn--green fancy" data-src="#modal-order-gn" rel="nofollow">Получить предложение</a>
					<p class="form-note">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Получить предложение» вы даете <a href="#">согласие на обработку персональных данных.</a></p>
				</div>

			</div>

		</div>
	</div>
</section>


<section class="s-lp-comp" id="s-lp-comp">
	<div class="container">
		<h2 class="h1">Из чего состоит генератор азота General gas</h2>

		<div class="lp-comps lp-comps--genasot">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp-img.png" alt="compimg" class="lp-comps__img lp-comps__img--genasot">

			<div class="row--nopad">
				<div class="grid-4 grid-6_m grid-12_s">
					<div class="lp-comp wp wp--fadeleft">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_1.jpg" alt="1">
						<div class="lp-comp__content">
							<span>Сенсорная панель оператора Siemens Touch 7”</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_1.svg" alt="1">
						</div>
					</div>
				</div>
				<div class="grid-4 grid-offset-4 grid-6_m grid-offset-0_m grid-12_s">
					<div class="lp-comp wp wp--faderight">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_2.jpg" alt="1">
						<div class="lp-comp__content">
							<span>Надежные японские пневматические клапаны</span>
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
							<span>Американский газоанализатор продукционного газа с точностью до 0.1 ppm</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_3.svg" alt="1">
						</div>
					</div>
				</div>
				<div class="grid-4 grid-offset-4 grid-6_m grid-offset-0_m grid-12_s">
					<div class="lp-comp wp wp--faderight">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_4.jpg" alt="1">
						<div class="lp-comp__content">
							<span>Самый качественный японский адсорбент</span>
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
							<span>Немецкий расходомер продукционного газа с точностью до 1л/мин.</span>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_logo_5.svg" alt="1">
						</div>
					</div>
				</div>
				<div class="grid-4 grid-offset-4 grid-6_m grid-offset-0_m grid-12_s">
					<div class="lp-comp wp wp--faderight">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/comp_6.jpg" alt="1">
						<div class="lp-comp__content">
							<span>Влаго- и пылезащищенный электрический шкаф</span>
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
				<h3 class="h2">Вам нужно больше информации?</h3>
				<p class="lead sale-info__text">Если Вам нужно больше технической и&nbsp;общей информации о&nbsp;нашем генераторе азота, о&nbsp;сроке окупаемости и&nbsp;эксклюзивных условия, оставьте заявку и мы&nbsp;перезвоним вам в&nbsp;течение 5 минут.</p>
				<div class="sale-info__hwo">
					<div class="lead-big">Игорь Морозов</div>
					<span>Менеджер проектов</span>
				</div>
			</div>

			<div class="grid-4 grid-5_l grid-12_m sale-block__white">
				<div class="sale-small-form">
					<h3 class="h3 sale-small-form__title">Оставьте заявку</h3>
					<p class="lead">Наши специалисты свяжутся с&nbsp;Вами в&nbsp;течение 5&nbsp;минут и ответят на&nbsp;все вопросы</p>
					<form class="ajax-form vertical-form grey-form">
						<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
						<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
						<input type="hidden" value="Получение информации (генератор азота)" name="form_subject">
						<button type="submit" class="btn btn--icon">Отправить <i class="i-forward"></i></button>
						<p class="grid-12 form-note">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете <a href="#">согласие на обработку персональных данных.</a></p>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-basecomp" id="s-lp-basecomp">
	<div class="container">
		<h2 class="h1">Базовый Комплект поставки генератора</h2>

		<div class="basecomps basecomps--anim basecomps--genasot row">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/basekomp.jpg" alt="genasot" class="basecomps__img">

			<div class="grid-3 basecomps__left">
				<div class="basecomp">
					<p class="lead">Система фильтров</p>
					<p class="basecomp__descr">Служит для очистки от микрочастиц масла, пыли и других загрязнений сжатого воздуха</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Ресивер для сжатого воздуха</p>
					<p class="basecomp__descr">Служит своего рода «буфером» сжатого воздуха для выравнивания давления на входе в адсорбционные колонны</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Компрессор</p>
					<p class="basecomp__descr">Служит для сжатия воздуха, как правило используется винтовой маслозаполненный или безмаслянный компрессор</p>
					<figure><span class="dot"></span></figure>
				</div>
			</div>

			<div class="grid-3 grid-offset-6 basecomps__right">
				<div class="basecomp">
					<p class="lead">Ресивер для сжатого продукционного газа</p>
					<p class="basecomp__descr">Служит для выравнивания скачков давления и частичного накопления</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Адсорбционный генератор</p>
					<p class="basecomp__descr">Служит для разделения подготовленного сжатого воздуха на основные компоненты азот и кислород</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Выход продукционного газа</p>
					<figure><span class="dot"></span></figure>
				</div>
				<div class="basecomp">
					<p class="lead">Осушитель сжатого воздуха</p>
					<p class="basecomp__descr">Служит для удаления влаги из сжатого воздуха до точки росы +3 	&#176;С</p>
					<figure class="reverse"><span class="dot"></span></figure>
				</div>
			</div>

		</div>

		<div class="basecomp-dops row">
			<div class="grid-3 grid-12_l">
				<h3>Дополнительные опции</h3>
			</div>
			<div class="grid-3 grid-4_l grid-12_s">
				<div class="basecomp-dop">
					<div class="basecomp-dop__num lead-big">01</div>
					<div class="lead">Дожимной компрессор</div>
					<div class="basecomp-dop__descr">Служит для поднятия давления продукционного газа;</div>
				</div>
			</div>
			<div class="grid-3 grid-4_l grid-12_s">
				<div class="basecomp-dop">
					<div class="basecomp-dop__num lead-big">02</div>
					<div class="lead">Заправочная станция</div>
					<div class="basecomp-dop__descr">Комплекс оборудования, позволяющий заполнять стандартные баллоны сжатым газом под давлением до 200 Бар;</div>
				</div>
			</div>
			<div class="grid-3 grid-4_l grid-12_s">
				<div class="basecomp-dop">
					<div class="basecomp-dop__num lead-big">03</div>
					<div class="lead">Система доочистки</div>
					<div class="basecomp-dop__descr">Позволяет получить продукционный кислород или азот более высокой концентрации</div>
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-sale-trial">
	<div class="container">

		<div class="sale-block row--nopad">

			<div class="grid-8 grid-7_l grid-12_m sale-trial">
				<h2 class="h2">попробуйте наш генератор азота <mark>абсолютно бесплатно в&nbsp;течение 30&nbsp;дней</mark></h2>
				<ul class="lead checked-list checked-list--orange">
					<li>Бесплатно привезем генератор.</li>
					<li>Бесплатно смонтируем и запустим.</li>
					<li>Бесплатно отладим процесс подачи азота в конечный пункт.</li>
				</ul>
				<p class="lead sale-trial__subtitle">По окончанию тестирования вы сможете:</p>
				<ul class="lead standart-list">
					<li>Отказаться от оборудования.</li>
					<li>Выкупить генератор по Вашей индивидуальной цене.</li>
					<li>Взять генератор в аренду</li>
				</ul>
			</div>

			<div class="grid-4 grid-5_l grid-12_m sale-block__white">
				<div class="sale-small-form">
					<h3 class="h3 sale-small-form__title">Оставьте заявку</h3>
					<p class="lead">Наш специалист свяжется с&nbsp;Вами в&nbsp;течение 5&nbsp;минут и ответит на&nbsp;все вопросы</p>
					<form class="ajax-form vertical-form grey-form">
						<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
						<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
						<input type="hidden" value="Заявка на бесплатное тестирование (генератор азота)" name="form_subject">
						<button type="submit" class="btn btn--icon">Отправить <i class="i-forward"></i></button>
						<p class="grid-12 form-note">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Отправить» вы даете <a href="#">согласие на обработку персональных данных.</a></p>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-lp-variants" id="s-lp-variants">
	<div class="container">
		<h2 class="h1">Варианты исполнения</h2>

		<div class="row">
			<div class="grid-4 grid-12_m">
				<div class="work-variant wp">
					<span class="lead-extrabig">01</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/work-var-1.jpg" alt="1">
					<h4 class="lead-extrabig work-variant__title">На раме</h4>
					<p class="work-variant__text">Все модели генераторов могут быть смонтированы на одной раме для быстрого монтажа в любом отапливаемом помещении. В данном случае оборудование находится в полной технической готовности к запуску.</p>
					<!--<a href="#" class="link">Подробнее <i class="i-right-ar"></i></a>-->
				</div>
			</div>
			<div class="grid-4 grid-12_m">
				<div class="work-variant wp">
					<span class="lead-extrabig">02</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/work-var-2.jpg" alt="2">
					<h4 class="lead-extrabig work-variant__title">В контейнере</h4>
					<p class="work-variant__text">Мы производим генераторы кислорода и азота в контейнерном исполнении на базе 20 или 40 футового морского контейнера, в любом климатическом исполнении как для тропического климата, так и для крайнего севера.</p>
					<!--<a href="#" class="link">Подробнее <i class="i-right-ar"></i></a>-->
				</div>
			</div>
			<div class="grid-4 grid-12_m">
				<div class="work-variant wp">
					<span class="lead-extrabig">03</span>
					<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/work-var-3.jpg" alt="3">
					<h4 class="lead-extrabig work-variant__title">Автономное — на шасси</h4>
					<p class="work-variant__text">Любые генераторы могут быть смонтированы в специальном контейнере с автономными системами энергоснабжения (дизель или газогенератор) и установлены на шасси для любого автомобиля или прицепа.</p>
					<!--<a href="#" class="link">Подробнее <i class="i-right-ar"></i></a>-->
				</div>
			</div>
		</div>

	</div>
</section>


<section class="s-lp-table">

	<div class="s-lp-table__title">
		<div class="container ">
			<h2 class="h1">Модельный ряд генераторов</h2>
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
		<a href="#" class="btn">Скачать таблицу</a>
	</div>
</section>


<section class="s-sale-modrow">
	<div class="container">

		<div class="sale-block row--nopad">

			<div class="grid-8 grid-7_l grid-12_m sale-modrow">
				<h3 class="sale-modrow__title">Заполните форму и&nbsp;получите полный модельный ряд генераторов на&nbsp;почту</h3>
			</div>

			<div class="grid-4 grid-5_l grid-12_m sale-block__white">
				<div class="sale-small-form">
					<h3 class="h3 sale-small-form__title">Оставьте заявку</h3>
					<p class="lead">и в течение 5 минут Вам на почту придет файл с полным модельным рядом генераторов</p>
					<form class="ajax-form vertical-form grey-form">
						<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
						<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
						<input type="hidden" value="Получить модельный ряд генераторов (генератор азота)" name="form_subject">
						<button type="submit" class="btn btn--icon">Получить файл <i class="i-forward"></i></button>
						<p class="grid-12 form-note">Мы не передаем Вашу персональную информацию третьим лицам. Нажимая кнопку «Начать экономить» вы даете <a href="#">согласие на обработку персональных данных.</a></p>
					</form>
				</div>
			</div>

		</div>

	</div>
</section>


<section class="s-serts">
	<div class="container">
		<h2 class="h1">Сертификаты</h2>

		<div class="row">
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_1_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_1.jpg" alt="Акт освидетельствования грузовых контейнеров">
					</a>
					<span>Акт освидетельствования грузовых контейнеров</span>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_2_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_2.jpg" alt="Декларация соответствия">
					</a>
					<span>Декларация соответствия</span>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_3_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_3.jpg" alt="Сертификат соответствия">
					</a>
					<span>Сертификат промышленной безопасности</span>
				</div>
			</div>
			<div class="grid-3 grid-6_s">
				<div class="sert">
					<a href="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_4_b.jpg" class="fancy" data-fancybox="serts">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/lp-genasot/sert_4.jpg" alt="Сертификат соответствия ISO 9001-2015">
					</a>
					<span>Сертификат соответствия ISO 9001-2015</span>
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
				<h3 class="sale-ballon__title">Все ещё покупаете азот в&nbsp;баллонах?</h3>
			</div>

			<div class="grid-8 grid-12_m sale-block__white">
				<div class="sale-big-form">
					<h3 class="h2 sale-big-form__title"><mark>Оставьте заявку</mark> на расчет окупаемости генератора</h3>
					<p class="lead">Наш менеджер свяжется с Вами в течение 15 минут для уточнения деталей</p>
					<form class="ajax-form column-form grey-form">
						<div class="row">
							<div class="grid-6 grid-12_xs">
								<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
								<span class="form-subtitle">Как с Вами связаться?</span>
								<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" data-req="true">
								<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
							</div>
							<div class="grid-6 grid-12_xs">
								<label class="style-fileinput link">
									<input type="file" name="file_tz[]" data-multiple-caption="{count} файла(ов)" multiple />
									<i class="i-skrep"></i><span class="style-fileinput__text">Прикрепите ТЗ или опросный лист</span>
								</label>
								<span class="form-subtitle">Сколько баллонов потребляете в&nbsp;месяц?</span>
								<input type="text" name="user_kolbalon" placeholder="Количество баллонов" data-label="Количество баллонов">
								<input type="text" name="user_smena" placeholder="Длительность рабочей смены" data-label="Длительность рабочей смены">
							</div>
							<div class="grid-12 column-form__btnwrap">
								<input type="hidden" value="Заявка на расчет окупаемости генератора (генератор азота)" name="form_subject">
								<button type="submit" class="btn btn--icon">Отправить заявку <i class="i-forward"></i></button>
							</div>
							<p class="grid-12 form-note">Мы не передаем Вашу персональную информацию третьим лицам.<br>Нажимая кнопку «Отправить заявку» вы даете <a href="#">согласие на обработку персональных данных.</a></p>
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
			<h3 class="h2 simple-map-panel__title">Приглашаем вас посетить наш офис и&nbsp;производство</h3>
			<h3 class="h3">Адрес:</h3>
			<address class="lead">Россия, Г. Москва, 1-й Грайвороновский проезд 20, строение 35, Бизнес Парк "Турас", 5 Этаж</address>
			<a href="tel:+7(499)3993477" class="h3">+7 (499) 399 34 77</a>
		</div>

	</div>

</section>


<div id="modal-order-gn" class="modal">
	<p class="h3 modal__title">Оставить заявку</p>
	<p class="modal__subtitle">Оставьте заявку и наш менеджер свяжется с&nbsp;Вами и вышлет все необходимые материалы Вам на почту</p>
	<form class="ajax-form vertical-form">
		<input type="text" name="user_name" placeholder="Введите ваше имя" data-label="Имя пользователя">
		<input type="tel" name="user_contacts" placeholder="Введите ваш телефон*" data-label="Контакты" data-req="true">
		<input type="email" name="user_email" placeholder="Введите ваш e-mail" data-label="E-mail">
		<input type="hidden" value="Новая заявка (генераторы азота)" name="form_subject">
		<button type="submit" class="btn btn--icon">Отправить <i class="i-forward"></i></button>
	</form>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>