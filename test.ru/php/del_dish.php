<?php 

$aid = filter_var(trim($_POST['yid']),
	FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','','simtech');
	$result = $mysql -> query("DELETE FROM `menu` WHERE `id`='$aid'");
	
	if ($result === true) 
	{
		echo 'Удаление прошло';
		$mysql -> close();
		header('location: /php/menu_sis_adm.php');  
	} 
	else 
	{
		echo 'Удаление не прошло';
		$mysql -> close();
	}

 ?>