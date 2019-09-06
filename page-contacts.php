<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Контакты</li>
		 	</ol>
		</div>
	</div>
	<section class="container contacts">
		<div class="row">
			<div class="col-lg-5">
				<p class="adress-title">Адрес:</p>
				<p>427000, Удмуртия, c. Завьялово, ул. Гольянская, 96 Б (10 км на ю.-в. от г. Ижевск)</p>
				<p class="adress-title">Время работы:</p>
				<p>Офис: 8:00 - 17:00, пн-пт время мск+1 или часовой пояс</p>
				<p>Магазин: пн-пт 8:00 - 17:00 обед 12:00 - 13:00, сб 9:00-15:00</p>
				<p>Примем заявок с сайта круглосуточно</p>
				<div class="contacts-divs">
					<div>
						<p class="adress-title">Телефоны:</p>
						<p>(3412) 62-23-51 <br> (3412) 62-13-35</p>
					</div>
					<div>
						<p class="adress-title">Email:</p>
						<p>roseuroplant@yandex.ru</p>
					</div>
					<div>
						<p class="adress-title">Мы в соцсетях:</p>
						<a href=""><img src="img/vk.png"></a>
					</div>
				</div>
				<form class="my-form">
					<h2 class="text-left">Написать нам</h2>
					<input type="text" placeholder="Ваше имя *">
					<input type="email" placeholder="Ваш email *">
					<input type="tel" placeholder="Ваш номер телефона *">
					<textarea placeholder="Ваш комментарий*" rows="3"></textarea>
					<div class="d-flex justify-content-between">
						<p class="mb-0">
							Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a>
						</p>
						<input type="submit" class="green-input">
					</div>
				</form>
			</div>
			<div class="col-lg-7">
				<div class="my-map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab2ec0964aca47207ea3dcb4df0785e312e2e15903b43b0d53e85ecfadff4dbe5&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
		</div>
	</section>
<?php
	include('html-end.php');
?>