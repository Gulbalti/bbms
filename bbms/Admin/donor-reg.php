<?php 

include ('connect.php');

session_start();


?>


<!DOCTYPE html>
<html>
<head>
<title>Donor Registration </title>
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

<!----------------------------------------------------------Body id start ------------------------------------------------>
<div id="body"> 
<?php 

 echo "Welcome:" .$un = $_SESSION['un'];

?>
<h1>Donor Registration </h1>
<div id="form">
<form action="donor-reg.php" method="post"> 
	<table align="center">
		<tr>
			<td width="200px" height="50px">Enter Name</td>
			<td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
            <td width="200px" height="50px">Father's Name</td>
			<td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name"></td>
			
		</tr>
		<tr>
			<td width="200px" height="50px">Enter Address</td>
			<td width="200px" height="50px"><textarea name="address" cols="10" rows="5">Enter Address</textarea> </td>
            <td width="200px" height="50px">City's Name</td>
			<td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City Name"></td>
			
		</tr>
		<tr>
			<td width="200px" height="50px">Enter Age</td>
			<td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age "> </td>
            <td width="200px" height="50px">Select Blood Group</td>
			<td width="200px" height="50px"> 

            <select name="bgroup">
            	
<option>0+</option>
<option>AB+</option>

<option>AB-</option>


            </select>
			</td>
			
		</tr>
		<tr>
			<td width="200px" height="50px">Enter E-mail</td>
			<td width="200px" height="50px"><input type="email" name="email" placeholder="Enter E-mail Address" </td>
            <td width="200px" height="50px">Mobile No</td>
			<td width="200px" height="50px"><input type="text" name="mobile" placeholder="0300-0000-000-00"></td>
			
		</tr>
      <tr>
      	
			<td width="200px" height="50px"><input type="submit" name="submit" value="Save Now "></td>
      </tr>
     <tr>
     	
<?php 

if (isset($_POST['submit'])) {

      $name = $_POST['name'];
      $fname = $_POST['fname'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $age = $_POST['age'];
    $bgroup = $_POST['bgroup'];
      $email = $_POST['email'];
     $mobile = $_POST['mobile'];

     $q=$db->prepare("INSERT INTO donor_reg(name,fname,address,city,age, bgroup, email, mobile)VALUES(:name,:fname,:address,:city,:age,:bgroup,:email,:mobile)");

     $q->bindValue('name',$name);
     $q->bindValue('fname',$fname);
     $q->bindValue('address',$address);
     $q->bindValue('city',$city);
     $q->bindValue('age',$age);
     $q->bindValue('bgroup',$bgroup);
     $q->bindValue('email',$email);
     $q->bindValue('mobile',$mobile);
   
   if ($q->execute()) {
   	echo "<script>alert('Donor Registration Successfully ') </script>";
   }else{


   	   	echo "<script>alert('Donor Registration Fail ') </script>";

   }


}else{



echo "<script> alert('Data Not Save ') </script>";

}






?>

     </tr>
	</table>
	</form>

	<br> <br>
<br> <br>
<br> <br>
<br> <br>


</div>


<br> <br>



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