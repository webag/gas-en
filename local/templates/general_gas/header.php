<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<title><?$APPLICATION->ShowTitle()?></title>

	<!--fav-->
	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/manifest.json">
	<link rel="shortcut icon" href="/favicons/favicon.ico">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#002061">
	<!--fav-->

	<!-- og -->
	<meta property="og:title" content="<?$APPLICATION->ShowTitle()?>">
	<meta property="og:description" content='<?=$APPLICATION->ShowProperty("description");?>'/>
	<meta property="og:type" content="website" />
	<meta property="og:image" content='<?=$APPLICATION->ShowProperty("ogimage",SITE_TEMPLATE_PATH."/img/og.jpg");?>' />
	<!-- og -->

	<?
	use Bitrix\Main\Page\Asset;

	Asset::getInstance()->addString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/assets.js");
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
	Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500,500i&amp;subset=cyrillic" rel="stylesheet">');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/main.css");
	?>

	<? $APPLICATION->ShowHead();?>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<header class="s-site-head">
	<div class="container">
		<div class="head-logo">
			<a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="General Gas logotype" width="281" height="42"></a>
		</div>
		<div class="head-info">
			<div class="lang-switcher">
				<a href="#" class="link--blue active">рус</a>
				<span>/</span>
				<a href="#" class="link--blue">eng</a>
			</div>
			<div class="head-info__contacts">
				<a href="mailto:info@general-gas.ru" class="link head-info__mail"><i class="i-mail"></i>info@general-gas.ru</a>
				<a href="tel:+7(499)399-34-77" class="link--black h3 head-info__phone">+7 (499) 399-34-77</a>
			</div>
			<a href="#callbackhunter" class="link link--blue head-info__callback">Обратный звонок</a>
		</div>
	</div>
</header>


<div class="menu-btn">
	<figure class="burger"></figure>
</div>


<? if ((!CSite::InDir('/generatory-kisloroda/')) && (!CSite::InDir('/generatory-azota/'))) : ?>
	<nav class="s-main-nav">
		<div class="s-main-nav__phone">
			<a href="tel:+7(499)399-34-77" class="link--black h4">+7 (499) 399-34-77</a>
		</div>

		<?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"top_menu",
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "top",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "all_menu"
			),
			false
		);?>

	</nav>
<? endif; ?>
