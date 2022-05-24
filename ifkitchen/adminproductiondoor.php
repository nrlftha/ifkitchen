<?php
include ('connection.php');
include('navbar.php');

if(isset($_POST['submit'])){

    $idproduction = $_POST['idproductiondoor'];
    $empno = $_POST['empno'];
    $pintu = $_POST['pintu'];
    $handle = $_POST['handle'];
    $jcolor = $_POST['jcolor'];
    $sverify = $_POST['sverify'];
    //$check = $_POST['check'];

    $insert = "INSERT INTO productiondoor(idproduction,empno,pintu,handle,jcolor,sverify) 
    VALUES ('$idproduction','$empno','$pintu','$handle','$jcolor','$sverify')";

    $result = mysqli_query($conn, $insert);

    if(!empty($result)){
        echo "<script> alert ('Maklumat berjaya ditambah');"."window.location='rocprogress.php'</script>";
    }else{
        echo "<script> alert ('Maklumat tidak berjaya ditambah');"."window.location='rocprogress.php'</script>";
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
 width: 10%;
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
$sql="SELECT * FROM productiondoor WHERE empno LIKE '%$carian%' 
LIMIT $limit OFFSET $offset";
$result= mysqli_query($conn,$sql);
$sqltotal="SELECT * FROM productiondoor WHERE empno LIKE '%$carian%'";
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
     <th><b>Jenis Pintu</b></th>
     <th><b>Jenis Handle</b></th>
     <th><b>Jenis Color</b></th>    
     <th><b>Checklist</b></th>   
     <th><b>Submit Verified</b></th>
     <th><b></b></th>      

</tr>

<?php
	$i= $page ; 
	while ($rows=mysqli_fetch_array($result)){
		?>

		<tbody><tr>
			<td><?=++$i?></td>
			<td><?=$rows["empno"]?></td>
			<td><?=$rows['pintu']?></td>
			<td><?=$rows['handle']?></td>
			<td><?=$rows['jcolor']?></td>
			<td><div class="one">
            
             <?php if ($rows['accessories'] != "") {
              echo $rows['accessories'], '<br>';}?>

         <?php if ($rows['remark'] != "") {
             echo $rows['remark'], '<br>';}?>

         <?php if ($rows['color'] != "") {
             echo $rows['color'], '<br>';}?>

         <?php if ($rows['jhandle'] != "") {
             echo $rows['jhandle'], '<br>';}?>

         <?php if ($rows['carcase'] != "") {
             echo $rows['carcase'], '<br>';}?>

         <?php if ($rows['papan'] != "") {
             echo $rows['papan'], '<br>';}?>

         <?php if ($rows['opintu'] != "") {
             echo $rows['opintu'], '<br>';}?>
              
    </div></td>

    <td><?=$rows['sverify']?></td>
            <td colspan="2" align="center">

                <input type="button" value=" View " onclick="window.location.href='viewproductionadmin.php?idproductiondoor=<?php echo $rows['idproductiondoor'];?>'"/>
                 
				<a href="admindeleteproduction.php?idproductiondoor=<?php echo $rows['idproductiondoor'];?>" onclick=" return confirm ('Are you sure to delete this user?')"><input type="button" value="Delete"/>
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