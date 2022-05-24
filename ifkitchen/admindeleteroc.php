<?php
include('connection.php');

//get the uid value from the url(from displayalluser.php->href)
$id=$_GET['id'];

$deleteid="DELETE FROM roc WHERE id='$id'";//hanya comand
$resultdelete=$conn->query($deleteid); //execute the qeury

?>
<script>
    window.location="adminroc.php";
</script>