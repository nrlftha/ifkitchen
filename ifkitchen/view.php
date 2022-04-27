<?php 
include 'connection.php';

 //SQL command for SELECT
 //$cmdselect="SELECT * FROM daftarcustomer WHERE idcustomer='{$idcustomer}'"; //select row based on $empno value only
 
    // connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'ifkitchendb');
 
if (isset($_GET['idprogress'])) {
    $idprogress = $_GET['idprogress'];
    $query = mysqli_query($conn,"select * from progress where idprogress=$idprogress");
    while ($row = mysqli_fetch_array($query)){
   

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
include('navbar.php');

if($_SESSION['customername']){
echo "Hai " . $_SESSION['customername'];
}
?>


<html>
<head>
      <title>Step progress bar</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="progress.css">
      <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
<body>

        <?php
            $sorder = new DateTime();
            echo $sorder->format('Y-m-d');

            $today = date("Y-m-d");
            $suborder = $row['sorder'];

            if($today >= $suborder){
                echo "Today";
            }else if($suborder < $today){
                echo "Before Days";
            }else if($suborder > $today){
                echo "After days";
            }else{
                echo "No data";
            }
            ?>
           
<div class="progress">
                <ul class="probar">
            <li>
                <img src="submitorder.png" ><br>
                <?php 
                    $sorder= $row['sorder'];

                    if($sorder == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check' style='background-color:#60aa97'> </i>";
                    }
                    ?>
                <p>Submit Order</p>
                
            </li>
            <li>
                <img src="verify.png"><br>
                 <?php 
                    $sverify= $row['sverify'];

                    if($sverif == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>Submition Verified</p>
               
            </li>
            <li>
                <img src="door.png"><br>
                <?php 
                    $door_carcase= $row['door_carcase'];

                    if($door_carcase == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>Door & Carcase </p>
                
            </li>
            <li>
                <img src="goods.png"><br>
                <?php 
                    $part_goods= $row['part_goods'];

                    if($part_goods == "0000-00-00"){
                        echo "<i class='fa fa-times'></i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>Part/Goods Ready</p>
            </li>
            <li>
                <img src="payment.png"><br>
                <?php 
                    $payment= $row['payment'];

                    if($payment == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>100% Payment</p>
            </li>
            <li>
                <img src="delivery.png"><br>
                <?php 
                    $delivery= $row['delivery'];

                    if($delivery == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>Delivery</p>
            </li>
            <li>
                <img src="carcaseinstallation.png"><br>
                <?php 
                    $carcase_installation= $row['carcase_installation'];

                    if($carcase_installation == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>Carcase Installation</p>
            </li>
            <li>
                <img src="worktop.png"><br>
                <?php 
                    $worktop_installation= $row['worktop_installation'];

                    if($worktop_installation == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>Worktop Installation</p>
            </li>
            <li>
            <img src="finishing.png"><br>
            <?php 
                    $finishing= $row['finishing'];

                    if($finishing == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
                <p>Finishing</p>
            </li>
            <li>
            <img src="handover.png"><br>
            <?php 
                    $handover= $row['handover'];

                    if($handover == "0000-00-00"){
                        echo "<i class='fa fa-times'> </i>";
                    }else{
                        echo "<i class='fa fa-check'> </i>";
                    }
                    ?>
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
                <a href= "report.php?userid=<?php echo $row['idprogress'];?>">Back</a>
                <br><br>
		  </td>            
        </tr>
        <?php
mysqli_close($conn); // Closing Connection with Server
?>
		</tbody>
        
        <?php
         }}   ?>
	</table>
		</div>
        
</body>
</html>