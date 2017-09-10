<footer class="s-site-footer">
	<div class="container">

		<div class="row">
			<div class="grid-3 grid-5_l grid-12_m s-site-footer__left">
				<div class="head-logo">
					<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="General Gas logotype" width="281" height="42"></a>
				</div>
				<div class="foot-left-text">
					<a href="/upload/Requisites_GG.docx" class="link" target="_blank" rel="nofollow" download>Company details</a>
					<p>General Gas – production of nitrogen and oxygen generators</p>
					<p>2004–2017. General Gas</p>
				</div>
			</div>

			<div class="grid-3 grid-3_l grid-12_m grid-offset-3 grid-offset-0_l s-site-footer__nav">
				<nav class="foot-nav">
					<a href="/products/">PRODUCTS</a>
					<a href="/factory/">PRODUCTION</a>
					<a href="/cases/">PROJECTS</a>
					<a href="/info/">USEFUL INFORMATION</a>
					<a href="/usage/">APPLICATION</a>
					<a href="/about/">ABOUT US</a>
					<a href="/contacts/">CONTACTS</a>
				</nav>
			</div>

			<div class="grid-3 grid-4_l grid-12_m s-site-footer__right">
				<div class="lang-switcher">
					<a href="http://general-gas.ru" class="link--blue">rus</a>
					<span>/</span>
					<a href="http://general-gas.com" class="link--blue active">eng</a>
				</div>
				<div class="foot-rigth-text">
					<address>Adress: Moscow, 1st Graivoronovsky Passage 20, Building 35, Business Park "Turas", 5 Floor</address>
					<a href="tel:+7(499)399-34-77" class="link--black h3 foot-rigth-text__phone">+7 (499) 399-34-77</a>
					<a href="mailto:info@general-gas.ru" class="link head-info__mail">info@general-gas.ru</a>
				</div>
			</div>
		</div>

	</div>
</footer>

<section class="s-policy">
	<div class="container lead">
		All rights are protected, copying of information is prohibited.
	</div>
</section>


<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-callback" class="modal">
		<p class="h3 modal__title">Заказать обратный звонок</p>
		<p class="modal__subtitle">Оставьте заявку и наш менеджер свяжется с&nbsp;Вами и вышлет все необходимые материалы Вам на почту</p>
		<form class="ajax-form vertical-form">
			<input type="text" name="user_name" placeholder="Введите ваше имя" data-label="Имя пользователя">
			<input type="tel" name="user_contacts" placeholder="Введите ваш телефон*" data-label="Телефон" data-req="true">
			<input type="email" name="user_email" placeholder="Введите ваш e-mail" data-label="E-mail">
			<input type="hidden" value="Заказали обратный звонок" name="form_subject">
			<button type="submit" class="btn btn--icon">Отправить <i class="i-forward"></i></button>
		</form>
	</div>

	<div id="modal-order" class="modal">
		<p class="h3 modal__title">Leave an application</p>
		<p class="modal__subtitle">Our manager will contact you within 15 minutes to clarify the details</p>
		<form class="ajax-form vertical-form">
			<input type="text" name="user_name" placeholder="Your name" data-label="Имя пользователя">
			<input type="tel" name="user_contacts" placeholder="Telephone number*" data-label="Контакты" data-req="true">
			<input type="email" name="user_email" placeholder="E-mail" data-label="E-mail">
			<input type="hidden" value="Новая заявка (референс)" name="form_subject">
			<button type="submit" class="btn btn--icon">Send <i class="i-forward"></i></button>
		</form>
	</div>

	<div id="modal-thanks" class="modal">
		<p class="h3 modal__title modal__title--nomargin">Thanks!</p>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHP7Iegls0varMN__B80OC9j3GOwwW-48"></script>


<!--callbackhunter-->
<script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=ef6a1ae6107f184e491ab32a72b2bcf8" charset="UTF-8"></script>
<!--callbackhunter-->


<!--roistat-->
<script>
	(function(w, d, s, h, id) {
		w.roistatProjectId = id; w.roistatHost = h;
		var p = d.location.protocol == "https:" ? "https://" : "http://";
		var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
		var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
	})(window, document, 'script', 'cloud.roistat.com', 'c77413983437f1a7723be759251cbba2');
</script>
<!--roistat-->


<!--google-->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-103558222-1', 'auto');
	ga('send', 'pageview');

	setTimeout(function(){ga('send', 'event', 'New Visitor', location.pathname);}, 15000);

</script>
<!--google-->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter45470613 = new Ya.Metrika({
					id:45470613,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true,
					ecommerce:"dataLayer"
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45470613" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>