<?php 
session_start();
	$FIO = filter_var(trim($_POST['FIO']),
	FILTER_SANITIZE_STRING);


	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);

	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	$mysql = new mysqli('localhost','root','','simtech');
	
	$mysql -> query("INSERT INTO `administrators` (`fio`,`login`,`pass`) VALUES ('$FIO', '$login', '$pass')");
		
		$mysql -> close();
		header('location: /php/menu_sis_adm.php');
	
		
 ?>

