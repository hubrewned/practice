<!DOCTYPE html>
<html>
<head>
	<title>Мой сайт</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>
	<div id="container">
		<div id="header">
			<div id="logo">
				<span class = "logo">New Sait</span>
			</div>
			<div id="auth">
				<span class="auth_reg">
					<a href="reg.php">Вход/Регистрация</a>
				</span>
			</div>
			<div class="clear"></div>
			<div id="nav">
				<ul>
					<li><a href="#">Главная</a></li>	
					<li><a href="#">Новости</a></li>
					<li><a href="#">Статьи</a></li>
					<li><a href="#">Блог</a></li>
					

				</ul>
			</div>
			<div id="search">
				<input class="search" type="text" value="поиск">
			</div>
		</div>
		<div class="clear"></div>
		<div id="content">
			<span>Заполните</span>
			<div id="reg">

				<form action="script/registration.php" method="POST">
				<ul>

					<li>
						<label>Введите логин</label>
						<input type="text" name="login">
					</li>
					<li>
						<label>Введите пароль</label>
						<input type="password" name="password">
					</li>
					<li>
						<label>e-mail</label>
						<input type="text" name="email"><br>
					</li>
					<li>
						<input type="submit" value="Отправить">
					</li>
				</ul>
				</form>
			</div>
			
		</div>
		<div class="clear"></div>
		<div id="footer">

			<p>Copiryng 2015</p>
		</div>

	</div>

</body>
</html>