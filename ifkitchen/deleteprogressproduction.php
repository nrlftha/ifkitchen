<?php
include('connection.php');

//get the uid value from the url(from displayalluser.php->href)
$idprogress=$_GET['idprogress'];

$deleteid="DELETE FROM progress WHERE idprogress='$idprogress'";//hanya comand
$resultdelete=$conn->query($deleteid); //execute the qeury

?>
<script>
    window.location="progressproduction.php";
</script>