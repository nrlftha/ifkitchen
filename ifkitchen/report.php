<?php
//call connection 
include("connection.php");

{
    //SQL command for SELECT
    $cmdselect="SELECT * FROM progress";

}

//execute command
$result = $conn->query($cmdselect);
?>

<html>
<head>
      <title>Step progress bar</title>
      <?php include('navbar.php');?>
      <style type="text/css">
           .container {
               width: 100%;
           }
           .progressbar {
               counter-reset: step;
           }
           .progressbar li {
               list-style-type: none;
               float: left;
               width: 8.33%;
               position: relative;
               text-align: center;
           }
           .progressbar li:before {
               content: counter(step);
               counter-increment: step;
               width: 50px;
               height: 50px;
               line-height: 50px;
               border: 1px solid #ddd;
               display: block;
               text-align: center;
               margin: 90 auto 10px auto;
               border-radius: 70%; 
               background-color: white;
           }
           .progressbar li:after {
               content: '';
               position: absolute;
               width: 100%;
               height: 1px;
               background-color: #ddd;
               top: 115px;
               left: -50%;
               z-index: -1;
           }
           .progressbar li:first-child:after {
               content: none;
           }
           .progressbarbar li.active {
               color: green;
           }
           .progressbar li.active:before {
               border-color: green;
           }
           .progressbar li.active + li:after {
               background-color:green;
           }

           table {
                border: black;
                border-collapse: collapse;
                margin:10px;
                margin-top:250px;
            }
            Body {  
    font-family: Calibri, Helvetica, sans-serif;    
  }     
   tr {   
          border: 3px solid #aca5a9;   
          background-color: rgba(174, 196, 255, 0.747);  
          padding: 10px;   
   }
        </style>
    </head>
<body>
<?php
  $empno = $sorder = $sverify = $door_carcase = $part_goods = $payment = $delivery = $carcase_installation
    = $worktop_installation = $finishing = $handover = "";
    ?>

    <div class="container">
        <ul class="progressbar">
        <?php
            $sorder = new DateTime();
            echo $sorder->format('Y-m-d');
           ?>
            <li class="active"> Submition Order</li>
            <li>Submition Verified</li>
            <li>Door & Carcase Production</li>
            <li>Part/Goods Ready</li>
            <li>100% Payment</li>
            <li>Delivery</li>
            <li>Carcase Installation</li>
            <li>Worktop Installation</li>
            <li>Finishing</li>
            <li>Handover</li>
            
        </ul>
    </div>

    <br><br>

    <table border="1" cellpadding="5" align="center">

               <tr>
                    <th><b></b></th>
                    <th><b>C/O</b></th>
                    <th><b>Submition Order</b></th>
                    <th><b>Submition Verified</b></th>
                    <th><b>Door & Carcase Production</b></th>
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
			$i = 1;
			include 'connection.php';
			$qry = $conn->query("SELECT * FROM progress ");
			while($row=$qry->fetch_assoc()):
			 ?>
		  <tbody>
		  <tr>
		  <td><?php echo $i++ ?></td>
          <td><?php echo $row['empno'];?></td>
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
                <a href= "view.php?uid=<?php echo $row['idprogress'];?>">View</a>
                <br><br>
				<a href="delete.php?uid=<?php echo $row['idprogress'];?>" onclick=" return confirm ('Are you sure to delete this user?')">Delete</a>
		  </td>            
        </tr>

			<?php endwhile; ?>
		</tbody>
	</table>
		</div>
</body>
</html>