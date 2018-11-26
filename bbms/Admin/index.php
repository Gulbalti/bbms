<?php 

session_start();

include ('connect.php');


?>


<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
</head>
<body>
<!-- Main Dive start-->
<div id="main">
<div id="main_inner">
<!-- Header id start -->
<div id="header"> 
<h2>Blood Bank Management System</h2>

</div>
<!-- Header id close -->

<br> <br><br> <br><br> <br>
<!----------------------------------------------------------Body id start ------------------------------------------------>
<div id="body"> 
<br> <br><br> <br>
<form method="post" action="" >
<table align="center">
<tr>
<td width="200px" height="50px"><b>Enter Username</b></td>
<td width="200px" height="50px"><input type="text" name="un" style="width:180px; height:30px; text-align:center; border-radius:10px;" placeholder="Enter Username"></td>
</tr>
<tr>
<td width="200px" height="50px"><b>Enter Password</b></td>
<td width="200px" height="50px"><input type="password" name="ps" style="width:180px; height:30px; text-align:center; border-radius:10px;" placeholder="Enter Password"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="login" style="width:100px; height:30px; text-align:center; border-radius:10px;" value="Login" ></td>
</tr>
</table>
<?php


if(isset($_SESSION['un'])){
header("location: admin-home.php");
}
require "connect.php";

if(isset($_POST['login'])){
$un = $_POST['un'];
$pass = md5($_POST['ps']);
$messeg = "";

if(empty($un) || empty($pass)) {
    $messeg = "Username/Password con't be empty";
} else {
    $sql = "SELECT name , pass FROM admin WHERE name=? AND 
  pass=? ";
    $query = $conn->prepare($sql);
    $query->execute(array($un,$pass));

    if($query->rowCount() >= 1) {
    echo   $_SESSION['un'] = $un;
        $_SESSION['time_start_login'] = time();
       // header("location: general admin-home.php");
    } else {
        $messeg = "Username/Password is wrong";
    }
}
}

?>
</form>


</div>
<!--------------------------------------------------------Body id close ------------------------------------------------>

<!-- Footer id start -->
<div id="footer">  
<h3 align="center">Copyright@myproject.com 2018-11</h3>

<br>
</div>
<!-- Footer id close -->


</div>
</div>
<!-- Main Dive close-->
</body>



</html>