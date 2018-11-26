<?php 

include ('connect.php');

session_start();


?>


<!DOCTYPE html>
<html>
<head>
<title>Outstoke Blood List </title>
<link rel="stylesheet" type="text/css" href="css/admin.css"/>
<style type="text/css">
	td{

    width:200px;
    height: 50px;

	}

</style>
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

<!----------------------------------------------------------Body id start ------------------------------------------------>
<div id="body"> 
<?php 

 echo "Welcome:" .$un = $_SESSION['un'];

?>
<h1>Outstoke Blood List</h1>
<div id="form">
<table>
	
	<tr>
		<td><center><b><font color="blue">Name</font></b></center></td>
		<td><center><b><font color="blue">Ftahter's Name</font></b></center></td>
		<td><center><b><font color="blue">Address</font></b></center></td>
		<td><center><b><font color="blue">City</font></b></center></td>
		<td><center><b><font color="blue">Blood Group</font></b></center></td>
		<td><center><b><font color="blue">Exchage Group</font></b></center></td>
		<td><center><b><font color="blue">Email</font></b></center></td>

	</tr>
	<?php 

       $q=$db->query("SELECT * FROM exchange_reg");

       while ($row=$q->fetch(PDO::FETCH_OBJ))
        {
       	
?>

<tr>
		<td><center><?= $row->name;?></center></td>
		<td><center><?= $row->fname;?></center></td>
		<td><center><?= $row->address;?></center></td>
		<td><center><?= $row->city;?></center></td>
		<td><center><?= $row->bgroup;?></center></td>
	    <td><center><?= $row->exbgroup;?></center></td>

		<td><center><?= $row->email;?></center></td>

	</tr>
<?php 

}
    

	?>
	
</table>

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