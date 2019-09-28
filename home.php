<?php
$connection=mysqli_connect("localhost","root","","registration1");
session_start();
if(isset($_SESSION['email']))
{
?>

 <html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="title icon" type="image/jpg" href="images/image1a.jpg">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<?php
	
   $email=$_SESSION['email'];
	//$email="hello@gmail.com";
	 $sql="SELECT * FROM logins WHERE Email = '$email'";
	 $result=mysqli_query($connection,$sql);
	 $resultcheck=mysqli_num_rows($result); 
		$row1=mysqli_fetch_assoc($result);
		?>
		
	
				
				<br>	

  <div class="row">
          <div class="col-lg-3 col-sm-10 mx-auto mb-4">
            <div class="card">
              <img src="images1/<?php echo $row1['Image'];?>" class="card-img-top">
              <div class="card-body">
                <div class="card-tittle">
                <h1 class="text-muted"><?php echo $row1['Name'];?></h1>
                </div>
                <div class="card-subtittle">
                  <div class="lead text-success">
                                               USN: -<?php echo $row1['Usn'];?>
								                              	<br>
								                               BRANCH:-<?php echo $row1['Branch'];?>
																								<br>
																								EMAIL:-<?php echo $row1['Email'];?>
																								<br>
																								DATE OF BIRTH:-<?php echo $row1['Datebirth'];?>
																								<br>
																							 PHONE NUMBER:-	<?php echo $row1['Phone'];?></div>
                </div>
                <div class="text-right">
                  <a href="#">
                    <i class="fab fa-facebook fa-2x mx-2 text-primary"></i>
                  </a>
                  <a href="#">
                      <i class="fab fa-twitter fa-2x mx-2 text-info"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-youtube fa-2x mx-2 text-danger"></i>
                      </a>

                </div>

              </div>

            </div>
          </div>
          </div>
          <footer>

					<a href="details.php">
    <button class="btn-primary" value="details">Details</button>
    </a>
		<a href="logout.php">
    <button class="btn-info" value="logout">Logout</button>
    </a>
    </footer>
</body>
  </html>
  <?php
}  
else
{
	header('Location:index.php');
}
