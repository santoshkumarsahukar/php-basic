<?php
$connection=mysqli_connect("localhost","root","","registration1");
//echo "connected";
$query="DELETE FROM `logins` WHERE id='$_GET[id]'";
$result=mysqli_query($connection,$query);
//echo "deleted successfully";
if($result)
			{
			
	  echo "
      <script>
      alert('DELETED SUCCESSFULly');
      window.location.href='details.php';
			</script>";
			}
?>