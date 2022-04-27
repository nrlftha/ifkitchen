<?php
include('connection.php');

//get the uid value from the url(from displayalluser.php->href)
$idproductiondoor=$_GET['idproductiondoor'];

$deleteid="DELETE FROM productiondoor WHERE idproductiondoor='$idproductiondoor'";//hanya comand
$resultdelete=$conn->query($deleteid); //execute the qeury

?>
<script>
    window.location="adminproductiondoor.php";
</script>