<?php
session_start();   //start session

//declare variable (not connected yet)
$servername ="localhost";  //servername-->ip address
$username="root";   //server username
$password="";   //server password
$dbname="ifkitchendb";   //database name

error_reporting(E_ERROR | E_WARNING | E_PARSE);

//create connection (option1)
$conn = new mysqli($servername,$username,$password,$dbname)or die("cannot connect");

//option2-->$conn = mysqli_connect("localhost","root","","userinfo");

//option3-->$conn = mysqli_connect($servername, $username, $password,$dbname);

//Check connection
if (!$conn)
{
die("Connection failed:".mysqli_connect_error());   //display error if the server cannot be connected
}
else
    //echo "Connected successfully!!";
?>
