<?php
	require_once "tools.php";
	require_once "funcDB.php";
	$mainCfg = require_once("source/php/config.php");

	$link = con2db();

	$href_tel = 'tel:' . str_replace(['(', ')', '&nbsp;', ' '], '', $mainCfg['phone']);
	$href_mail = 'mailto:' . $mainCfg['email'];
?>

<div class="container contacts-bg">
	<div class="contacts__logo">
		<img src="/images/logo/logohead1.png" alt="" class="logo">
	</div>

	<div class="content-container contacts">
		<div class="contacts-left">
			<a href="<?= $href_mail ?>" class="contacts__post white text-bold text18"><?= $mainCfg['email'] ?></a>
		</div>
		<div class="contacts-right">
			<a href="<?= $href_tel ?>" class="contacts__post white text-bold text18"><?= $mainCfg['phone'] ?></a>
			<button id="my-btn-1" name="call-me" class="button contacts__button my-btn white text-bold text18"
					type="button">
				Обратная связь
			</button>
		</div>
	</div>

</div>

<nav class="menu content-container">
	<div class="menu menu-1">
		<div class="menu__item menu__item-text">
			<a class="button menu-btn text-bold" href="/index.php">О КЛУБЕ</a>
		</div>
		<div class="menu__item menu__item-text">
			<a class="button menu-btn text-bold" href="/hunt.php">ОХОТА В ТАТАРСТАНЕ</a>
		</div>
	</div>
	<div class="menu menu-2">
		<div class="menu__item menu__item-text">
			<a class="button menu-btn text-bold" href="/info.php">ПОЛЕЗНАЯ ИНФОРМАЦИЯ</a>
		</div>
		<div class="menu__item menu__item-text">
			<a class="button menu-btn text-bold" href="/news.php">НОВОСТИ</a>
		</div>
	</div>
</nav>


