<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" href="/css/style.css">
	<title>Меню администратора</title>
</head>
<body>
	<style>
		
		form
		{
			width: 300px;
		}

		 
	</style>	
	<div class="container" style="width:800px;"> 
		<div class="table-responsive" >
			
			 <table style="margin-top: 150px;"  class="table table-bordered">  
	                    <tr>
							<td style="border: 1px solid #172028;" align="center" > 
								<form  action="add_dish_in_table.php">
									<input type="submit" name="add_dish" class="btn btn-success bit" value="Добавить блюдо в меню" />
								</form>
							</td>	
                            <td style="border: 1px solid #172028;" align="center"  >
                            	<form action="del_dish_from_menu.php">
                            		<input type="submit"  name="del_dish" class="btn btn-success bit" value="Удалить блюдо из меню" />
                            	</form>
                            </td> 

						</tr>

						<tr>
							<td style="border: 1px solid #172028;" align="center" > 
								<form action="add_adm_in_table.php">
									<input type="submit" name="add_adm" class="btn btn-success bit" value="Добавить администратора" />
								</form>
							</td>	
                            <td style="border: 1px solid #172028;" align="center" >
                            	<form action="del_adm_from_table.php">
                            		<input type="submit"  name="del_adm" class="btn btn-success bit" value="Удалить администратора" />
                            	</form>
                            </td>                            
						</tr>

						<tr>
							<td style="border: 1px solid #172028;" align="center" > 
								<form action="add_cook_in_table.php">
									<input type="submit" name="add_cook" class="btn btn-success bit" value="Добавить повара" />
								</form>
							</td>	
                            <td style="border: 1px solid #172028; " align="center" >
                            	<form action="del_cook_from_table.php">
                            		<input type="submit"  name="del_cook" class="btn btn-success bit" value="Удалить повара" />
                            	</form>
                            </td>                            
						</tr>

						<tr>
							<td style="border: 1px solid #172028;" align="center" > 
								<form action="add_user_in_table.php">
									<input type="submit" name="add_cook" class="btn btn-success bit" value="Добавить сотрудника" />
								</form>
							</td>	
                            <td style="border: 1px solid #172028; " align="center" >
                            	<form action="del_user_from_table.php">
                            		<input type="submit"  name="del_cook" class="btn btn-success bit" value="Удалить сотрудника" />
                            	</form>
                            </td>                            
						</tr>
                          
                         
                     </table> 
                    <ul>
                    	<li> 
                    		<form action="/php/exit.php">
                    			<input type="submit" style=" margin-top: 50px; margin-bottom: 50px; " name="exit" class="btn btn-success bit" value="Выход" />
                    		</form>
                    	</li>
                    	<li> 
                    		<form action="tables.php">
                    			<input type="submit" style=" margin-top: 50px; margin-bottom: 50px; " name="exit" class="btn btn-success bit" value="Посмотреть таблицы всех сотрудников" />
                    		</form> 
                    	</li>
                    </ul>
                     
		</div>
	</div>
</body>
</html>