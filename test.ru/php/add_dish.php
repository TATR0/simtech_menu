<?php 
	
	$nd = filter_var(trim($_POST['name_dish']),
	FILTER_SANITIZE_STRING);


	$pd = filter_var(trim($_POST['price_dish']),
	FILTER_SANITIZE_STRING);

	$wi = filter_var(trim($_POST['way_img']),
	FILTER_SANITIZE_STRING);

	$sd = filter_var(trim($_POST['sostav_dish']),
	FILTER_SANITIZE_STRING);


	$mysql = new mysqli('localhost','root','','simtech');
	
	$mysql -> query("INSERT INTO `menu` (`name`,`price_rub`,`img`, `sostav`) VALUES ('$nd', '$pd', '$wi', '$sd')");
	
		$mysql -> close();
		header('location: /php/menu_sis_adm.php');
	
		
 ?>
