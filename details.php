
<?php
session_start();
if(isset($_SESSION['email']))
{
$connection=mysqli_connect("localhost","root","","registration1");

?>

  <html>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<body>

<?php
			
      $sql="SELECT * FROM logins;";
      $result=mysqli_query($connection,$sql);
	  $resultcheck=mysqli_num_rows($result);


	  if($resultcheck>0)
	  {
			?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Usn</th>
			<th scope="col">Branch</th>
			<th scope="col">Email</th>
			<th scope="col">Date of birth</th>
			<th scope="col">Phone number</th>
			<th scopr="col">Images</th>
			<th scope="col">Option</th>
    </tr>
</thead>


<?php
		  while($row=mysqli_fetch_assoc($result))
		  {
		?> 
	 
    <tr>
      <th scope="col"><?php echo $row['Id'];?></th>
			<td><?php echo $row['Name'];?></td>
		  <td><?php echo $row['Usn'];?></td>
		  <td><?php echo $row['Branch'];?></td>
		  <td><?php echo $row['Email'];?></td>
		  <td><?php echo $row['Datebirth'];?></td>
			<td><?php echo $row['Phone'];?></td>
			<td><?php echo $row['Image'];?></td>
		<?php echo "<td><a href=delete.php?id=".$row['Id']."><button class='btn-danger' >Delete</button></a></td>"?>
		<?php	echo "<td><a href=update.php?id=".$row['Id']."><button class='btn-success' >Edit</button></a>	</td>"?>
		</tr>

		<?php
		  }
		}
		else
		{
			
			echo "<h1><center>No Data Found!!!!!!</center></h1>";
		}
?>
				
</table>
	 <a href="logout.php">
    <button class="btn-primary" value="logout">Logout</button>
    </a>
</body>
  </html>
	<?php
 }
 else
 {
 header('Location:index.php');
 }
 ?>
 
