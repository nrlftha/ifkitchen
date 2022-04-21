<?php
if(isset($_POST['send']))
{
	echo '<pre>'; print_r($_POST); exit;
	//call connection.php
	include("connection.php");
	
	//declare variable for every input
	$customerno=$_POST['customerno'];
	$customername=$_POST['customername'];
	$psw=md5($_POST['password']);
	$phoneno=$_POST['phoneno'];

	
	//SQL for INSERT (not execute yet)
	$cmdinsert="INSERT INTO daftarcustomer(customerno,customername, password, phoneno,) VALUES ('$customerno','$customername','$psw', '$phoneno')";
	
	//Execute sql command
	if($conn->query($cmdinsert)===TRUE) //berjaya insert data
	{
		echo"Data has been inserted into table daftarcustomer!";
		?>
		
<script>
window.location="logincustomer.php";
</script>

<?php
	}
	else
	{
		echo "ERROR: Data cannot be inserted!";
		echo "Error: " . $cmdinsert . "<br>" . $conn->error;

	}
}else{
	echo "failed to register. please try again.. ";
}
?>