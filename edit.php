<?php
session_start();
if(!isset($_SESSION['email']))
{
	header('Location:index.php');
}
else
{
	$name=$_POST['name'];
	$usn=$_POST['usn'];
	$branch=$_POST['branch'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$id=$_POST['id'];
             $target="images/".basename($_FILES['images']['name']);
			 $connection=mysqli_connect("localhost","root","","registration1");
			 $images=$_FILES['images']['name'];

			  
				$sql="UPDATE `logins` SET `Name`='$name',`Usn`='$usn',
				`Branch`='$branch',`Datebirth`='$dob',`Email`='$email',`Phone`='$phone' ,`Images`='$images' WHERE id='$id'";
				$result=mysqli_query($connection,$sql);
				if($result)
				{
			echo "
				<script>
				
				
				window.location.href='details.php';
				</script>";
				}
				else
				{ 
					echo "
			<script>
			alert('Form is empty');
			window.location.href='details.php';
			</script>";
				 }

	}
	

?>

