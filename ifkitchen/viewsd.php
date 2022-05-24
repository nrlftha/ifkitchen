<?php
include('connection.php');
include('navbarsd.php');
?>
<?php

    $cmdselect = mysqli_query($conn,"select * from sd");
    while ($row = mysqli_fetch_array($cmdselect)){
    }
?>
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
    padding: 16px 32px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    margin: 8px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-family: "Lucida Console", "Courier New", monospace;
}

.update {
    color:white;
}

</style>
</head>
<body>
    <center>
        <h2>Customer Details</h2> 
<form method="POST" action="">
    <?php
if (isset($_GET['idsd'])) {
$id = $_GET['idsd'];
$query = mysqli_query($conn,"select * from sd where idsd=$id");
while ($row = mysqli_fetch_array($query)){
?>

<table id = "t01">
    <tr>
        <th colspan="2"><h2>SALE DESIGNER REPORT CUSTOMER</h2></th>
    </tr>

    <tr>
        <th><b>C/O :</b></th>
        <td><?php echo $row['empno'];?></td>
    </tr>
    <tr>
        <th><b>Sale Designer :</b></th>
        <td><?php echo $row['sd'];?></td>
    </tr>
    <tr>
        <th><b>Branch :</b></th>
        <td><?php echo $row['branch'];?></td>
    </tr>
    <tr>
        <th><b>Customer Name :<b></th>
        <td><?php echo $row['name'];?></td>
    </tr>
    <tr>
        <th><b>Contact No :</b></th>
        <td><?php echo $row['notel'];?></td>
    </tr>
    <tr>
        <th><b>Email Address :</b></th>
        <td><?php echo $row['email'];?></td>
    </tr>
    <tr>
        <th><b>Submit Order :</b></th>
        <td><?php echo $row['sorder'];?></td>
    </tr>
    <tr>
        <th><b>Upload File :</b></th>
        <td><?php echo $row['myfile'];?></td>
    </tr>

 <td colspan="2" align="center">
 <input type="button" value="Update" onclick="window.location.href='updatesd.php?id=<?php echo $row['idsd'];?>'"/>
 </td>
 </tr>
</table>
<?php
}} ?>
</form>
<?php
mysqli_close($conn); // Closing Connection with Server
?>
</center>
</body>
</html>
