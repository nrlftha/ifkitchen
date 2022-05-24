<?php
include ('connection.php');
include('navbarsd.php');

if(isset($_POST['submit'])){

    $id = $_POST['idsd'];
    $empno = $_POST['empno'];
    $sd = $_POST['sd'];
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $notel = $_POST['notel'];
    $email = $_POST['email'];
    $sorder = $_POST['sorder'];
    $myfile = $_POST['myfile'];

    $insert = "INSERT INTO sd(idsd,empno,sd,branch,name,notel,email,sorder,myfile) 
    VALUES ('$id','$empno','$sd','$branch','$name','$notel','$email','$sorder','$myfile')";

    $result = mysqli_query($conn, $insert);

    if(!empty($result)){
        echo "<script> alert ('Maklumat berjaya ditambah');"."window.location='sdprogress.php'</script>";
    }else{
        echo "<script> alert ('Maklumat tidak berjaya ditambah');"."window.location='sdprogress.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
table, th, td {
 border: 1px solid black;
 border-collapse: collapse;
 padding:5px;
 text-align: left, center;
 width: 50%;
}
th {
 padding: 10px;
 text-align: left, center;
 font-family: "Lucida Console", "Courier New", monospace;
}
td {
 padding: 10px;
 text-align: left, center;
 font-family: "Lucida Console", "Courier New", monospace;
}
#t01 {
 width: 50%;
 background-color: lightblue;
}
input[type=button] {
    background-color: blue;
    border: none;
    color: white;
    padding: 5px 20px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    margin: 2px auto;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-family: "Lucida Console", "Courier New", monospace;
}
div.one{
    width : 170px;
}

        </style>

</head>
<body>

<center>
<h1>Record Customer</h1>
				
                <form method="post" action="" class="example" style="margin:auto;max-width: 300px">
                <input type="text" placeholder="Search.."name="carian">
                <button type="submit" value="Cari">Cari</button>
            </form>

            <?php
include("connection.php");
$carian="";
if(isset($_POST["carian"]))
	$carian =$_POST["carian"];
$page=0;
if(isset($_GET['page']))
$page=$_GET['page'];
$limit=10000;
$offset=$page * $limit;
$sql="SELECT * FROM sd WHERE empno LIKE '%$carian%' OR name LIKE '%$carian%'
LIMIT $limit OFFSET $offset";
$result= mysqli_query($conn,$sql);
$sqltotal="SELECT * FROM roc WHERE empno LIKE '%$carian%' OR name LIKE '%$carian%'";
$resulttotal=mysqli_query($conn,$sqltotal);
$total= mysqli_num_rows($resulttotal);
$last=floor($total/$limit);
?>
</center>
<br><br>
            
<table id = "t01" border="1" cellpadding="5" align="center">

<tr>
     <th><b>Bil</b></th>
     <th><b>C/O</b></th>
     <th><b>Sale Designer</b></th>
     <th><b>Branch</b></th>
     <th><b>Customer Name</b></th>
     <th><b>Phone Number</b></th>       
     <th><b>Email Address</b></th>  
     <th><b>Submit Order</b></th> 
     <th><b>File</b></th> 
     <th><b></b></th>         

</tr>

<?php
	$i= $page ; 
	while ($rows=mysqli_fetch_array($result)){
		?>

		<tbody><tr>
			<td><?=++$i?></td>
			<td><?=$rows["empno"]?></td>
			<td><?=$rows['sd']?></td>
			<td><?=$rows['branch']?></td>
			<td><?=$rows['name']?></td>
			<td><?=$rows['notel']?></td>
            <td><?=$rows['email']?></td>
            <td><?=$rows['sorder']?></td>
            <td><?=$rows['myfile']?></td>
    
            <td colspan="2" align="center">
                <input type="button" value=" View " onclick="window.location.href='viewsd.php?id=<?php echo $rows['idsd'];?>'"/>
                 
				<a href="delete.php?id=<?php echo $rows['idsd'];?>" onclick=" return confirm ('Are you sure to delete this user?')"><input type="button" value="Delete"/>
                </a>
		  </td>

			
		</tr>
		<?php

    }
    ?>
    </table>


	
        </center>
	
</body>
</html>