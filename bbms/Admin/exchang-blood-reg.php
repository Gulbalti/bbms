<?php 

include ('connect.php');

session_start();


?>


<!DOCTYPE html>
<html>
<head>
<title>Exchange Blood Registeraton  </title>
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
<h1>Exchang Blood Registration </h1>
<div id="form">
<form action="exchang-blood-reg.php" method="post"> 
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
			
      <td width="200px" height="50px">Select Blood Group</td>
			<td width="200px" height="50px"> 
 <select name="bgroup">
            	
<option>0+</option>
<option>AB+</option>

<option>AB-</option>


 </select>
			</td>
			

<td width="200px" height="50px">Enter Mobile No</td>
      <td width="200px" height="50px"><input type="text" name="mobile" placeholder="Enter Mobile "> </td>



		</tr>
		<tr>
      <td width="200px" height="50px">Exchange Blood Group</td>
      <td width="200px" height="50px"> 
 <select name="exbgroup">
              
<option>0+</option>
<option>AB+</option>

<option>AB-</option>


 </select>
      </td>

			<td width="200px" height="50px">Enter E-mail</td>
			<td width="200px" height="50px"><input type="email" name="email" placeholder="Enter E-mail Address" </td>
          
		</tr>
      <tr>
      	
			<td width="200px" height="50px"><input type="submit" name="submit" value="Save Now "></td>
      </tr>
     <tr>
     	
<?php 

// font and input data 

if (isset($_POST['submit'])) {

      $name = $_POST['name'];
      $fname = $_POST['fname'];
      $address = $_POST['address'];
      $city = $_POST['city'];
       $bgroup = $_POST['bgroup'];
       $exbgroup = $_POST['exbgroup'];

      $email = $_POST['email'];
      $mobile = $_POST['mobile'];

      // font and input data end

// select and insert 

      $q="select * from donor_reg where bgroup='$bgroup'";
      $run=$db->query($q);
      $row=$run->fetch();

      $id = $row['id'];
      $name = $row['name'];
      $b1 = $row['bgroup'];
      $mno = $row['mobile'];

      $q1= "INSERT INTO out_stoke_b(name,bname,mno)
       values(?,?,?)";
      $st1=$db->prepare($q1);

      $st1->execute([$name,$b1,$mno]);

      // select and insert 

// delete id 
      
      $q2 = "delete from donor_reg where id='$id'";

      $st=$db->prepare($q2);
      $st->execute();

// delete id end

      // insert and exchnage 

       $q=$db->prepare("INSERT INTO exchange_reg(name,fname,address,city, bgroup,exbgroup, email)VALUES(:name,:fname,:address,:city,:bgroup,:exbgroup,:email)");

     $q->bindValue('name',$name);
     $q->bindValue('fname',$fname);
     $q->bindValue('address',$address);
     $q->bindValue('city',$city);
     $q->bindValue('bgroup',$bgroup);
     $q->bindValue('exbgroup',$exbgroup);

     $q->bindValue('email',$email);
   
   if ($q->execute()) {
   	echo "<script>alert('Donor Registration Successfully ') </script>";
   }else{


   	   	echo "<script>alert('Donor Registration Fail ') </script>";

   }


}else{



echo "<script> alert('Data Not Save ') </script>";




}


      // insert and exchnage end 




?>

     </tr>

     <br> <br>
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