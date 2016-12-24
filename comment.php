<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Magazine</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="jquery-1.10.2.min.js"></script>
	<script src="less.min.js"></script>
	<script src="angular.min.js"></script>
	<script src="script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app="pagination" ng-controller="paginationCtrl">
<div class="header">
	<div class="inner-header">
		<div class="wrapper">
			<header>
			<ul class="hdr-list">
				<li>
					<a href="index"><img src="img/logo.png" alt="logo"></a>
				</li>
				<li class="description">
					интернет магазин<br />женской 
				</li>
				<li>
					<a href="korzina.html" class="basket"><span class="fs18">500 </span>товаров<br />на сумму <span class="fs18">10 000 000тг.</span></a>
				</li>
			</ul>
			<div class="info-block">
				<ul class="net-icons">
					<li><a href="" class="tw"></a></li>
					<li><a href="" class="fb"></a></li>
					<li><a href="" ></a></li>
				</ul>
				<span class="tel">+77055095775</span>
				<ul class="registration">
					<li><a href="reg.html">Войти</a></li>
					<li><a href="reg.html">Зарегистрироваться</a></li>
				</ul>	
			</div>
			</header>
		</div>
	</div>
</div>
<div class="nav">
	<div class="nav-inner">
		<div class="wrapper">
			<nav>
				<ul>
					<li><a href="index.php">Главная </a></li>
					<li><a href="comment.php">Отзывы </a></li>
					<li>
					<a href="index.php">Каталог </a>
					<ul>
						<li><a href="">Верхняя одежда</a></li>
						<li><a href="">Нижнее белье</a></li>
						<li><a href="">Юбки</a></li>
						<li><a href="">Брюки</a></li>
					</ul>
					</li>
					<li><a href="basket.php">Корзина </a></li>
					<li><a href="">Статьи </a></li>
					<li><a href="">Оплата </a></li>
					<li><a href="">Доставка </a></li>
					<li><a href="">Контакты </a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="main">
	<div class="wrapper">
		<div class="sidebar">
			<div class="products-name">
				<ul>
					<li><a class="active" href="">ПАЛЬТО</a></li>
					<li><a href="">ПЛАЩ</a></li>
					<li><a href="">ВЕТРОВКА</a></li>
					<li><a href="">ПУХОВИКИ</a></li>
					<li><a href="">ШУБА</a></li>
				</ul>
			</div>
			<form action="/" method="post">
			<div class="sb-block options">
				<h3 class="title">ПОДБОР ПО ПАРАМЕТРАМ</h3>
				<ul>
					<li><a href="" class="china">Китай</a></li>
					<li><a href="" class="china 41">41</a></li>
					<li><a href="" class="reset">Сбросить фильтры</a></li>
				</ul>
			</div>
			<div class="sb-block country" >
				<h3 class="title">ПРОИЗВОДИТЕЛЬ</h3>
				<ul>
					<li><a href="">Китай</a></li>
					<li><a href="">Турция</a></li>
					<li><a href="">Росия</a></li>
					<li><a href="">Украина</a></li>
				</ul>
			</div>
			<div class="sb-block seasons">
				<h3 class="title">СЕЗОН</h3>
				<ul>
					<li>
						<input type="checkbox" name="wint" id="win"><lable> зима</lable>
					</li>
					<li>
						<input type="checkbox" name="spring" id="spring"><lable> весна</lable>
					</li>
					<li>
						<input type="checkbox" name="summer" id="summer" checked=""><lable> лето</lable>
					</li>
					<li>
						<input type="checkbox" name="automn" id="automn"><lable> осень</lable>
					</li>
				</ul>
			</div>
			<div class="sb-block size">
				<h3 class="title">РАЗМЕР</h3>
				<ul>
					<li><input type="checkbox" name="30" id="30" class="lb"><lable>30</lable></li>
					<li><input type="checkbox" name="31" id="31" class="lb"><lable>31</lable></li>
					<li><input type="checkbox" name="32" id="32" class="lb"><lable>32</lable></li>
					<li><input type="checkbox" name="33" id="33" class="lb"><lable>33</lable></li>
					<li><input type="checkbox" name="34" id="34" class="lb"><lable>34</lable></li>
					<li><input type="checkbox" name="35" id="35" class="lb"><lable>35</lable></li>
					<li><input type="checkbox" name="36" id="36" class="lb"><lable>36</lable></li>
					<li><input type="checkbox" name="37" id="37" class="lb"><lable>37</lable></li>
					<li><input type="checkbox" name="38" id="38" class="lb"><lable>38</lable></li>
					<li><input type="checkbox" name="39" id="39" class="lb"><lable>39</lable></li>
					<li><input type="checkbox" name="40" id="40" class="lb"><lable>40</lable></li>
					<li><input type="checkbox" name="41" id="41" class="lb"><lable>41</lable></li>
				</ul>
			</div>
			<div class="sb-block cost">
				<h3 class="title">ЦЕНА</h3>
					<ul>
					<li><a href="">0-500</a></li>
					<li><a href="">500-1000</a></li>
					<li><a href="">1000-1500</a></li>
					<li><a href="">1500-3000</a></li>
				</ul>
			</div>
			<div class="sb-block new">
				<h3 class="title">НОВИНКА/СКИДКА</h3>
				<ul>
					<li><input type="checkbox" name="sale" class="lb"><lable>Акции</lable></li>
					<li><input type="checkbox" name="new" class="lb"><lable>Новинки</lable></li>
				</ul>
			</div>
			<div class="sb-block material">
				<h3 class="title">МАТЕРИАЛ</h3>
				<ul>
					<li><input type="checkbox" name="sale" class="lb"><lable>Шерсть</lable></li>
					<li><input type="checkbox" name="new" class="lb"><lable>Хлопок</lable></li>
				</ul>
			</div>
			<div class="sb-block color">
				<h3 class="title">ЦВЕТ</h3>
				<ul>
					<li><input type="checkbox" name="30" id="30" class="lb"><lable>Красный</lable></li>
					<li><input type="checkbox" name="31" id="31" class="lb"><lable>Синий</lable></li>
					<li><input type="checkbox" name="32" id="32" class="lb"><lable>Зеленый</lable></li>
					<li><input type="checkbox" name="33" id="33" class="lb"><lable>Розовый</lable></li>
					<li><input type="checkbox" name="34" id="34" class="lb"><lable>Белый</lable></li>
					<li><input type="checkbox" name="35" id="35" class="lb"><lable>Желтый</lable></li>
					
				</ul>
			</div>
			</form>
		</div>
		<div class="right-col">
			<div class="search-block">
				<form class="search-form" action="index.html" method="post">
					<input type="text" name="search" placeholder="Введите запрос...">
					<input type="button" name="btn-form" value="поиск">
				</form>
				<div class="bread-crumbs">
					<a href="#" style="color: black">главная</a><span> / пальто</span>
				</div>
			</div>
			<form >
    	<h1 style=" size: 25px;color: #6b8492;  margin-top: 50px; margin-left: 200px;">Оставьте свой отзыв</h1> 
    		<textarea ng-model="txtcomment" placeholder="Your comment" style="width:680px; height: 250px; border:1px solid #6b8492;"></textarea>
    		<button ng-click="btn_add()" style="margin-top:30px;background-color: #6b8492; color: white;
		          width: 200px;
		          padding: 16px;
		          font-size: 16px;
		          border: none;
		          cursor: pointer;
		          margin-top: 30px;
		     margin-left: 410px;">Post comment</button> 
    		 
			</div>	
    		<h3></h3>
    		<ul>
      			<li ng-repeat="comment in comments">{{ comment }}<a style="float:right;" href="" ng-click="removeItem($index)">x</a></li>
    		</ul>  
	</form>
</div>


</body>
</html>
<body >




