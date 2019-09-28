<?php
session_start();
if(!isset($_SESSION['email']))
{
header('Location:index.php');
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
   
  </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">
    <header>
                
            </header>
            <section>	
            <div id="container_demo" >
            <div id="wrapper">
            <div  class="animate form">
            <?php
            $connection=mysqli_connect("localhost","root","","registration1");
            $id=$_GET['id'];
            $sql="SELECT * FROM logins WHERE Id='$id'";
            $result=mysqli_query($connection,$sql);
            $resultcheck=mysqli_num_rows($result);
      
      
            if($resultcheck>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
              ?> 
                            <form  action="edit.php" autocomplete="on" method="POST"> 
                            <input type="text" name="id" value="<?php echo $id?>" hidden>
                                <h1> Edit</h1> 
                                <div class="form-group">
                                <!--NAME-->
                                    <label for="name">Name</label>
                                    <td>  <input type="text"  name="name" value="<?php echo $row['Name'];?>"></td>
                                  </div>
                                 <!--USN-->
                                  <div class="form-group">
                                    <label for="usn">Usn</label>
                                   <td> <input type="text"  name="usn" value="<?php echo $row['Usn'];?>"></td>
                                  </div>
                                 
                                 <!--EMAIL-->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <td>  <input type="email" name="email" value="<?php echo $row['Email'];?>" required></td>
                                   
                                  </div>
                                  <!--PHONE NUMBER-->
                                  <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                <td>  <input type="text" name="phone" value="<?php echo $row['Phone'];?>" max="10" min="10" required></td>
                                  </div>
                                   <!--BRANCH-->
                                   <div class="form-group">
                                    <label for="branch">Branch</label>
                                    <!--<input  class="form-control"  >-->
                                    <select class="form-control" name="branch" required>
                                  <td><option value="<?php echo $row['Branch'];?>"><?php echo $row['Branch'];?></option>
                                  </td>
                                 
                                    <?php
                                   
                                    $sql="SELECT * FROM msbranch;";
                                    $result=mysqli_query($connection,$sql);
	                                 $resultcheck=mysqli_num_rows($result);
	                                 if($resultcheck>0)
	                                {
		                             while($row1=mysqli_fetch_assoc($result))
		                            {
                                  if( $row['Branch'] == $row1['Name'])continue;
                                        ?>
                                        <option value="<?php echo $row1['Name'];?>"><?php echo $row1['Name']?></option>
                                        <?php
                                    }
                                    }
                                    
                                    ?>
                                   
                                    </select>
                                  </div>
                                  <!--date fo birth-->
                                  <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                               <td><input type="date" name="dob" value="<?php echo $row['Datebirth'];?>"></td>
                                  </div>
                                  <div class="form-group">
                                  <input type="file">
                                  </div>

                                  <p class="signin button"> 
									              <input type="submit"  name="submit" value="Sign up"/> 
							                     	</p>
                      
                                <?php
                }
            }
            ?>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
            </div>
    </body>
</html>
<?php
}
?>
    

