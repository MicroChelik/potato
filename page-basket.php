<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Корзина</li>
		 	</ol>
		</div>
	</div>
	<section class="container contacts">
		<div class="row justify-content-end">
			<div class="col-lg-2">
				<button class="clearBtn"><img src="img/icons/close.svg"> Очистить</button>
			</div>
		</div>
		<div class="row product-row align-items-center">
			<div class="col-lg-1 col-auto order-2 order-lg-1">
				<input type="checkbox" id="checkbox">
				<label for="checkbox"></label>
			</div>
			<div class="col-lg-11 product-card order-1 order-lg-2">
				<div class="col-lg-2">
					<img src="img/product-card.png">
				</div>
				<div class="col-lg-2">
					<p class="product-name">Беллароза</p>
				</div>
				<div class="col-lg-2 offset-lg-4">
					<div class="d-flex cardValue">
						<button class="dec">-</button>
						<input type="text" value="1">
						<button class="inc">+</button>
					</div>
				</div>
				<div class="col-lg-2">
					<p class="product-price">400 р</p>
				</div>
				<img src="img/icons/product-close.svg" class="product-close">
			</div>
		</div>
		<div class="row product-row align-items-center">
			<div class="col-lg-1 col-auto order-2 order-lg-1">
				<input type="checkbox" id="checkbox2">
				<label for="checkbox2"></label>
			</div>
			<div class="col-lg-11 product-card order-1 order-lg-2">
				<div class="col-lg-2">
					<img src="img/product-card.png">
				</div>
				<div class="col-lg-2">
					<p class="product-name">Беллароза</p>
				</div>
				<div class="col-lg-2 offset-lg-4">
					<div class="d-flex cardValue">
						<button class="dec">-</button>
						<input type="text" value="1">
						<button class="inc">+</button>
					</div>
				</div>
				<div class="col-lg-2">
					<p class="product-price">400 р</p>
				</div>
				<img src="img/icons/product-close.svg" class="product-close">
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-lg-2 d-flex justify-content-between total-price">
				<p>Итого:</p>
				<p class="product-price">400 р</p>
			</div>
		</div>
	</section>
	<section class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="text-left">Оформление заказа</h2>
			</div>
			<div class="col-lg-2 basket-p">
				<p>Адрес:</p>
				<p>Способ доставки *:</p>
				<p>Способ оплаты *:</p>
				<p>Ф.И.О. *:</p>
				<p>E-mail *:</p>
				<p>Телефон *:</p>
				<p>Сообщение:</p>
			</div>
			<div class="col-lg-5 basket-form">
				<form class="my-form">
					<p class="mobile-p">Адрес:</p>
					<input type="text">
					<p class="mobile-p">Способ доставки *:</p>
					<div class="form-buttons delivery-buttons">
						<button type="button" class="active">Самовывоз</button>
						<button type="button">Транспортная компания</button>
					</div>
					<p class="mobile-p">Способ оплаты *:</p>
					<div class="form-buttons pay-buttons">
						<button type="button">При получении</button>
						<button type="button" class="active">Оплата банковской картой</button>
					</div>
					<p class="mobile-p">Ф.И.О. *:</p>
					<input type="text">
					<p class="mobile-p">E-mail *:</p>
					<input type="text">
					<p class="mobile-p">Телефон *:</p>
					<input type="text">
					<p class="mobile-p">Сообщение:</p>
					<textarea rows="3"></textarea>
					<p>
						Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a>
					</p>
					<div class="last-buttons">
						<button>Вернуться назад</button>
						<button class="greenBtn">Оформить заказ</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php
	include('html-end.php');
?>