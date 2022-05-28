<?php 
 $connect = mysqli_connect("localhost", "root", "", "simtech");
	
     
 /*     $query2 = "SELECT * FROM `administrators`  ORDER BY `id` ";
      $query3 = "SELECT * FROM `cooks`  ORDER BY `id` ";
      $query4 = "SELECT * FROM `users`  ORDER BY `id` ";
 }*/



  if(isset($_POST["upd"]))  
{  
     $query ="UPDATE `menu`, `administrators`,`cooks`, `users`";
     mysqli_query($connect,$query);


}
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

     <style>
          ul
{
     background-color: #cccccc;
     line-height: 55px;
     text-align: center;
     
}

li{
     display: inline-block;
     list-style-type:none ;
     margin-right: 50px;

}

form
          {
               width: 300px;
          }



     </style>

	<div class="container" style="width:1100px;"> 
		<div class="table-responsive">
<h2 style="margin-top: 75px;" >Меню</h2>
			 <table  class="table table-bordered">  
	                        <tr>
								<th style="border: 1px solid #172028;" width="5%">ID</th>
                                        <th style="border: 1px solid #172028;" width="40%">Название блюда</th>        			
                                        <th style="border: 1px solid #172028;" width="10%">Цена</th>    
								<th style="border: 1px solid #172028;" width="5%">Количество</th>              
                                        <th style="border: 1px solid #172028;" width="20%">Состав</th> 
						</tr>
                          <?php 
                          $query = "SELECT * FROM `menu`  ORDER BY `id` "; 
                          $res = mysqli_query($connect,$query);
                          if(mysqli_num_rows($res) > 0)  
                          {  
                               while($row = mysqli_fetch_array($res))  
                               {  
                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;"><?php echo $row["id"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["name"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["price_rub"]; ?></td>
                               <td style="border: 1px solid #172028;"><?php echo $row["img"]; ?></td> 
                               <td style="border: 1px solid #172028;"><?php echo $row["sostav"]; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          else  
                          {  
                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;" colspan="3" align="center">Data not Found</td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                    
                    
		
<h2 style="margin-top: 75px;">Администраторы</h2>
                <table  class="table table-bordered">  
                             <tr>
                                        <th style="border: 1px solid #172028;" width="5%">ID</th>
                                        <th style="border: 1px solid #172028;" width="50%">ФИО</th>                    
                                        <th style="border: 1px solid #172028;" width="45%">Логин</th>                                        
                              </tr>
                          <?php 
                          $query2 = "SELECT * FROM `administrators`  ORDER BY `id` "; 
                          $res = mysqli_query($connect,$query2);
                          if(mysqli_num_rows($res) > 0)  
                          {  
                               while($row = mysqli_fetch_array($res))  
                               {  
                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;"><?php echo $row["id"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["fio"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["login"]; ?></td>                        
                          </tr>  
                          <?php  
                               }  
                          }  
                          else  
                          {  
                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;" colspan="3" align="center">Data not Found</td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 





<h2 style="margin-top: 75px;">Повара</h2>
                     <table  class="table table-bordered">  
                             <tr>
                                        <th style="border: 1px solid #172028;" width="5%">ID</th>
                                        <th style="border: 1px solid #172028;" width="50%">ФИО</th>                    
                                        <th style="border: 1px solid #172028;" width="45%">Логин</th> 
                              </tr>
                          <?php 
                          $query3 = "SELECT * FROM `cooks`  ORDER BY `id` "; 
                          $res = mysqli_query($connect,$query3);
                          if(mysqli_num_rows($res) > 0)  
                          {  
                               while($row = mysqli_fetch_array($res))  
                               {  
                          ?>  
                          <tr>  
                              <td style="border: 1px solid #172028;"><?php echo $row["id"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["fio"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["login"]; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          else  
                          {  
                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;" colspan="3" align="center">Data not Found</td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                    
                    
          
<h2 style="margin-top: 75px;">Сотрудники</h2>
                <table  class="table table-bordered">  
                             <tr>
                                        <th style="border: 1px solid #172028;" width="5%">ID</th>
                                        <th style="border: 1px solid #172028;" width="50%">ФИО</th>                    
                                        <th style="border: 1px solid #172028;" width="45%">Логин</th>                                        
                              </tr>
                          <?php 
                          $query3 = "SELECT * FROM `users`  ORDER BY `id` "; 
                          $res = mysqli_query($connect,$query3);
                          if(mysqli_num_rows($res) > 0)  
                          {  
                               while($row = mysqli_fetch_array($res))  
                               {  
                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;"><?php echo $row["id"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["fio"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["login"]; ?></td>                        
                          </tr>  
                          <?php  
                               }  
                          }  
                          else  
                          {  
                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;" colspan="3" align="center">Data not Found</td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table> 
                    
                    
          </div>
     </div>
     <ul style="margin-top: 50px;">
          <li>
           <form action="/php/exit.php">
               <input type="submit" style=" margin-top: 50px; margin-bottom: 50px; " name="back" class="btn btn-success bit" value="Выход" />
          </form>
           </li>

           <li><form action="/php/menu_sis_adm.php"><input type="submit" name="back"style=" margin-top: 10px;" class="btn btn-success bit" value="Вернуться" /></form></li>
                     <li>
                         <form action="menu_cook.php?action=add&id=<?php echo $row["id"]; ?>">
                              <input type="submit" style=" margin-top: 50px; margin-bottom: 50px; " name="upd" class="btn btn-success bit" value="Обновить" />
                         </form>
                     </li>


     </ul>    
</body>
</html>