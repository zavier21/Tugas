<?php 
	$conn = mysqli_connect("localhost","root","","login");
	session_start();
 ?>
 <?php
require 'login.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div style="color: red;margin-bottom: 15px;">

  </div>
 	<form action="" method="post">		
		<table>
		<?php if(!isset($_SESSION['login'])){ ?>
		<h1>Login Dahulu</h1>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
		<?php } ?>
			<tr>
				<td></td>
				<td>
					<?php if(isset($_SESSION['login'])){ ?>
						<input type="button" onclick="window.location.href='logout.php'" value="Log out">
					<?php }else{ ?>
					  <input type="submit" name="login" value="Log In"></td>
					<?php } ?>
				
			</tr>
		</table>
	</form>

	


<?php if(isset($_SESSION['login'])){ ?>

<hr>
<br>
	<h3>
		Upload di bawah
	</h3>
	<form action="uploads.php" method="post" enctype="multipart/form-data">
	    Select image to upload:
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload Image" name="submit">
	</form>
<?php } ?>
</body>
</html>
