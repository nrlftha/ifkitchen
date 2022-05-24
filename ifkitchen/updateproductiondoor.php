<?php include('navbarproduction.php');
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
        $idproductiondoor=$_POST['idproductiondoor'];
        $empno=$_POST['empno'];
        $pintu=$_POST['pintu'];
        $handle=$_POST['handle'];
        $jcolor=$_POST['jcolor'];
        $door_carcase=$_POST['door_carcase'];

       if(isset($_POST['accessories'])){
        $accessories=$_POST['accessories'];
        }else{
            $accessories = "";
        }
        if(isset($_POST['remark'])){
        $remark=$_POST['remark'];
        }else{
             $remark = "";
        }
        if(isset($_POST['color'])){
        $color=$_POST['color'];
        }else{
             $color = "";
        }
        if(isset($_POST['jhandle'])){
        $jhandle=$_POST['jhandle'];
        }else{
             $jhandle = "";
        }
        if(isset($_POST['carcase'])){
        $carcase=$_POST['carcase'];
        }else{
             $carcase = "";
        }
        if(isset($_POST['papan'])){
        $papan=$_POST['papan'];
        }else{
             $papan = "";
         }
        if(isset($_POST['opintu'])){
         $opintu=$_POST['opintu'];
         }else{
             $opintu = "";
        }
       

        $res = "UPDATE productiondoor SET  empno='$empno', pintu='$pintu', handle='$handle', jcolor='$jcolor', accessories='$accessories', remark='$remark',
        color='$color', jhandle='$jhandle', carcase='$carcase', papan='$papan', opintu='$opintu', door_carcase='$door_carcase'  WHERE idproductiondoor=$idproductiondoor";
        $result=$conn->query($res);

        header("location: viewproduction.php?idproductiondoor={$idproductiondoor}");
   
    }
    ?>

