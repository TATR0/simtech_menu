<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" href="/css/style.css">
	<title>Добавления повара</title>
</head>
<body>
	<style>
		ul
		{
			margin-top: 50px;
			background-color:#f5f5f5;
		}
		
		form
		{
			width: 100px;
		}

	</style>

</html><div class="container" > 		
		<div align="center" style="margin-top: 150px;" class="col">
			<h1 style="margin-bottom: 50px;">Форма добавления повара </h1 >
				<form action="add_cook.php" class="forma" method="post">

					<input type="text" class="form-control" name="login"  placeholder="Введите логин"><br>

					<input type="text" class="form-control" name="FIO"  placeholder="Введите ФИО"><br>

					<input type="password" class="form-control" name="pass"  placeholder="Введите пароль"><br>

					<button class="btn btn-success bit" type="submit">Добавить</button>


				</form>	
				<ul>
					<li><form action="/php/menu_sis_adm.php"><input type="submit" name="back"style=" margin-top: 10px;" class="btn btn-success bit" value="Вернуться" /></form></li>					

					<li> <form action="/php/exit.php"><input type="submit" style=" margin-top: 10px;  " name="exit" class="btn btn-success bit" value="Выход" /></form> </li>
				</ul>			
		</div>	
	</div>
</body>
</html>	