<?php
//call connection 
include("connection.php");

$id=$_GET['uid']; //get user_id value from url and assign the value to variable $user_id

//SQL command for SELECT
$cmdselect="SELECT * FROM progress WHERE id='$id'"; //select row based on $user_id value only

//execute command
$result = $conn->query($cmdselect);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Report</title>
<link rel="stylesheet" href="style.css" />
</head>
<style>
table, th, td {
border: 1px solid black;
border-collapse: collapse;
width: 50%;    
background-color: lightyellow;
}
th {
padding: 10px;
text-align: left, center;
}

td {
padding: 10px;
text-align: left, center;
}

</style>

<body>  
<?php include('navbar.php');?>

<center>
    <h1>Report</h1>
<h2>Jabatan Sukan Kokurikulum Dan Kebudayaan</h2>
<form action="" method="post">
            <table  align="center" cellpadding="5px">
            <?php
               //is there any row return by variable $result if value  > 0 --> YES
               if ($result->num_rows > 0) {
                   //output data of each row : $row will used to display the value
                   while($row = $result->fetch_assoc()){
                       ?>
          
                    <tr>
                        <th colspan="2">Ruj. Kawalan Stok</th>
                        <td colspan="2"><?php echo $row['rujstok'];?></td>
                        <th colspan="2">Nombor Kod</th>
                        <td colspan="2"><?php echo $row['nomborkod'];?></td>
                    </tr>
                    <tr>
                        <th colspan="2">Perihal Stok</th>
                        <td colspan="2"><?php echo $row['perihalstok'];?></td>
                        <th colspan="2">Tanda Nama/Label</th>
                        <td colspan="2"><?php echo $row['namalabel'];?></td>
                    </tr>
                    <tr>
                        <th colspan="2">Kumpulan Stok</th>
                        <td colspan="2"><?php echo $row['kumpulanstok'];?></td>
                        <th colspan="2">Lokasi Stok</th>
                        <td colspan="2"><?php echo $row['lokasistok'];?></td>
                    </tr>
                    <tr>
                        <th rowspan="2" name="tarikh">Tarikh</th>
                        <th rowspan="2" name="no">No.Ruj.BTB atau No.Ruj.BPPS</th>
                        <th colspan="4" >Kuantiti </th>
                        <th rowspan="2" name="tanda">T.Tangan Pegawai Stok</th>
                    </tr>
                    <tr>
                        <th name="terima">Terima</th>
                        <th name="seunit">Seunit (RM)</th>
                        <th name="keluar">Keluar </th>
                        <th name="baki">Baki</th>
                    </tr>
                    
                    <tr>
                         <th><?php echo $row['tarikh'];?></th>                       
                         <th><?php echo $row['btbbpps'];?></th>                    
                         <th><?php echo $row['terima'];?></th>  
                         <th><?php echo $row['seunit'];?></th>
                         <th><?php echo $row['keluar'];?></th>
                         <th><?php echo $row['baki'];?></th>
                         <th><?php echo $row['tandatangan'];?></th>
                    </tr>
                    <?php
                   } //close while
               } //close if -->nm_rows
               ?>
    </table>
    <center><button id="PrintButton" onclick="PrintPage()" >Print</button></center>
    <script type="text/javascript">
    function PrintPage(){
        window.print();
    }
    </script>
</form>

</html>