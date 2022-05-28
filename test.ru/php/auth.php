<?php 
session_start();
	$FIO = filter_var(trim($_POST['FIO']),
	FILTER_SANITIZE_STRING);


	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);

	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);


	$mysql = new mysqli('localhost','root','','simtech');
	$result = $mysql -> query("SELECT * FROM `users` WHERE `fio`='$FIO' AND `login`= '$login' AND `pass` = '$pass'");
	$user= $result->fetch_assoc();
	if (count($user) == 0 )
	{	
		echo"Такой пользователь не найден";
		?>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<form action="/php/exit.php"><input type="submit" name="exit_session"style=" margin-top: 50px; margin-bottom: 10px;" class="btn btn-success" value="Вернуться" /></form>
		<?php 
		exit();	
	}
		
	$mysql -> close();

	$_SESSION['FIO']=$FIO;
	
	header('location: /php/main_screen.php');

 ?>

