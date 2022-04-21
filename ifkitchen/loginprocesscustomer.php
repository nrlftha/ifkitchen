<?php
session_start();
//call file connection.php ---> connect to db
include ('connection.php');

//receive input login from
$customerno=$_POST['customerno'];  //admin
$psw=md5($_POST['password']);  //123456

//check user input with available user's data in database ---> user table
// 1. retrieve data from db first
// 2. compare with user input
	// i. true ---> ?
	// ii. false ---> ?
	
$retdata="select * from daftar_customer where customerno='$customerno' and password='$psw'";
$retresult=$conn->query($retdata);

if($retresult->num_rows>0) //return 0:no data , return >0 (1...2...3): data exist in database
{
	$row=$retresult->fetch_assoc();

			$_SESSION['customername']=$row['customerno']; //create and assign value to a session variable --> usrnm

			header("Location: progress.php");
				?>
				<?php
	
}
else
{
	echo "You are not authorize to access this system. Please register !";
}
?>