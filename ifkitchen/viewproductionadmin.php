<?php
include ('connection.php');
include('navbar.php');
?>
<?php

$cmdselect = mysqli_query($conn,"select * from productiondoor");
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
        <h2>Door & Carcase Details</h2> 
<form method="POST" action="updateproductiondoor.php">
    <?php
if (isset($_GET['idproductiondoor'])) {
$idproduction = $_GET['idproductiondoor'];
$query = mysqli_query($conn,"select * from productiondoor where idproductiondoor=$idproduction");
while ($row = mysqli_fetch_array($query)){
?>

<table id = "t01">
    <tr>
        <th colspan="2"><h2>PRODUCTION REPORT CUSTOMER</h2></th>
    </tr>

    <tr>
        <th><b>C/O :</b></th>
        <td><?php echo $row['empno'];?></td>
    </tr>
    <tr>
        <th><b>Jenis Pintu :</b></th>
        <td><?php echo $row['pintu'];?></td>
    </tr>
    <tr>
        <th><b>Jenis Handle  :</b></th>
        <td><?php echo $row['handle'];?></td>
    </tr>
    <tr>
        <th><b>Jenis Color :<b></th>
        <td><?php echo $row['jcolor'];?></td>
    </tr>
    <tr>
        <th><b>ROC Checklist Details :</b></th>
        <td>
            <?php if ($row['accessories'] != "") {
                 echo $row['accessories'], '<br>';}?>

            <?php if ($row['remark'] != "") {
                echo $row['remark'], '<br>';}?>

            <?php if ($row['color'] != "") {
                echo $row['color'], '<br>';}?>

            <?php if ($row['jhandle'] != "") {
                echo $row['jhandle'], '<br>';}?>

            <?php if ($row['carcase'] != "") {
                echo $row['carcase'], '<br>';}?>

            <?php if ($row['papan'] != "") {
                echo $row['papan'], '<br>';}?>

            <?php if ($row['opintu'] != "") {
                echo $row['opintu'], '<br>';}?>
        </td>
            <tr>
    </tr>

 <td colspan="2" align="center">
 <input type="button" value="Back" onclick="window.location.href='adminproductiondoor.php?idproductiondoor=<?php echo $row['idproductiondoor'];?>'"/>
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