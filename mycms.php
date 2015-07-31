<?php
	unset($logged_user);
	session_start();
	#$_SESSION['logged_user'] = NULL;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>myCms</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/mycms.css">
	</head>
	<body>
		<div class="header">
			<div class="headPanel">
				myCMS
			</div>
			<div class="signinPanel">	
				<?php
					if(isset($_SESSION['logged_user'])){
						echo "<a href=\"logout.php\">Пользователь</a>";
					}else{
						echo "<a href=\"login.html\">Войти</a>";
					}
				?>
			</div>
		</div>
		<div class="content">
			<div class="leftPanel">
				leftPanel
			</div>	
			<div class="rightPanel">
				rightPanel
			</div>
			<div class="mainPanel">
				mainPanel
			</div>
			
		</div>
		<!--
			<form action = "login.php" method="post">
				<p><b>Введите пару логин/пароль</b></p>
				<p>Логин<input type="text" name="login" placeholder="login"></p>
				<p>Пароль<input type="password" name="password" placeholder="password"></p>
				<p><input type="submit" value="Отправить"></p> 
			</form>
		</div>
	-->
	</body>
</html>