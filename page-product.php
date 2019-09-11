<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
		    	<li class="breadcrumb-item"><a href="">Сорта кортофеля</a></li>
		    	<li class="breadcrumb-item"><a href="">Подраздел сортов картофеля</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Беллароза</li>
		 	</ol>
		</div>
	</div>
	<section class="container">
		<div class="row">
			<div class="col-lg-6">
				 <div class="slider-product">
				 	<div>
				 		<div class="product-img">
				 			<img src="img/product-img1.png">
				 		</div>
				 		<div class="product-zoom">
				 			<a href="img/product-img1.png" data-fancybox="images" class="zoom">
				 			<img src="img/icons/zoom.svg">
				 		</a>
				 		</div>
				 	</div>
				 	<div>
				 		<div class="product-img">
				 			<img src="img/product1.png">
				 		</div>
				 		<div class="product-zoom">
				 			<a href="img/product1.png" data-fancybox="images" class="zoom">
					 			<img src="img/icons/zoom.svg">
					 		</a>
				 		</div>	
				 	</div>
				 	<div>
				 		<div class="product-img">
				 			<img src="img/product2.png">
				 		</div>
				 		<div class="product-zoom">
				 			<a href="img/product2.png" data-fancybox="images" class="zoom">
					 			<img src="img/icons/zoom.svg">
					 		</a>
				 		</div>
				 	</div>
				 	<div>
				 		<div class="product-img">
				 			<img src="img/product3.png">
				 		</div>
				 		<div class="product-zoom">
				 			<a href="img/product3.png" data-fancybox="images" class="zoom">
					 			<img src="img/icons/zoom.svg">
					 		</a>
				 		</div>
				 	</div>
				 </div>
				 <div class="slider-for-product">
				 	<div>
				 		<img src="img/product-img1.png">
				 	</div>
				 	<div>
				 		<img src="img/product1.png">
				 	</div>
				 	<div>
				 		<img src="img/product2.png">
				 	</div>
				 	<div>
				 		<img src="img/product3.png">
				 	</div>
				 </div>
				 <div class="row justify-content-between slider-for-product-arrows arrows d-lg-flex d-none">
					<div class="col-auto">
						<img src="img/icons/arrow-left.svg" class="slider-for-product-prev" alt="назад">
					</div>
					<div class="col-auto">
						<img src="img/icons/arrow-right.svg" class="slider-for-product-next" alt="вперед">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="text-left">Беллароза</h2>
				<p>Высокоурожайный, очень ранний краснокожурый сорт. Характеризуется крупными клубнями. Важное преимущество – пластичность, что позволяет использовать его как стартовый тип сорта для предприятий, только начавших возделывать картофель. Высокая устойчивость к засухе</p>
				<p>Фасовка товара по:</p>
				<div class="d-flex greenBtns">
					<a href="page-basket.php"><button class="active">4 кг/ 400 руб</button></a>
					<a data-fancybox data-animation-duration="700" data-src="#orderProduct" href="javascript:;"><button>От одной тонны</button></a>
						<div style="display: none;" id="orderProduct" class="animated-modal">
							<div class="card">
								<div class="card-header">
									<h1>Заказать товар</h1>
								</div>
								<div class="card-body">
									<form class="my-form">
										<input type="text" placeholder="Ваше имя*" required="">
										<input type="email" placeholder="Ваш e-mail*" required="">
										<input type="tel" placeholder="Ваш номер телефона*" required="">
										<div class="d-flex align-items-center">
											<input type="number" placeholder="Кол-во товара*" required="" class="inputCount"><p>тонн</p>
										</div>
										<textarea placeholder="Комментарий" required=""></textarea>
										<p>
											Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a>
										</p>
										<input type="submit" placeholder="Отправить" class="greenBtn">
									</form>
								</div>
							</div>
						</div>
				</div>
				<p>* При покупке в розничном магазине скидка 50%</p>
			</div>
			<div class="col-12">
				<div class="div-table">
					<div class="d-flex justify-content-between align-items-center">
						<div class="div-table-top d-flex">
							<div class="table-toggle characteristic active">
								<p>Характеристики сорта</p>
							</div>
							<div class="table-toggle recommendations">
								<p>Рекомендации по выращиванию</p>
							</div>
						</div>
						<div class="download-description">
							<img src="img/icons/file.svg">
							<a href="">Скачать описание</a>
						</div>
					</div>
					<div class="mt-4 characteristic-tables">
						<table class="table1">
							<tr>
								<td>
									Созревание
								</td>
								<td>
									Очень ранний
								</td>
								<td rowspan="3">
									<p>Клубень</p> 
									Форма <br>
									Глубина залегания глазков <br>
									Кожура <br>
									Цвет мякоти <br>
									Изменение цвета после отчистки <br>
									Содержание крахмала <br>
									Масса, гр.
								</td>
								<td rowspan="3">
									<br>
									овальная <br>
									от поверхностной до средней <br>
									слегка шероховатая, красная <br>
									светло-желтый <br>
									очень низкое <br>
									12,6-15,7% <br>
									115-210 (реже 800гр и выше) <br>
								</td>
							</tr>
							<tr>
								<td>Кулинарный тип (EAPR)</td>
								<td>В</td>
							</tr>
							<tr>
								<td>Потребительские свойства</td>
								<td>
									Слабо разваривается; <br>
									отличный вкус с малым <br>
									изменением цвета после <br>
									варки
								</td>
							</tr>
							<tr>
								<td>Урожай</td>
								<td>
									Урожайность высокая. <br>
									Клубни от крупных <br>
									до очень крупных
								</td>
								<td rowspan="2">
									<p>Устойчивость</p>
									Нематода <br>
									Вирус Y (PVY), вирус А (PVА) <br>
									 Скручивание листьев (PLRV) <br>
									Черная ножка <br>
									Фитофтороз ботвы <br>
									Фитофтороз клубней <br>
									Порша обыкновенная
								</td>
								<td rowspan="2">
									<br>
									Ro 1+Ro 4 <br>
									Очень высокая <br>
									Очень высокая <br>
									высокая <br>
									средняя-высокая <br>
									средняя-высокая <br>
									средняя-высокая 
								</td>
							</tr>
							<tr>
								<td>
									Развитие в начале <br>
									вегетации <br>
									Растение
								</td>
								<td>
									Быстрое, достаночно рано <br>
									закрывает гребни листвой. <br> 
									Растение высокое, <br>
									прямостоячее
								</td>
							</tr>
							<tr>
								<td>Состояние покоя</td>
								<td>
									Высокое. Очень хорошая <br>
									сохранность даже при <br>
									раннем сборе урожая!
								</td>
								<td>
									<p>Чувствительность</p>
									Железистая пятнистость <br>
									Мякоти к ударам <br>
									К механическим повреждениям
								</td>
								<td>
									<br>
									низкая <br>
									низкая-средняя <br>
									низкая-средняя
								</td>
							</tr>
						</table>
						<!-- <table class="table2">
							<tr>
								<td>
									<p>Клубень</p> 
									Форма <br>
									Глубина залегания глазков <br>
									Кожура <br>
									Цвет мякоти <br>
									Изменение цвета после отчистки <br>
									Содержание крахмала <br>
									Масса, гр.
								</td>
								<td>
									<br>
									овальная <br>
									от поверхностной до средней <br>
									слегка шероховатая, красная <br>
									светло-желтый <br>
									очень низкое <br>
									12,6-15,7% <br>
									115-210 (реже 800гр и выше) <br>
								</td>
							</tr>
							<tr>
								<td>
									<p>Устойчивость</p>
									Нематода <br>
									Вирус Y (PVY), вирус А (PVА) <br>
									 Скручивание листьев (PLRV) <br>
									Черная ножка <br>
									Фитофтороз ботвы <br>
									Фитофтороз клубней <br>
									Порша обыкновенная
								</td>
								<td>
									<br>
									Ro 1+Ro 4 <br>
									Очень высокая <br>
									Очень высокая <br>
									высокая <br>
									средняя-высокая <br>
									средняя-высокая <br>
									средняя-высокая 
								</td>
							</tr>
							<tr>
								<td>
									<p>Чувствительность</p>
									Железистая пятнистость <br>
									Мякоти к ударам <br>
									К механическим повреждениям
								</td>
								<td>
									<br>
									низкая <br>
									низкая-средняя <br>
									низкая-средняя
								</td>
							</tr>
						</table> -->
					</div>
					<div class="mt-4 recommendations-tables">
						<table class="table3">
							<tr>
								<td>
									Требования, предъявляемые у участку
								</td>
								<td colspan="2">
									Неприхотлив к почве и влаге, устойчив. Даже в регионах с неблагоприятным
									климатическим и почвенным условиями этот сорт дает стабильно высокий урожай хорошего
									качества
								</td>
							</tr>
							<tr>
								<td >
									Посадка
								</td>
								<td >
									Плотность посадки <br>
									Глубина посадки <br>
									Подготовка семян <br>
									Протравливание семян
								</td>
								<td >
									- 46.000 растений/га для получения клубней среднего размера <br>
									Обычная <br>
									Обычное <br>
									В основном рекомендовано - против ризоктониоза
								</td>
							</tr>
							<tr>
								<td>
									Гербициды
								</td>
								<td colspan="2">
									Незначительно чувствителен к гебридам, содержащим Метрибузин
								</td>
							</tr>
							<tr>
								<td>
									Удобрения
								</td>
								<td>
									Азот <br>
									Фосфор <br>
									Калий <br>
									Магний
								</td>
								<td>
									От малого до среднего, в сравнении с местной нормой
									100 кг/га <br>
									200-250 кг/га <br>
									60 кг/га
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	

<?php
	include('html-end.php');
?>