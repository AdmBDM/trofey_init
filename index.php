<?php
	/** @var $href_mail */
	/** @var $href_tel */
	/** @var $mainCfg */

	if(session_status() != PHP_SESSION_ACTIVE) {
		session_start();
	}
?>

<!DOCTYPE html>
<html lang="ru-RU">

<?php include 'source/php/page_head.php'; ?>

<body>
<header>
	<?php include 'source/php/header.php'; ?>

	<div class="container title-block">
		<div class="content-container title">
			<h1 class="title__name white text-uppercase text-bold">
				ОХОТНИЧИЙ КЛУБ «ТРОФЕЙ» – ЭЛИТНАЯ ОХОТА В ТАТАРСТАНЕ
			</h1>
			<h2 class="title__discr white text-uppercase text-bold ">
				ОТДЫХ, КОТОРЫЙ ВЫ ЗАСЛУЖИЛИ
			</h2>
		</div>
	</div>
</header>
<main>
	<div class="info-block content-container">
		<div class="info-block-title">
			<h2 class="info-block-title__name text-bold">ОБ ОХОТНИЧЬЕМ КЛУБЕ</h2>
			<span class="info-block-title__discr text18 text-bold">Охотничий клуб "Трофей" был создан группой энтузиастов.
		 Мы организуем и
		 проводим охоту и рыбалку по Республике Татарстан.</span>
		</div>
		<div class="club-mission">
			<img src="images/logo/icon1_1GdtMwr.png" alt="" class="club-mission__img">
			<div class="club-mission__discr">
		 <span class="club-mission__discr-text text18 text-bold">
			Миссия клуба:<br/>– Обеспечение бережного отношения к фауне, следовательно, процветания фауны и флоры Республики
			Татарстан;<br/>– Защита зверей и дикой природы от браконьеров и хозяйственной деятельности человека.
		 </span>
			</div>
		</div>
		<div class="choose-our-club">
		<span class='choose-our-club-text text-bold'>ЕСЛИ ВЫ РЕШИЛИ СТАТЬ ОХОТНИКОМ И РЫБОЛОВОМ, но не
		 знаете с чего начать или имеете дефицит времени, обратитесь к нам.</span>

			<div class="choose-our-club-item">
				<img src="images/icon2_hTgSIba.png" alt="" class="choose-our-club-item__img">
				<span class='choose-our-club-text'>МЫ ПОМОЖЕМ вступить в общество охотников и рыболовов, подготовить документы
			для приобретения любого вида оружия.</span>
			</div>
			<div class="choose-our-club-item">
				<img src="images/icon2_hTgSIba.png" alt="" class="choose-our-club-item__img">
				<span class='choose-our-club-text'>ПРОКОНСУЛЬТИРУЕМ и подберем оружие и экипировку, исходя из Ваших
			индивидуальных особенностей и пожеланий.</span>
			</div>
			<div class="choose-our-club-item">
				<img src="images/icon2_hTgSIba.png" alt="" class="choose-our-club-item__img">
				<span class='choose-our-club-text'>ОРГАНИЗУЕМ коммерческую охоту и рыбалку, изготовление Ваших трофеев у
			опытных таксидермистов.</span>
			</div>
		</div>
		<div class="info-menu">
			<button class="info-menu__btn1 button my-btn">ОБРАТНАЯ СВЯЗЬ</button>
			<a class="info-menu__btn2 button" href="info.php">ДОКУМЕНТЫ</a>
		</div>

		<p class="allnews-link">
			<a class="allnews-link__text" target="_blank"
			   href="https://ojm.tatarstan.ru/kalendar-ohotnika-tatarstan-2020-sroki-ohoti-na.htm">КАЛЕНДАРЬ ОХОТНИКА
				ТАТАРСТАН 2022 ГОД</a></p>
	</div>

	<article class="blog content-container">
		<img src="images/7news.jpg" alt="" class="blog__img">
		<div class="blog-article blog-article-width45">
			<h3 class="blog-article__title text-bold">Об охоте на:</h3>
			<p class="blog-article__discr text-bold ">СЕЛЕЗНЯ С ПОДСАДНОЙ</p>
			<p class="blog-article__text">С 01 апреля 2023г по 06 мая 2023г открывается весенний сезон охоты на селезня с подсадной уткой.</p>
			<p class="blog-article__text"></p>Стоимость путёвки - 3&nbsp;000 рублей.<br>
			<p class="blog-article__text"></p><br>
			<p class="blog-article__discr">По вопросу приобретения путёвок звоните <a
						class="contacts__phone black text18 text-bold " href="<?= $href_tel ?>"> <?= $mainCfg['phone'] ?></a>.</p>
		</div>
	</article>

	<article class="blog content-container">
		<img src="images/goose01.jpg" alt="" class="blog__img">
		<div class="blog-article blog-article-width45">
			<h3 class="blog-article__title text-bold">Об охоте на:</h3>
			<p class="blog-article__discr text-bold ">ГУСЯ, СЕЛЕЗНЯ</p>
			<p class="blog-article__text">С 15 апреля 2023г по 24 апреля 2023г открывается сезон охоты на селезня, гуся.</p>
			<p class="blog-article__text">Стоимость путёвки - 2000 рублей.</p>
			<p class="blog-article__text"></p><br>
			<p class="blog-article__discr">По вопросу приобретения путёвок звоните <a
						class="contacts__phone black text18 text-bold " href="<?= $href_tel ?>"><?= $mainCfg['phone'] ?></a>.</p>
		</div>
	</article>

	<article class="blog content-container">
		<img src="images/scolopax01.jpg" alt="" class="blog__img">
		<div class="blog-article blog-article-width45">
			<h3 class="blog-article__title text-bold">Об охоте на:</h3>
			<p class="blog-article__discr text-bold ">ВАЛЬДШНЕПА</p>
			<p class="blog-article__text">С 22 апреля 2023г по 01 мая 2023г открывается сезон охоты на вальдшнепа.</p>
			<p class="blog-article__text">Стоимость путёвки - 2000 рублей.</p>
			<p class="blog-article__text"></p><br>
			<p class="blog-article__discr">По вопросу приобретения путёвок звоните <a
						class="contacts__phone black text18 text-bold " href="<?= $href_tel ?>"><?= $mainCfg['phone'] ?></a>.</p>
		</div>
	</article>

	<p class="allnews-link"><a class="allnews-link__text " href="news.php">Все новости</a></p>

	<div class="animals container">
		<div class="animals-gallery__title">
			<h2 class="text-uppercase text-bold white">ЖИВОТНЫЙ МИР ТАТАРСТАНА</h2>
		</div>
		<div class="animals-gallery content-container">
			<div class="animals-gallery-item">
				<a href="hunt.php#kaban" class="galley-item__img">
					<img src="images/1kaban.png" alt="" class="galley-item__img">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">Кабан</P>
			</div>
			<div class="animals-gallery-item">
				<a href="hunt.php#moose" class="galley-item__img">
					<img src="images/2los.png" alt="">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">лось</P>
			</div>
			<div class="animals-gallery-item">
				<a href="hunt.php#hair" class="galley-item__img">
					<img src="images/3zayac.png" alt="">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">заяц</P>
			</div>
			<div class="animals-gallery-item">
				<a href="hunt.php#goose" class="galley-item__img">
					<img src="images/4gus.png" alt="">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">гусь</P>
			</div>
			<div class="animals-gallery-item">
				<a href="hunt.php#duck" class="galley-item__img">
					<img src="images/5utka.png" alt="">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">утка</P>
			</div>
			<div class="animals-gallery-item">
				<a href="hunt.php#fox" class="galley-item__img">
					<img src="images/6lisa.png" alt="">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">лиса</P>
			</div>
			<div class="animals-gallery-item">
				<a href="hunt.php#beaver" class="galley-item__img">
					<img src="images/7bobr.png" alt="">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">бобр</P>
			</div>
			<div class="animals-gallery-item">
				<a href="hunt.php#gopher" class="galley-item__img">
					<img src="images/8suslik.png" alt="">
				</a>
				<P class="gallery-item__discr text-uppercase text-bold white">суслик</P>
			</div>

		</div>
	</div>

</main>

<?php include 'source/php/footer.php'; ?>

<script src="source/js/jquery.min.js"></script>
<script src="source/js/trofey.js"></script>
</body>
</html>
