<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: left;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color:black;
			width: 100%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #25383C;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>Home</title>
	</head>
	
	<body>
		<ul class="topnav">
			<li><a class="active"href="homepage.php">Home</a></li>
			<li><a href="adminroc.php">ROC</a></li>
			<li><a href="adminproductiondoor.php">Production Door & Carcase</a></li>
			<li><a href="">Planner</a></li>
			<li><a href="">Production</a></li>
			<li><a href="">installation</a></li>
			<li><a href="">Worktop</a></li>
			<li><a href="">Finishing</a></li>
			<li><a href="">Handover</a></li>
			<li><a href="report.php">Report</a></li>
			<li><a href="login.php">Logout</a></li>
		</ul>
		<br>
		</body>
</html>