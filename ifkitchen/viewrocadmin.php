<?php
include('connection.php');
include('navbar.php');
?>
<?php

    $cmdselect = mysqli_query($conn,"select * from roc");
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
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query = mysqli_query($conn,"select * from roc where id=$id");
while ($row = mysqli_fetch_array($query)){
?>

<table id = "t01">
    <tr>
        <th colspan="2"><h2>ROC REPORT CUSTOMER</h2></th>
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
        <th><b>ROC Checklist Details :</b></th>
        <td>
            <?php if ($row['summary'] != "") {
                 echo $row['summary'], '<br>';}?>

            <?php if ($row['bw'] != "") {
                echo $row['bw'], '<br>';}?>

            <?php if ($row['color'] != "") {
                echo $row['color'], '<br>';}?>

            <?php if ($row['technical'] != "") {
                echo $row['technical'], '<br>';}?>

            <?php if ($row['worktop'] != "") {
                echo $row['worktop'], '<br>';}?>

            <?php if ($row['bq'] != "") {
                echo $row['bq'], '<br>';}?>

            <?php if ($row['a3'] != "") {
                echo $row['a3'], '<br>';}?>

            <?php if ($row['quotation'] != "") {
                echo $row['quotation'], '<br>';}?>

            <?php if ($row['checklist'] != "") {
                echo $row['checklist'], '<br>';}?>

            <?php if ($row['keyin'] != "") {
                echo $row['keyin'], '<br>';}?>

            <?php if ($row['snapshot'] != "") {
                echo $row['snapshot'];}?>
        </td>
            <tr>
    </tr>

    <tr>
        <th><b>Submit Verify :</b></th>
        <td><?php echo $row['sverify'];?></td>
    </tr>

 <td colspan="2" align="center">
 <input type="button" value="Back" onclick="window.location.href='adminroc.php'"/>
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
