<?php
include ('connection.php');
include('navbarroc.php');

if(isset($_POST['submit'])){

    
    $empno = $_POST['empno'];
    $sd = $_POST['sd'];
    $branch = $_POST['branch'];
    $name = $_POST['name'];
    $notel = $_POST['notel'];
    $summary = $_POST['summary'];
    $bw = $_POST['bw'];
    $color = $_POST['color'];
    $technical = $_POST['technical'];
    $worktop = $_POST['worktop'];
    $bq = $_POST['bq'];
    $a3 = $_POST['a3'];
    $quotation = $_POST['quotation'];
    $checklist = $_POST['checklist'];
    $keyin = $_POST['keyin'];
    $snapshot = $_POST['snapshot'];
    $sverify = $_POST['sverify'];
    

    $insert = "INSERT INTO roc(empno,sd,branch,name,notel,summary,bw,color,technical,worktop,bq,a3,quotation,checklist,keyin,snapshot,sverify) 
    VALUES ('$empno','$sd','$branch','$name','$notel','$summary','$bw','$color','$ntechnical','$worktop','$bq','$a3','$quotation','$checklist','$keyin','$snapshot','$sverify')";
    //$row = mysqli_insert_id($conn);
    $result = mysqli_query($conn, $insert, $row);

    header("location: resultroc.php");
}
?>

<?php

if (isset($_POST['submit'])){

    $empno = $_POST['empno'];
    $sverify = $_POST['sverify'];

    $insert = "INSERT INTO progress(customerno,sverify) VALUES ('$empno','$sverify')";
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
 <th colspan="2"><h2>ROC REPORT CUSTOMER</h2></th>
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

 <tr>
 <th><span>ROC Detail Checklists</span><br/></th>
 
 <td>
 <input type="checkbox" name="summary" value="Summary Item">Summary Item<br />  
<input type="checkbox" name="bw" value="3D Black/White">3D Black/White<br />  
<input type="checkbox" name="color" value="3D Color">3D Color<br />  
<input type="checkbox" name="technical" value="Technical">Technical<br />  
<input type="checkbox" name="worktop" value="Worktop"> Worktop<br />
 <input type="checkbox" name="bq" value="BQ"> BQ<br />
 <input type="checkbox" name="a3" value="A3"> A3<br />
 <input type="checkbox" name="quotation" value="Quotation"> Quotation<br />
 <input type="checkbox" name="checklist" value="Checklist"> Checklist<br />
 <input type="checkbox" name="keyin" value="keyin Planner"> Key In Planner<br />
 <input type="checkbox" name="snapshot" value="Snapshot"> Snapshot<br />
 </td>
 </tr>

 <tr>
 <th>Submit Verify :</th>
 <td><input type="date" name="sverify"  required></td>
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

