<?php 
include 'connection.php';

 //SQL command for SELECT
 //$cmdselect="SELECT * FROM daftarcustomer WHERE idcustomer='{$idcustomer}'"; //select row based on $empno value only
 
    // connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'ifkitchendb');
 
 //execute command
// $result= $conn->query($qry);
//echo '<pre>'; print_r($_SESSION); exit;  
$customerno = $_SESSION['customerno'];
$des = "SELECT * FROM progress where customerno='{$customerno}'";
$select = mysqli_query($conn,$des);

//echo $select; exit;

 $customerno = $sorder = $sverify = $door_carcase =  $part_goods =  $payment = $delivery = $carcase_installation = 
  $worktop_installation = $finishing = $handover = "";
  
 
$i = 1;

/*$select = "SELECT progress.customerno, progress.sorder, progress.sverify, progress.door_carcase, progress.part_goods, progress.payment, 
progress.delivery, progress.carcase_installation, progress.worktop_installation, progress.finishing, progress.handover, daftarcustomer.customerno
FROM progress INNER JOIN daftarcustomer ON progress.customerno = daftarcustomer.customerno WHERE daftarcustomer.idcustomer='{$idcustomer}'";*/

?>
<?php
session_start();
include ('connection.php');
include('navbarbook.php');

if($_SESSION['customername']){
echo "Hai " . $_SESSION['customername'];
}
?>


<html>
<head>
      <title>Step progress bar</title>
     <link rel="stylesheet" type="text/css" href="progress.css">
     <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>

        <?php
            $sorder = new DateTime();
            echo $sorder->format('Y-m-d');
           ?>
            <div class="progress">
                <ul class="probar">
            <li>
                <img src="submitorder.png" ><br>
                <i class="fa fa-check"></i>
                <p>Submit Order</p>
            </li>
            <li>
                <img src="verify.png"><br>
                <i class="fa fa-check"></i>
                <p>Submition Verified</p>
            </li>
            <li>
                <img src="door.png"><br>
                <i class="fa fa-times"></i>
                <p>Door & Carcase </p>
            </li>
            <li>
                <img src="goods.png"><br>
                <i class="fa fa-times"></i>
                <p>Part/Goods Ready</p>
            </li>
            <li>
                <img src="payment.png"><br>
                <i class="fa fa-times"></i>
                <p>100% Payment</p>
            </li>
            <li>
                <img src="delivery.png"><br>
                <i class="fa fa-times"></i>
                <p>Delivery</p>
            </li>
            <li>
                <img src="carcaseinstallation.png"><br>
                <i class="fa fa-times"></i>
                <p>Carcase Installation</p>
            </li>
            <li>
                <img src="worktop.png"><br>
                <i class="fa fa-times"></i>
                <p>Worktop Installation</p>
            </li>
            <li>
            <img src="finishing.png"><br>
                <i class="fa fa-times"></i>
                <p>Finishing</p>
            </li>
            <li>
            <img src="handover.png"><br>
                <i class="fa fa-times"></i>
                <p>Handover</p>
            </li>
            
        </ul>

    </div>


    <table border="1" cellpadding="5" align="center">

               <tr>
                    <th><b></b></th>
                    <th><b>C/O</b></th>
                    <th><b>Submition Order</b></th>
                    <th><b>Submition Verified</b></th>
                    <th><b>Door & Carcase </b></th>
                    <th><b>Part/Goods ready</b></th>     
                    <th><b>100% Payment</b></th> 
                    <th><b>Delivery</b></th> 
                    <th><b>Carcase Installation</b></th> 
                    <th><b>Worktop Installation</b></th> 
                    <th><b>Finishing</b></th> 
                    <th><b>Handover</b></th>
                    <th><b></b></th>         
         
               </tr>

			<?php 
            
            $qry = mysqli_query($conn,$des);
                
			while($row=mysqli_fetch_array($qry)):
               
			 ?>
		  <tbody>
		  <tr>
              
		  <td><?php echo $i++ ?></td>
          <td><?php echo $row['customerno'];?></td>
		  <td><?php echo $row['sorder'];?></td>
		  <td><?php echo $row['sverify'];?></td>
		  <td><?php echo $row['door_carcase'];?></td>
		  <td><?php echo $row['part_goods'];?></td>
          <td><?php echo $row['payment'];?></td>
          <td><?php echo $row['delivery'];?></td>
          <td><?php echo $row['carcase_installation'];?></td>
          <td><?php echo $row['worktop_installation'];?></td>
          <td><?php echo $row['finishing'];?></td>
          <td><?php echo $row['handover'];?></td>
		  <td>
                <a href= "view.php?userid=<?php echo $row['idprogress'];?>">View</a>
                <br><br>
				<a href="delete.php?userid=<?php echo $row['idprogress'];?>" onclick=" return confirm ('Are you sure to delete this user?')">Delete</a>
		  </td>            
        </tr>

			<?php endwhile; ?>
		</tbody>
        
        <?php
            ?>
	</table>
		</div>
</body>
</html>