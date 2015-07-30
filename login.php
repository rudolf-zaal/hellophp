<!DOCTYPE html>
<html>
	<head>
		<title>Васята</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<div>
			<p>Логин: 
				<?php
					echo $_POST['login']
				?>
			</p>
			<p>Пароль: 
				<?php
					echo $_POST['password']
				?>
			</p>
		</div>
		<div>
			<form action = "login.php">
				<p><b>Введите пару логин/пароль</b></p>
				<p>Логин<input type="text" name="login" value="login"></p>
				<p>Пароль<input type="text" name="password" value="password"></p>
				<p><input type="submit"></p> 
			</form>
		</div>
	</body>
</html>