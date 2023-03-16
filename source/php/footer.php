<?php
	/** @var $href_mail */
	/** @var $href_tel */
	/** @var $mainCfg */
?>

<?php include 'source/php/callback.php'; ?>

<footer class="container footer-bg">
	<div class="content-container footer">
		<div class="footer-title">
			<h3 class="white text-uppercase text-bold">ОХОТНИЧИЙ КЛУБ «ТРОФЕЙ»</h3>
		</div>
		<div class="footer-info">
			<div class="footer-info__logo">
				<img src="/images/logofooter.png" alt="">
			</div>
			<div class="footer-info__contacts">
				<img class="footer-info-contacts__img" src="/images/icon3.png" alt="">
				<a class="footer-info-contacts__text footer-info-contacts__text-d white text-bold text18"
				   href="<?= $href_tel ?>"><?= $mainCfg['email'] ?></a>
			</div>
			<div class="footer-info__contacts">
				<img class="footer-info-contacts__img" src="/images/icon4.png" alt="">
				<span class="footer-info-contacts__text white text-bold"><?= $mainCfg['address'] ?></span>
			</div>
			<div class="footer-info__contacts">
				<img class="footer-info-contacts__img" src="/images/icon5.png" alt="">
				<a href="<?= $href_mail ?>"
				   class="footer-info-contacts__text footer-info-contacts__text-d white text-bold"><?= $mainCfg['email'] ?></a>
			</div>
		</div>
	</div>
</footer>
