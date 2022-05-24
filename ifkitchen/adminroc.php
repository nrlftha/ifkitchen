<?php
include ('connection.php');
include('navbar.php');

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $empno = $_POST['empno'];
    $sd = $_POST['sd'];
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $notel = $_POST['notel'];
    $sverify = $_POST['sverify'];

    $insert = "INSERT INTO roc(id,empno,sd,branch,name,notel,sverify) 
    VALUES ('$id','$empno','$sd','$branch','$name','$notel','$sverify')";

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
$sql="SELECT * FROM roc WHERE empno LIKE '%$carian%' OR name LIKE '%$carian%'
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
     <th><b>Checklist</b></th>  
     <th><b>Submit Order</b></th> 
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
            <td><div class="one">
            
             <?php if ($rows['summary'] != "") {
              echo $rows['summary'], '<br>';}?>

         <?php if ($rows['bw'] != "") {
             echo $rows['bw'], '<br>';}?>

         <?php if ($rows['color'] != "") {
             echo $rows['color'], '<br>';}?>

         <?php if ($rows['technical'] != "") {
             echo $rows['technical'], '<br>';}?>

         <?php if ($rows['worktop'] != "") {
             echo $rows['worktop'], '<br>';}?>

         <?php if ($rows['bq'] != "") {
             echo $rows['bq'], '<br>';}?>

         <?php if ($rows['a3'] != "") {
             echo $rows['a3'], '<br>';}?>

         <?php if ($rows['quotation'] != "") {
             echo $rows['quotation'], '<br>';}?>

         <?php if ($rows['checklist'] != "") {
             echo $rows['checklist'], '<br>';}?>

         <?php if ($rows['keyin'] != "") {
             echo $rows['keyin'], '<br>';}?>

         <?php if ($rows['snapshot'] != "") {
             echo $rows['snapshot'];}?>
              
    </div></td>

    <td><?=$rows['sverify']?></td>

            <td colspan="2" align="center">
                <input type="button" value=" View " onclick="window.location.href='viewrocadmin.php?id=<?php echo $rows['id'];?>'"/>
                 
				<a href="admindeleteroc.php?id=<?php echo $rows['id'];?>" onclick=" return confirm ('Are you sure to delete this user?')"><input type="button" value="Delete"/>
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