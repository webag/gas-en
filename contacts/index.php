<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Contacts");
?>


<section class="s-page-title">
	<div class="container">
		<h1 class="h1">Our contacts</h1>
	</div>
</section>


<section class="s-contacts-links">
	<div class="container">
		<div class="links-list">
			<a href="/upload/Requisites_GG.docx" class="link" target="_blank" download rel="nofollow"><i class="i-pdf-2"></i>Company details</a>
			<a href="#s-contacts-callback" class="link scrollto" target="_blank" download rel="nofollow"><i class="i-bubble"></i>Contact us</a>
			<a href="https://hh.ru/employer/1975511" class="link" target="_blank"><i class="i-badge"></i>Job vacancies</a>
		</div>
	</div>
</section>


<section class="s-contacts-map" id="s-simple-map">
	<div class="simple-map js-simple-map" data-coord-x="55.720919" data-coord-y="37.725981"></div>

	<div class="container">

		<div class="contacts-map-panel">
			<h3 class="h3 contacts-map-panel__title">General office and manufacture</h3>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/contacts/panel-img.jpg" alt="1" class="contacts-map-panel__img">
			<address class="lead">Moscow, 1st Graivoronovsky Passage 20, Building 35, Business Park "Turas", 5 Floor</address>
			<div class="contacts-map-panel__sheme">
				<a href="#" class="link"><i class="i-mappin"></i>Directions</a>
			</div>
			<div class="contacts-map-panel__phone">
				<a href="tel:+7(499)3993477" class="h3">+7 (499) 399 34 77</a>
			</div>
			<p class="lead">Jobs and applications send to the mail: info@general-gas.ru</p>
		</div>

	</div>

</section>


<section class="s-contacts-callback" id="s-contacts-callback">
	<div class="container">

		<div class="contacts-callback">
			<p class="h2 contacts-callback__title">WRITE US</p>
			<p class="lead contacts-callback__subtitle">Send your question and the manager will contact you within 15 minutes.</p>

			<form class="ajax-form column-form grey-form">
				<div class="row">

					<div class="grid-5 grid-12_s">
						<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
						<span class="form-subtitle">How to contact you?</span>
						<input type="tel" name="user_tel" placeholder="Telephone number*" data-label="Телефон" data-req="true">
						<input type="text" name="user_email" placeholder="E-mail*" data-label="E-mail" data-req="true">
					</div>

					<div class="grid-7 grid-12_s">
						<textarea name="user_comment" rows="7" placeholder="Question" data-label="Сообщение"></textarea>
						<label class="style-fileinput link">
							<input type="file" name="file[]" data-multiple-caption="{count} файла(ов)" multiple />
							<i class="i-skrep"></i><span class="style-fileinput__text">Attach file</span>
						</label>
					</div>

					<div class="grid-12 column-form__btnwrap">
						<input type="hidden" value="Обратная связь (контакты)" name="form_subject">
						<button type="submit" class="btn btn--icon">Send <i class="i-forward"></i></button>
					</div>
					<p class="grid-12 form-note">We do not share your personal information with third parties. By clicking the button "Send ", you consent to <a href="#">personal data processing</a>.</p>
				</div>
			</form>

		</div>

	</div>
</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>