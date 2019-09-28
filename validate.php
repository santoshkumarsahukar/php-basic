<?php
$email=$_POST['email'];
$password=$_POST['password'];
$connection=mysqli_connect("localhost","root","","registration1");
        $hashedpassword=hash("md5",$password);
		$sql_e="SELECT * FROM `logins` WHERE Email='$email' AND password='$hashedpassword' ";
		$res_e=mysqli_query($connection,$sql_e);
        
		if(mysqli_num_rows($res_e)>0)
		{
			echo "
		<script>
		alert('login sucessful');
	
		</script>";
		session_start();
		$_SESSION['email']=$email;
		echo "
		<script>
		window.location.href='home.php';
		</script>";
			
		}

        else
        {
			echo "
		<script>
		alert('you are not a member');
		window.location.href='index.php';
		</script>";
 
			
			
        }


?>