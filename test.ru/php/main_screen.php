<?php   

 session_start();
 $connect = mysqli_connect("localhost", "root", "", "simtech");
$_POST["fio"]=$_SESSION["FIO"];
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                    'item_id'               =>     $_GET["id"],
                    'item_worker'           =>        $_POST["fio"],
                    'item_name'               =>     $_POST["hidden_name"],  
                    'item_price'          =>     $_POST["hidden_price"],  
                    'item_quantity'          =>     $_POST["quantity"],
                    'item_primichanie'          =>     $_POST["primichanie"],
                    'item_dat'               =>        $_POST['Date'] 
                     
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
            
           

      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_worker'           =>        $_GET["get"],
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"],
                'item_primichanie'          =>     $_POST["primichanie"],
                'item_dat'               =>        $_POST['Date']  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  

 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]); 
               }  
           }  
      }  
 }  

if(isset($_POST["send_data"]))  
{  

    // print_r($_SESSION);
     $item_array = $_SESSION["shopping_cart"]; 
    
          function opt($array, $connect)
          {
              
              if ( is_array($array) ) {
                    foreach ($array as $row => $value) {
                 
                  $sql = "INSERT INTO `for_a_cook` (`date`,`worker`,`dish_name`, `price`, `dish_amount`, `note`) VALUES ";

                  
                      $item_date = mysqli_real_escape_string($connect, $value['item_dat']);

                      $item_worker = mysqli_real_escape_string($connect, $value['item_worker']);

                      $item_name = mysqli_real_escape_string($connect, $value['item_name']);
                      
                      $item_price = mysqli_real_escape_string($connect, $value['item_price']);
                      
                      $item_qty = mysqli_real_escape_string($connect, $value['item_quantity']);

                      $item_note = mysqli_real_escape_string($connect, $value['item_primichanie']);            
                      
                      $suf = $row < count($array)-1 ? ", " : "";

                      
                      $sql .= "('$item_date','$item_worker','$item_name','$item_price','$item_qty', '$item_note')" . $pre;
                  
                    
                  if ( mysqli_query($connect, $sql) ) {  
                      echo '<script>alert("Регистрация прошла")</script>';  
                  } else {
                      echo '<script>alert("Регистрация не прошла")</script>';
                  }
             }
              }
          }

     opt($item_array, $connect);
     header('location: /php/main_screen.php');
}


?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Меню</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="/css/style.css">
           <link rel="stylesheet" href="index.php">

      </head>  
<body>  
     <header>
		<nav>
			<div class="conteiner">
				<div class="row">
					<div class="col-md-14">
						<div class="menu">
							<ul>                               
                                    <li> <form action="/php/exit.php"><input type="submit" name="exit_session"style=" margin-top: 50px; margin-bottom: 50px;" class="btn btn-success bit" value="Выход" /></form></li>
                         
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
           <br />  
           <div class="container"   >
           	
           	 
                <h1 style="font-weight: 600; color:#172028 ;" align="center">Меню</h1><br />  
                <?php  
                $query = "SELECT * FROM `menu` ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-6">             					
					<div class="main-block" >
						<div class="row" style="margin-bottom: 50px;"> 
                                   <form method="post" action="main_screen.php?action=add&id=<?php echo $row["id"]; ?> "> 
								<div class="col">
                 
									<div class="image" style="margin-right: 50px;">
										<img style=" border-radius:5px;" src="<?php echo $row["img"]; ?>" class="img-responsive" /><br /> 
									</div>
								</div>

									<div class="col">

										<div class="title">
											<h3 class="text-info"><?php echo $row["name"]; ?></h3>
										</div>

										<div class="price" style="margin-bottom: 10px;">
											<h4 class="text-danger"> <?php echo $row["price_rub"]; ?> руб.</h4>
											<input type="text"style="width: 40px;" name="quantity" class="form-control" value="1" />   
										</div>

										</div>	

										<input type="hidden" name="hidden_name" value = "<?php echo $row["name"]; ?>" />
										<input type="hidden" name="hidden_price" value = "<?php echo $row["price_rub"] ; ?>" />
                                                  <p>Примичание:</p>
                                                  <input type="text"style="width: 150px; margin-top: 10px; margin-bottom: 10px;" name="primichanie" class="form-control" value="" /> 
										<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success bit" value="Добавить в корзину" />
                                                  <input style="width: 130px; border:1 px ;" type="date" name="Date"> 
                                    </form> 
                                   <form action="sostav.php">
                                   <input type="submit" name="sostav" style="margin-top:5px;" class="btn btn-success bit" value="Состав" />
                                   </form>         
				           </div>
					</div>   	
                   
              
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Корзина</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> <th width="20%">Дата</th>
                               <th width="10%">Название блюда</th>  
                               <th width="10%">Количество</th>
                               <th width="10%">Примичание</th>  
                               <th width="20%">Цена</th>  
                               <th width="15%">Итог</th>  
                               <th width="5%">Действие</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr> <td><?php echo date("d.m.Y",strtotime( $values["item_dat"])); ?></td> 
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?> </td>
                               <td><?php echo $values["item_primichanie"]; ?> </td>  
                               <td><?php echo $values["item_price"]; ?> руб</td>  
                               <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="main_screen.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Удалить</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                            
                               <td colspan="5" align="right">ИТОГ</td>  
                               <td align="right"> <?php echo number_format($total, 2); ?> руб<br>
                                  <form style="width: 200px;" method="post" action="main_screen.php?action=add&id=<?php echo $row["id"]; ?> ">
                               <input type="submit" name="send_data" style="margin-top:5px;" class="btn btn-success bit" value="Отправить" /></form></td>                                                                
                               <td></td>
                            
                          <?php  
                          }  
                          ?>       
                         </table>           
                </div>  
           </div>  
           <br /> 
            <script>document.getElementById('davaToday').valueAsDate = new Date();</script> 
      </body>  
 </html>