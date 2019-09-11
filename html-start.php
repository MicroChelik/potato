<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=bb5a6aff-2144-414d-87dc-ed5295dd426a
&lang=ru_RU" type="text/javascript"></script>
	<title>РусУвроплант</title>
</head>
<body>
	<header>
		<div class="container dekstop-header">
			<div class="row first-line align-items-center py-2">
				<div class="col-2 imgW100">
					<a href="index.php">
						<img src="img/logo.png">
					</a>
				</div>
				<div class="col-3 d-flex align-items-center">
					<img src="img/icons/phone.svg">
					<p class="decorition">
						<a href="">(3412) 62-23-51</a> <br> <a href="">(3412) 62-13-35</a>
					</p>
				</div>
				<div class="col-2">
					<a data-fancybox data-animation-duration="700" data-src="#orderCall" href="javascript:;">
						<button class="greenBtn">Обратный звонок</button>
					</a>
						<div style="display: none;" id="orderCall" class="animated-modal">
							<div class="card">
								<div class="card-header">
									<h1>Обратный звонок</h1>
								</div>
								<div class="card-body">
									<form class="my-form">
										<input type="text" placeholder="Ваше имя" required>
										<input type="tel" placeholder="Ваш номер телефона" required="">
										<p>
											Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a>
										</p>
										<a data-fancybox data-animation-duration="700" data-src="#thanks" href="javascript:;">
											<input type="submit" placeholder="Отправить" value="Отправить" class="greenBtn">
										</a>
									</form>
								</div>
							</div>
						</div>
						<div style="display: none;" id="thanks" class="animated-modal">
							<div class="card">
								<div class="card-header">
									<h1>Спасибо</h1>
								</div>
								<div class="card-body">
									<p class="mb-5">
										Ваша заказ успешно принят.
									</p>
									<button class="greenBtn" data-fancybox-close>Закрыть</button>
								</div>
							</div>
						</div>
				</div>
				<div class="col-4 d-flex align-items-center justify-content-center">
					<img src="img/icons/mail.svg" class="mr-3">
					<p class="decorition"><a href="">roseuroplant@yandex.ru</a></p>
				</div>
				<div class="col-1 d-flex align-items-center justify-content-between">
					<a href="">
						<img src="img/icons/basket.svg">
					</a>
					<div class="greenBg" noselect>
						<p>(1)</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid top-line">
			<div class="row">
				<div class="col-12 imgW100">
					<!-- <img src="img/top-line.svg"> -->
				</div>
			</div>
		</div>
		<div class="d-block d-lg-none mobile-header">
			<div class="container">
				<div class="row mob-nav-row">
					<div class="col-auto">
						<div id="nav-icon3">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</div>
					</div>
					<div class="col-auto">
						<a href="index.php"><img src="img/logo-mob.png"></a>
					</div>
					<div class="col-auto d-flex align-items-center justify-content-between">
						<div class="greenBg" noselect>
							<p>(1)</p>
						</div>
						<a href="page-basket.php">
							<img src="img/icons/basket.svg">
						</a>
					</div>
				</div>
			</div>
			<div class="mob-line">
			</div>
		</div>
		<nav class="container">
			<div class="row justify-content-end dekstop-nav">
				<div class="col-8">
					<ul class="topmenu">
						<li><a href="">Главная</a></li>
						<li><div class="li-div"><a href="" class="submenu-link">О компании</a><div class="redArrow"></div></div>
							<ul class="submenu submenu1">
								<li><a href="">О компании</a></li>
								<li><a href="">Качество</a></li>
							</ul>
						</li>
						<li><a href="">Сорта картофеля</a></li>
						<li><div class="li-div"><a href="" class="submenu-link">Новости</a><div class="redArrow"></div></div>
							<ul class="submenu submenu2">
								<li><a href="">Новости</a></li>
								<li><a href="">Полезная <br> информация</a></li>
							</ul>
						</li>
						<li><a href="">Доставка и оплата</a></li>
						<li><a href="">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div class="row mob-nav justify-content-center">
				<div class="col-12 grey-line">
					<ul class="topmenu mb-3">
						<li><a href="">Главная</a></li>
						<li><div class="li-div"><a href="" class="submenu-link">О компании</a><div class="redArrow"></div></div>
							<ul class="submenu">
								<li><a href="">О компании</a></li>
								<li><a href="">Качество</a></li>
							</ul>
						</li>
						<li><a href="">Сорта картофеля</a></li>
						<li><div class="li-div"><a href="" class="submenu-link">Новости</a><div class="redArrow"></div></div>
							<ul class="submenu">
								<li><a href="">Новости</a></li>
								<li><a href="">Полезная <br> информация</a></li>
							</ul>
						</li>
						<li><a href="">Доставка и оплата</a></li>
						<li><a href="">Контакты</a></li>
					</ul>
				</div>
				<div class="col-12 d-flex align-items-center justify-content-center mb-3 mt-3">
					<img src="img/icons/phone.svg">
					<p class="decorition">
						<a href="tel:(3412) 62-23-51">(3412) 62-23-51</a> <br> <a href="tel:(3412) 62-13-35">(3412) 62-13-35</a>
					</p>
				</div>
				<div class="col-12 d-flex align-items-center justify-content-center mb-3">
					<img src="img/icons/mail.svg" class="mr-3">
					<p class="decorition"><a href="mailto:roseuroplant@yandex.ru">roseuroplant@yandex.ru</a></p>
				</div>
				<div class="col-10">
					<a data-fancybox data-animation-duration="700" data-src="#orderCall" href="javascript:;">
						<button class="greenBtn">Обратный звонок</button>
					</a>
				</div>
			</div>
		</nav>
	</header>