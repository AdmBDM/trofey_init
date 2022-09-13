<?php
?>

<div class="overlay" style="display:none;">
	<div class="">
		<form class="form-popup" action="" method="post">
			<div class="form-popup__header">
				<h3 class="text-uppercase">Обратная связь</h3>
			</div>
			<label for="name">Пожалуйста, представьтесь</label>
			<input class="form-popup__input" type="text" id="name" name="fname" placeholder="Имя">
			<br><label for="phone">Телефон для связи</label>
			<input class="form-popup__input" type="tel" id="phone"
				   name="phone" placeholder="Введите номер телефона"
				   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
			<div class="form-group">
				<label for="my-textarea"></label>
				<textarea id="my-textarea" class="form-popup__input" name="" rows="10"
						  placeholder="Введите ваш комментарий*"></textarea>
			</div>
			<div class="form-popup-button">
				<button id="my-btn-2" name="call-me" class="button form-popup__button form-popup__input" type="button">
					ОТПРАВИТЬ
				</button>
			</div>
			<span class="close-popup closex"></span>
		</form>
	</div>
</div>
