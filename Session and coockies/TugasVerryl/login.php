<?php
$conn = mysqli_connect("localhost","root","","login");

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$query = mysqli_query($conn,"SELECT * FROM user where username='$username' && password='$password'");
	$cek = mysqli_num_rows($query);
	if ($cek == true) {
		$_SESSION['login'] = "sukses";
		echo "Sukses";
		setcookie("message", "cookiesSet", time()+3600);

		header("location:home.php");
	}else{

  setcookie("message","delete",time()-1); // Kita delete cookie message
  echo "login gagal";
	}
	
}

?>