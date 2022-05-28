	<
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Форма авторизации системного администратора</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	
</head>
<body>	
	<div class="container" > 		
		<div align="center" style="margin-top: 150px;" class="col">
			<h1 style="margin-bottom: 50px;">Форма авторизации системного администратора </h1 >
				<form action="auth_sis_adm.php" method="post">

					<input type="text" class="form-control" name="login"  placeholder="Введите логин"><br>

					<input type="text" class="form-control" name="FIO"  placeholder="Введите ФИО"><br>

					<input type="password" class="form-control" name="pass" placeholder="Введите пароль"><br>

					<button class="btn btn-success bit" type="submit">Войти</button>
				</form>
				<form action="/php/exit.php"><input type="submit" name="exit_session"style=" margin-top: 10px;" class="btn btn-success bit" value="Вернуться" /></form>				
		</div>	
	</div>	
</body>
</html>