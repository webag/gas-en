<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Наши контакты</h1>
	</div>
</section>


<section class="s-contacts-links">
	<div class="container">
		<div class="links-list">
			<a href="/upload/Requisites_GG.docx" class="link" target="_blank" download rel="nofollow"><i class="i-pdf-2"></i>Реквизиты компании</a>
			<a href="#s-contacts-callback" class="link scrollto" target="_blank" download rel="nofollow"><i class="i-bubble"></i>Обратная связь</a>
			<a href="#" class="link" target="_blank" download rel="nofollow"><i class="i-badge"></i>Наши вакансии</a>
		</div>
	</div>
</section>


<section class="s-contacts-map" id="s-simple-map">
	<div class="simple-map js-simple-map" data-coord-x="55.720919" data-coord-y="37.725981"></div>

	<div class="container">

		<div class="contacts-map-panel">
			<h3 class="h3 contacts-map-panel__title">Главный офис и&nbsp;производство</h3>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/panel-img.jpg" alt="1" class="contacts-map-panel__img">
			<address class="lead">г. Москва, 1-й Грайвороновский проезд, д. 20, строение 35, Бизнес Парк «Турас», 5 Этаж</address>
			<div class="contacts-map-panel__sheme">
				<a href="#" class="link"><i class="i-mappin"></i>Указатель проезда</a>
			</div>
			<div class="contacts-map-panel__phone">
				<a href="tel:+7(499)3993477" class="h3">+7 (499) 399 34 77</a>
			</div>
			<p class="lead">Вакансии и&nbsp;заявки присылайте на&nbsp;почту: info@general-gas.ru</p>
		</div>

	</div>

</section>


<section class="s-contacts-callback" id="s-contacts-callback">
	<div class="container">

		<div class="contacts-callback">
			<p class="h2 contacts-callback__title">Напишите нам</p>
			<p class="lead contacts-callback__subtitle">Отправьте ваш вопрос и менеджер свяжется с вами в течении 15 минут.</p>

			<form class="ajax-form column-form grey-form">
				<div class="row">

					<div class="grid-5 grid-12_s">
						<input type="text" name="user_name" placeholder="Ваше имя" data-label="Имя пользователя">
						<span class="form-subtitle">Как с Вами связаться?</span>
						<input type="tel" name="user_tel" placeholder="Телефон*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
					</div>

					<div class="grid-7 grid-12_s">
						<textarea name="user_comment" rows="7" placeholder="Опишите ваш вопрос" data-label="Сообщение"></textarea>
						<label class="style-fileinput link">
							<input type="file" name="file[]" data-multiple-caption="{count} файла(ов)" multiple />
							<i class="i-skrep"></i><span class="style-fileinput__text">Прикрепить файл</span>
						</label>
					</div>

					<div class="grid-12 column-form__btnwrap">
						<input type="hidden" value="Обратная связь (контакты)" name="form_subject">
						<button type="submit" class="btn btn--icon">Отправить <i class="i-forward"></i></button>
					</div>
					<p class="grid-12 form-note">Мы не передаем Вашу персональную информацию третьим лицам.<br>Нажимая кнопку «Отправить заявку» вы даете <a href="#">согласие на обработку персональных данных.</a></p>
				</div>
			</form>

		</div>

	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>