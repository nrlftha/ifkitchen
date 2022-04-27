<?php
//session_start();
//call file connection.php ---> connect to db
include ('connection.php');

//receive input login from
$employeeno=$_POST['empno'];  //admin
$psw=md5($_POST['password']);  //123456

//check user input with available user's data in database ---> user table
// 1. retrieve data from db first
// 2. compare with user input
	// i. true ---> ?
	// ii. false ---> ?
	
$retdata="select * from register where empno='$employeeno' and password='$psw'";
$retresult=$conn->query($retdata);

if($retresult->num_rows>0) //return 0:no data , return >0 (1...2...3): data exist in database
{
	$row=$retresult->fetch_assoc();
	if($row['empno']=="admin")
		{
			$_SESSION['usrname']=$row['empno']; //create and assign value to a session variable --> admin

			header("Location: report.php");
				?>
				
				<?php
		}
		elseif($row['empno']=="roc")
		{
			$_SESSION['usrname']=$row['empno']; //create and assign value to a session variable --> roc

			header("Location: roctest.php");
				?>

				<?php
		}
		elseif($row['empno']=="production")
		{
			$_SESSION['usrname']=$row['empno']; //create and assign value to a session variable --> production

			header("Location: productiondoor.php");
				?>
				<?php
		}

}
else
{
	echo "You are not authorize to access this system. Please register !";
}
?>