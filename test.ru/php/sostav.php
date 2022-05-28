<?php 
 $connect = mysqli_connect("localhost", "root", "", "simtech");
 $character = '';

 if(isset($_GET['character']))
 {

 	$character = $_GET['character'];
 	 $character = preg_replace('#[^а-я]#i', '', $character);
 	 $query = "SELECT * FROM `menu` WHERE `name` LIKE '$character' ";
 }
 else
 {
 	$query = "SELECT * FROM `menu` ORDER BY `id` ";
 }
 $res = mysqli_query($connect,$query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <link rel="stylesheet" href="/css/style.css"> 
	<title>Состав блюд</title>
</head>
<body>
	<div class="container" style="width:1100px;"> 
		<div class="table-responsive">
			
			 <table style="margin-top: 150px;" class="table table-bordered">  
	                        <tr>
								<th width="20%">ID</th>  
								<th width="50%">Название блюда</th>  
								<th width="30%">Состав</th> 
							</tr>
                          <?php  
                          if(mysqli_num_rows($res) > 0)  
                          {  
                               while($row = mysqli_fetch_array($res))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["sostav"]; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          else  
                          {  
                          ?>  
                          <tr>  
                               <td colspan="3" align="center">Data not Found</td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                     <form action="/php/main_screen.php"><input type="submit" style=" margin-top: 50px; margin-bottom: 50px; " name="back" class="btn btn-success bit" value="Вернуться" /></form> 
		</div>
	</div>
</body>
</html>
