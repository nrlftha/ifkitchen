<?php include('navbarroc.php');
      include('connection.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>My Example</title>

<!-- CSS -->
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

<center>
    <?php
    include_once("connection.php");
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $empno=$_POST['empno'];
        $sd=$_POST['sd'];
        $branch=$_POST['branch'];
        $name=$_POST['name'];
        $notel=$_POST['notel'];

        if(isset($_POST['summary'])){
        $summary=$_POST['summary'];
        }else{
            $summary = "";
        }
        if(isset($_POST['bw'])){
        $bw=$_POST['bw'];
        }else{
             $bw = "";
        }
        if(isset($_POST['color'])){
        $color=$_POST['color'];
        }else{
             $color = "";
        }
        if(isset($_POST['technical'])){
        $technical=$_POST['technical'];
        }else{
             $technical = "";
        }
        if(isset($_POST['worktop'])){
        $worktop=$_POST['worktop'];
        }else{
             $worktop = "";
        }
        if(isset($_POST['bq'])){
        $bq=$_POST['bq'];
        }else{
             $bq = "";
         }
        if(isset($_POST['a3'])){
         $a3=$_POST['a3'];
         }else{
             $a3 = "";
        }
        if(isset($_POST['quotation'])){
        $quotation=$_POST['quotation'];
         }else{
             $quotation = "";
        }
        if(isset($_POST['checklist'])){
        $checklist=$_POST['checklist'];
         }else{
             $checklist = "";
         }
         if(isset($_POST['keyin'])){
         $keyin=$_POST['keyin'];
        }else{
             $keyin = "";
        }
        if(isset($_POST['snapshot'])){
        $snapshot=$_POST['snapshot'];
        }else{
             $snapshot = "";
        }

        $res = "UPDATE roc SET  empno='$empno', sd='$sd', branch='$branch', name='$name', notel='$notel',  summary='$summary',  bw='$bw',  color='$color', 
         technical='$technical',  worktop='$worktop',  bq='$bq',  a3='$a3',  quotation='$quotation', checklist='$checklist',  keyin='$keyin',  snapshot='$snapshot' WHERE id=$id";
        // echo $res; exit;
        $result=$conn->query($res);

        header("location: displayroc.php?id={$id}");
   
    }
    ?>

<?php
//MEMAPARKAN DATA KE DALAM JADUAL YANG DIBINA
if (isset($_GET['id'])) {
$id=$_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM roc WHERE id='{$id}' ");
while($res= mysqli_fetch_array($result)){

  $empno=($res['empno']);
  $sd=($res['sd']);
  $branch=$res['branch'];
  $name=$res['name'];
  $notel=$res['notel'];
  $summary = $res['summary'];
  $bw = $res['bw'];
  $color = $res['color'];
  $technical = $res['technical'];
  $worktop = $res['worktop'];
  $bq = $res['bq'];
  $a3 = $res['a3'];
  $quotation = $res['quotation'];
  $checklist = $res['checklist'];
  $keyin = $res['keyin'];
  $snapshot = $res['snapshot'];
  
}

?>

 <form method="post" action="">
 <table id = "t01">
 <tr>
 <th colspan="2"><h2>ROC REPORT CUSTOMER</h2></th>
 </tr>
 <tr>
 <th>C/O :</th>
 <td><input type="text" name="empno" value="<?php echo $empno ;?>" required></td>
 </tr>
 <tr>
 <th>Sale Designer :</th>
 <td><input type="text" name="sd" value="<?php echo $sd ;?>"required></td>
 </td>
 </tr>
 <tr>
 <th>Branch :</th>
 <td><input type="text" name="branch" value="<?php echo $branch ;?>" required></td>
 </tr>
 <tr>
 <th>Customer Name :</th>
 <td><input type="text" name="name" value="<?php echo $name ;?>" required></td>
 </tr>

 <tr>
 <th>Contact No :</th>
 <td><input type="text" name="notel" value="<?php echo $notel ;?>" required></td>
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
 <td colspan="2" align="center">
 <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
 <input type="submit" name="submit" value="update"/>
 <input type="reset" name="reset" value="Reset"/>
 </td>
 </tr>
</table>
<?php
} ?>
</form>

</center>

</body>
</html>
 