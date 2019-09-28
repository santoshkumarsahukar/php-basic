<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$usn=$_POST['usn'];
$branch=$_POST['branch'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];
$target="images1/".$image;
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
move_uploaded_file($temp,$target);

if($name!='' && $usn!=''&& $branch!='' && $email!='' && $phone!='' && $dob!=''&& $password!='')
{
    if($password==$cpassword)
	{
     $hashedpassword=hash("md5",$password);
     $connection=mysqli_connect("localhost","root","","registration1");
/*if($connection)
	echo "connected";*/
      $query="INSERT INTO `logins` (`Name`, `Usn`, `Branch`, `Datebirth`, `Email`, `Phone`, `Password`,`Image`)
                    VALUES ('$name','$usn','$branch','$dob','$email','$phone', '$hashedpassword','$image');";
      $result=mysqli_query($connection,$query);
			if($result)
			{
			session_start();
			$_SESSION['email']=$email;
	  echo "
      <script>
      alert('REGISTRATION SUCCESSFUL');
      window.location.href='home.php';
			</script>";
			}
     }

      else
	  {
		echo "
		<script>
		alert('incorrect password');
		window.location.href='index.php';
		</script>";
	  }
}
else
	{ 
        echo "
		<script>
		alert('Form is empty');
		window.location.href='index.php';
		</script>";
	}
}
?>