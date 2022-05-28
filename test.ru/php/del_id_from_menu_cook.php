<?php 

$aid = filter_var(trim($_POST['yid']),
	FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','','simtech');
	$result = $mysql -> query("DELETE FROM `for_a_cook` WHERE `id`='$aid'");
	
	if ($result === true) 
	{
		echo 'Удаление прошло';
		$mysql -> close();
		header('location: /php/menu_cook.php');  
	} 
	else 
	{
		echo 'Удаление не прошло';
		$mysql -> close();
	}

 ?>