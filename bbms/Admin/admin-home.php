<?php 

include ('connect.php');

session_start();


?>


<!DOCTYPE html>
<html>
<head>
<title>Admin Home</title>
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
</head>
<body>
<!-- Main Dive start-->
<div id="main">
<div id="main_inner">
<!-- Header id start -->
<div id="header"> 
<h2><b><a href="admin-home.php" style="color:white; text-decoration:none; font-size:25px;"> Blood Bank Management System</a></b></h2>

</div>
<!-- Header id close -->

<br> <br><br> <br><br> <br>
<!----------------------------------------------------------Body id start ------------------------------------------------>
<div id="body"> 
<?php 

 echo "Welcome:" .$un = $_SESSION['un'];

?>
<h1>Welcome to Admin</h1>
<br> <br>
<ul>
	
	<li><a href="donor-reg.php">Donor Registration </a></li>
   <li><a href="donor-list.php">Donor List </a></li>

	<li><a href="stoke-blood-list.php">Stoke Blood List</a></li>


</ul>
<br> <br>
<br> <br>
<br> <br>

<ul>
<li><a href="outstoke-blood-list.php">OutStoke Blood List</a></li>

	<li><a href="exchang-blood-reg.php">Exchange Blood Registration</a></li>

	<li><a href="exchang-blood-list.php">Exchange Blood List</a></li>



</ul>







</div>
<!--------------------------------------------------------Body id close ------------------------------------------------>

<!-- Footer id start -->
<div id="footer">  
<h3 align="center">Copyright@myproject.com 2018-11</h3>

<br>

<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
<br>
</div>
<!-- Footer id close -->


</div>
</div>
<!-- Main Dive close-->
</body>



</html>