<?php
//MEMAPARKAN DATA KE DALAM JADUAL YANG DIBINA
if (isset($_GET['idproductiondoor'])) {
$idproductiondoor=$_GET['idproductiondoor'];
$result = mysqli_query($conn,"SELECT * FROM productiondoor WHERE idproductiondoor='{$idproductiondoor}' ");
while($res= mysqli_fetch_array($result)){

  $empno=($res['empno']);
  $pintu=($res['pintu']);
  $handle=$res['handle'];
  $jcolor=$res['jcolor'];
  $accessories=$res['accessories'];
  $remark=$res['remark'];
  $color=$res['color'];
  $jhandle=$res['jhandle'];
  $carcase=$res['carcase'];
  $papan=$res['papan'];
  $opintu=$res['opintu'];
  $door_carcase=$res['door_carcase'];
  
}

?>

 <form method="post" action="">
 <table id = "t01">
 <tr>
 <th colspan="2"><h2>Production Report Order</h2></th>
 </tr>
 <tr>
 <th>C/O :</th>
 <td><input type="text" name="empno" value="<?php echo $empno ;?>" required></td>
 </tr>
 <tr>
 <th>Jenis Pintu :</th>
 <td><select name="pintu" id="pintu">
	<option value="">--- Choose a Door ---</option>
	<option value="MW 2081">Melamine - MW 2081(JAE STONE)</option>
    <option value="MW 9004">Melamine - MW 9004(SONDRA YELLOW)</option>
    <option value="MW 9007">Melamine - MW 9007(CORTY BLUE)</option>
    <option value="MW 3049">Melamine - MW 3049(CRUZ)</option>
    <option value="MW 2055B">Melamine - MW 2055B(MARBLE WHITE)</option>
    <option value="MW 2078">Melamine - MW 2078(TAEGAN STONE)</option>
    <option value="MW 2011B">Melamine - MW 2011B(NIVAL STONE)</option>
    <option value="MW 2033B">Melamine - MW 2033B(NIFLAX STONE)</option>
    <option value="MW 3051">Melamine - MW 3051(CHRISTINO)</option>
    <option value="MW 3046">Melamine - MW 3046(CHERRY CAPUCINO)</option>
    <option value="MW 3043">Melamine - MW 3043(CLIFFE)</option>
    <option value="MW 3021">Melamine - MW 3021(MAKANA)</option>
    <option value="MW 3022">Melamine - MW 3022(MINERVA)</option>
    <option value="MW 3023">Melamine - MW 3023(MIZELLOAK)</option>
    <option value="MW 6642B">Melamine - MW 6642B(MYOMING NATUR)</option>
    <option value="MW 3031B">Melamine - MW 3031B(JEONG)</option>
    <option value="MW 200S">Melamine - MW 200S(GRAPHITE)</option>
    <option value="MW 1005STM">Melamine - MW 1005STM(NORY)</option>
    <option value="MW 9001ZF">Melamine - MW 9001ZF(SEMINA GREEN)</option>
    <option value="MW 9001STM">Melamine - MW 9001STM(SEMINA GREEN)</option>
    <option value="MW 9003STM">Melamine - MW 9003STM(COMFY LATTE)</option>
    <option value="MW 9002STM">Melamine - MW 9002STM(SEMIYE GREY)</option>
    <option value="MW 9005STM">Melamine - MW 9005STM(CELIO GREEN)</option>
    <option value="MW 9008STM">Melamine - MW 9008STM(SEGLINDE RED)</option>
    <option value="WTM 238STM">Melamine - WTM 238STM(GREY)</option>
    <option value="MW 2044A">Melamine - MW 2044A(NELLIE WOOD)</option>
    <option value="MW 2055A">Melamine - MW 2055A(MARBLE BLACK)</option>


	<option value="101">Arcylic - 101</option>
    <option value="102">Arcylic - 102</option>
    <option value="103">Arcylic - 103</option>
    <option value="104">Arcylic - 104</option>
    <option value="106">Arcylic - 106</option>
    <option value="107">Arcylic - 107</option>
    <option value="108">Arcylic - 108</option>
    <option value="110">Arcylic - 110</option>
    <option value="111">Arcylic - 111</option>
    <option value="112">Arcylic - 112</option>
    <option value="114">Arcylic - 114</option>
    <option value="115">Arcylic - 115</option>
    <option value="117">Arcylic - 117</option>
    <option value="118">Arcylic - 118</option>
    <option value="103g">Arcylic - 103g</option>
    <option value="202">Arcylic - 202</option>
    <option value="203">Arcylic - 203</option>
    <option value="206">Arcylic - 206</option>
    <option value="207">Arcylic - 207</option>
    <option value="208">Arcylic - 208</option>
    <option value="209">Arcylic - 209</option>
    <option value="210">Arcylic - 210</option>
    <option value="213">Arcylic - 213</option>
    <option value="214">Arcylic - 214</option>
    <option value="215">Arcylic - 215</option>
    <option value="216">Arcylic - 216</option>
    <option value="501">Arcylic - 501</option>
    <option value="502">Arcylic - 502</option>
    <option value="503">Arcylic - 503</option>
    <option value="507">Arcylic - 507</option>
    <option value="508">Arcylic - 508</option>
    <option value="509">Arcylic - 509</option>
    <option value="510">Arcylic - 510</option>
    <option value="511">Arcylic - 511</option>
    <option value="512">Arcylic - 512</option>
    <option value="513">Arcylic - 513</option>

	<option value="3G Glass / 4G Glass">3G Glass / 4G Glass</option>

    <option value="SC 1001">HDF - SC 1001</option>
    <option value="SC 1002">HDF - SC 1002</option>
    <option value="SC 1003">HDF - SC 1003</option>
    <option value="SC 1004">HDF - SC 1004</option>
    <option value="SC 1007">HDF - SC 1007</option>
    <option value="SC 1010">HDF - SC 1010</option>
    <option value="SC 1011">HDF - SC 1011</option>
    <option value="SC 1012">HDF - SC 1012</option>
    <option value="SC 1013">HDF - SC 1013</option>
    <option value="SC 1014">HDF - SC 1014</option>
    <option value="SC 1015">HDF - SC 1015</option>
    <option value="SC 1016">HDF - SC 1016</option>
    <option value="SC 1017">HDF - SC 1017</option>
    <option value="SC 1018">HDF - SC 1018</option>
    <option value="SC 1019">HDF - SC 1019</option>
    <option value="SC 1020">HDF - SC 1020</option>
    <option value="SC 1022">HDF - SC 1022</option>
    <option value="SC 1023">HDF - SC 1023</option>
    <option value="SC 1024">HDF - SC 1024</option>
    <option value="SC 1025">HDF - SC 1025</option>
    <option value="SC 1026">HDF - SC 1026</option>
    <option value="SC 1027">HDF - SC 1027</option>
    <option value="SC 1029">HDF - SC 1029</option>
    <option value="SC 1030">HDF - SC 1030</option>
    <option value="SC 1031">HDF - SC 1031</option>
    <option value="SC 1032">HDF - SC 1032</option>
    <option value="SC 1033">HDF - SC 1033</option>
    <option value="SC 1034">HDF - SC 1034</option>

    <option value="WG 2001">HDF - WG 2001</option>
    <option value="WG 2002">HDF - WG 2002</option>
    <option value="WG 2003">HDF - WG 2003</option>
    <option value="WG 2004">HDF - WG 2004</option>
    <option value="WG 2005">HDF - WG 2005</option>
    <option value="WG 2006">HDF - WG 2006</option>
    <option value="WG 2007">HDF - WG 2007</option>
    <option value="WG 2009">HDF - WG 2009</option>
    <option value="WG 2010">HDF - WG 2010</option>
    <option value="WG 2011">HDF - WG 2011</option>
    <option value="WG 2012">HDF - WG 2012</option>
    <option value="WG 2013">HDF - WG 2013</option>
    <option value="WG 2014">HDF - WG 2014</option>
    <option value="WG 2015">HDF - WG 2015</option>
    <option value="WG 2016">HDF - WG 2016</option>

    <option value="PT 3001">HDF - PT 3001</option>
    <option value="PT 3002">HDF - PT 3002</option>
    <option value="PT 3003">HDF - PT 3003</option>
    <option value="PT 3004">HDF - PT 3004</option>
    <option value="PT 3005">HDF - PT 3005</option>

    <option value="HP 101">HDF - HP 101</option>
    <option value="HP 102">HDF - HP 102</option>
    <option value="HP 201">HDF - HP 201</option>
    <option value="HP 202">HDF - HP 202</option>
    <option value="HP 204">HDF - HP 204</option>
    <option value="HP 301">HDF - HP 301</option>
    <option value="HP 302">HDF - HP 302</option>
    <option value="HP 401">HDF - HP 401</option>
    <option value="HP 402">HDF - HP 402</option>
    <option value="HP 501">HDF - HP 501</option>
    <option value="HP 502">HDF - HP 502</option>
    <option value="HP 504">HDF - HP 504</option>
    <option value="HP 506">HDF - HP 506</option>
    <option value="HP 601">HDF - HP 601</option>

    <option value="HP 103W">HDF - HP 103W</option>
    <option value="HP 104W">HDF - HP 104W</option>
    <option value="HP 203W">HDF - HP 203W</option>
    <option value="HP 205W">HDF - HP 205W</option>
    <option value="HP 303W">HDF - HP 303W</option>
    <option value="HP 304W">HDF - HP 304W</option>
    <option value="HP 503W">HDF - HP 503W</option>
    <option value="HP 505W">HDF - HP 505W</option>
    <option value="HP 602W">HDF - HP 602W</option>

    <option value="S 101">HDF - S 101</option>
    <option value="S 102">HDF - S 102</option>
    <option value="S 103">HDF - S 103</option>
    <option value="S 104">HDF - S 104</option>
    <option value="S 105">HDF - S 105</option>

    <option value="CTX / CL">CTX / CL</option>
</select></td>
 </td>
 </tr>
 <tr>
 <th>Jenis Handle :</th>
 <td><select name="handle" id="handle">
	<option value="">--- Choose a Handle ---</option>
	<option value="Slope Handle">Slop Handle</option>
	<option value="H11 / H16">H11 / H16</option>
	<option value="M2H(3G) / G1H3(4G)">M2H(3G) / G1H3(4G)</option>
    <option value="hdf">HDF</option>
    <option value="ctxcl">CTX / CL</option>
</select></td>
 </tr>
 <tr>
 <th>Jenis Color :</th>
 <td><select name="jcolor" id="jcolor">
	<option value="">--- Choose a Color ---</option>
	<option value="Slope Handle">Slop Handle</option>
	<option value="H11">Arcylic</option>
	<option value="3g4g">3G Glass / 4G Glass</option>
    <option value="hdf">HDF</option>
    <option value="ctxcl">CTX / CL</option>
</select></td>
 </tr>

 <tr>
 <th><span>Production Detail Checklists</span><br/></th>
 <td>
<input type="checkbox" name="accessories" value="Check Accessories"> Check Accessories<br />  
<input type="checkbox" name="remark" value="Check Remark"> Check Remark<br />  
<input type="checkbox" name="color" value="Check 3D Color">Check 3D Color<br />  
<input type="checkbox" name="jhandle" value="Check Jenis Handle"> Check Jenis Handle <br />  
<input type="checkbox" name="carcase" value="Keluarkan Carcase, Pintu & Panel"> Keluarkan Carcase, Pintu & Panel<br />
<input type="checkbox" name="papan" value="Order Papan"> Order Papan<br />
<input type="checkbox" name="opintu" value="Order Pintu">Order Pintu <br />
</td>
 </tr>
 <th>Submit Door & Carcase :</th>
 <td><input type="date" name="door_carcase" value="<?php echo $door_carcase ;?>" required></td>
 </tr>
 <tr>
 <td colspan="2" align="center">
 <input type="hidden" name="idproductiondoor" value=<?php echo $_GET['idproductiondoor'];?>>
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
 