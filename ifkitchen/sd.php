<?php
include ('connection.php');
include('navbarsd.php');

if(isset($_POST['submit'])){

    
    $empno = $_POST['empno'];
    $sd = $_POST['sd'];
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $notel = $_POST['notel'];
    $email = $_POST['email'];
    $sorder = $_POST['sorder'];
    $myfile = $_POST['myfile'];
    

    $insert = "INSERT INTO sd(empno,sd,branch,name,notel,email,sorder,myfile) 
    VALUES ('$empno','$sd','$branch','$name','$notel','$email','$sorder','$myfile')";
    //$row = mysqli_insert_id($conn);
    $result = mysqli_query($conn, $insert, $row);

    header("location: resultsd.php");
}
?>

<?php

if (isset($_POST['submit'])){

    $empno = $_POST['empno'];
    $sorder = $_POST['sorder'];

    $insert = "INSERT INTO progress(customerno,sorder) VALUES ('$empno','$sorder')";
    $res = mysqli_query($conn,$insert);
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

input[type=submit]{
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
input[type=submit]:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.21);
}

input[type=reset]{
    background-color: blue;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    font-family: "Lucida Console", "Courier New", monospace;
}

input[type=reset]:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.21);
}

h2 {
    font-family: "Lucida Console", monospace;
}
</style>
</head>
        <body>
            <br>
            
<center>
 <form method="post" action="">
 <table id = "t01">
 <tr>
 <th colspan="2"><h2>SALE DESIGNER REPORT CUSTOMER</h2></th>
 </tr>
 <tr>
 <th>C/O :</th>
 <td><input type="text" name="empno" required></td>
 </tr>
 <tr>
 <th>Sale Designer :</th>
 <td><input type="text" name="sd" required></td>
 </td>
 </tr>
 <tr>
 <th>Branch :</th>
 <td><input type="text" name="branch" required></td>
 </tr>
 <tr>
 <th>Customer Name :</th>
 <td><input type="text" name="name" required></td>
 </tr>
 <tr>
 <th>Contact No :</th>
 <td><input type="text" name="notel"  required></td>
 </tr>
 <th>Email Address :</th>
 <td><input type="text" name="email"  required></td>
 </tr>
 <tr>
 <th>Submit Order :</th>
 <td><input type="date" name="sorder"  required></td>
 </tr>
 <th>Upload File :</th>
 <td><input type="file" name="myfile" multiple><br><br></td>
 </tr>
 <tr>
 <td colspan="2" align="center">

 <input type="submit" name="submit" value="Submit"/>
 <input type="reset" name="reset" value="Reset"/>
 </td>
 </tr>
</table>
</form>
</center>
</body>
</html>

