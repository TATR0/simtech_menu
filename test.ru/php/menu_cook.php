<?php 
 $connect = mysqli_connect("localhost", "root", "", "simtech");

 if(isset($_GET['character']))
 {
 	 $query = "SELECT * FROM `for_a_cook` WHERE `dish_name` LIKE '$character' ";
 }
 else
 {
 	$query = "SELECT * FROM `for_a_cook` ORDER BY `id` ";
 }
 $res = mysqli_query($connect,$query);


  if(isset($_POST["upd"]))  
{  
     $query ="UPDATE `for_a_cook`";
     mysqli_query($connect,$query);
}
 ?>
<!DOCTYPE html>
<html lang="ru">
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
     <?php 

     setlocale(LC_ALL, 'ru_RU', 'ru_RU.utf8mb4', 'ru', 'russian');
      ?>
	<div class="container" style="width:1100px;"> 
		<div class="table-responsive">
			
			 <table style="margin-top: 150px;" class="table table-bordered">  
	                        <tr>
								<th style="border: 1px solid #172028;" width="5%">ID</th>
                                        <th style="border: 1px solid #172028;" width="20%">Дата</th> 
                                        <th style="border: 1px solid #172028;" width="20%">Работник</th>  
								<th style="border: 1px solid #172028;" width="20%">Название блюда</th>
                                        <th style="border: 1px solid #172028;" width="10%">Цена</th>    
								<th style="border: 1px solid #172028;" width="5%">Количество</th> 
                                        <th style="border: 1px solid #172028;" width="20%">Примечание</th> 
						</tr>
                          <?php  
                          if(mysqli_num_rows($res) > 0)  
                          {  
                               while($row = mysqli_fetch_array($res))  
                               {  

                                   $date=date('l',strtotime($row["date"]));
                                        if ($date === 'Monday') 
                                        {
                                             $date="Понедельник";
                                        }
                                        elseif($date === 'Tuesday')
                                        {
                                             $date="Вторник";
                                        }     
                                        elseif($date === 'Wednesday')
                                             {
                                             $date="Среда";
                                        }

                                        elseif($date === 'Thursday')
                                        {
                                             $date="Четверг";
                                        }
                                        elseif ($date === 'Friday' ) 
                                        {
                                             $date="Пятница";
                                        }

                              

                          ?>  
                          <tr>  
                               <td style="border: 1px solid #172028;"><?php echo $row["id"]; ?></td>
                               <td style="border: 1px solid #172028;"><?php echo date('d.m.Y',strtotime($row["date"]));?><br><?php echo $date;  ?> </td>   
                               <td style="border: 1px solid #172028;"><?php echo $row["worker"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["dish_name"]; ?></td>
                               <td style="border: 1px solid #172028;"><?php echo $row["price"]; ?></td> 
                               <td style="border: 1px solid #172028;"><?php echo $row["dish_amount"]; ?></td>  
                               <td style="border: 1px solid #172028;"><?php echo $row["note"]; ?></td>   
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
                     <div  align="center" style="margin-top: 50px; margin-bottom: 50px;" class="del">
                         <h3>Удаление</h3>
                         <form style="width: 200px; " action="del_id_from_menu_cook.php" class="forma" method="post">
                              <input type="text" class="form-control" name="yid"  placeholder="Введите id "><br>               
                                   <button class="btn btn-success bit" type="submit">Удалить</button>
                         </form>
                     </div>   
                    <ul><li> <form action="/php/exit.php"><input type="submit" style=" margin-top: 50px; margin-bottom: 50px; " name="back" class="btn btn-success bit" value="Выход" /></form> </li>
                     <li><form action="menu_cook.php?action=add&id=<?php echo $row["id"]; ?>"><input type="submit" style=" margin-top: 50px; margin-bottom: 50px; " name="upd" class="btn btn-success bit" value="Обновить" /></form> </li>
                     </ul>
		</div>
	</div>
</body>
</html>
<?php 

 ?>