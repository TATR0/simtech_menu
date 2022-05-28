
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Форма авторизации</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	
</head>
<body>
	<header>
		<nav>
			<div class="conteiner">
				<div class="row">
					<div class="col-md-14">
						<div class="menu">
							<ul>                                
                              <li><form action="/php/index_cook.php"><input type="submit" name="povar" style=" margin-top: 50px; margin-bottom: 50px;" class="btn btn-success bit" value="Для повара" /></form></li>

                             <li> <form action="/php/index_sis_adm.php"><input type="submit" name="administrator" style="margin-right: 	50px; margin-top: 50px; margin-bottom: 50px;" class="btn btn-success bit" value="Для системного администратора" /></form>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="container" > 		
		<div align="center" style="margin-top: 150px;" class="col">
			<h1 style="margin-bottom: 50px;">Форма авторизации </h1 >
			
				<form action="php/auth.php" method="post">

					<input type="text" class="form-control" name="login"  placeholder="Введите логин"><br>

					<input type="text" class="form-control" name="FIO"  placeholder="Введите ФИО"><br>

					<input type="password" class="form-control" name="pass"  placeholder="Введите пароль"><br>

					<button class="btn btn-success bit" type="submit">Войти</button>
				</form>				
		</div>	
	</div>	
</body>
</html>