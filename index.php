<?php
session_start();
if(!isset($_SESSION['email']))
{
    ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="formvalid.js"></script>
<script type="text/javascript">  
        (function () {  
            'use strict';  
            window.addEventListener('load', function () {  
                var form = document.getElementById('needs-validation');  
                form.addEventListener('submit', function (event) {  
                    if (form.checkValidity() === false) {  
                        event.preventDefault();  
                        event.stopPropagation();  
                    }  
                    form.classList.add('was-validated');  
                }, false);  
            }, false);  
        })();  
</script>  
    </head>
    <body>
    <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
        <div class="container">
           
            <header>
                <h1>Login and Registration Form</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                           <form  action="validate.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                               
                                <div class="form-group">
                                    <label for="name">Your email or username</label>
                                    <input type="email" class="form-control" placeholder="eg :abc@gmail.com" name="email" >
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Your password</label>
                                    <input type="password" id="password"  class="form-control" placeholder="eg :X8df!90EO" name="password" >
                                </div>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
                                </p>
                              <p class="signin button"> 
									<input type="submit"  name="submit" value="Sign up"/> 
								</p>
                                
                                <p class="login button"> 
                                   <a href="http://cookingfoodsworld.blogspot.in/" target="_blank" ></a>
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form  action="database.php" autocomplete="on" method="POST" enctype="multipart/form-data">  
                                <h1> Sign up </h1> 
                                <div class="form-group">
                                <!--NAME-->
                                    <label for="name">Name</label>
                                   <input type="text" id="name" placeholder="abcd"  name="name" aria-describedby="inputGroupPrepend" required>
                                   <p id="p1"></p>
                                  </div>
                                   
                                        
                                 <!--USN-->
                                  <div class="form-group">
                                    <label for="usn">Usn</label>
                                    <input type="text"  placeholder="4su17cs001" name="usn">
                                  </div>
                                  <!--BRANCH-->
                                  <div class="form-group">
                                    <label for="branch">Branch</label>
                                    <!--<input  class="form-control"  >-->
                                    <select class="form-control" name="branch">
                                    <option value="select">SELECT</option>
                                 
                                    <?php
                                    $connection=mysqli_connect("localhost","root","","registration1");
                                    $sql="SELECT * FROM msbranch;";
                                    $result=mysqli_query($connection,$sql);
	                                 $resultcheck=mysqli_num_rows($result);
	                                 if($resultcheck>0)
	                            {
		                             while($row=mysqli_fetch_assoc($result))
		                            {
                                        ?>
                                        <option value="<?php echo $row['Name']?>"><?php echo $row['Name']?></option>
                                        <?php
                                    }
                                }
                                    
                                    ?>
                                   <!-- <option value="computer science engineering">computer science engineering</option>
                                    <option value="Mechanical engineering">Mechanical engineering</option>
                                    <option value="Electronics and communication engineering">Electronics and communication engineering</option>
                                    <option value="Electrical engineering">Electrical engineering</option>
                                    <option value="civil engineering">civil engineering</option>-->
                                    </select>
                                  </div>
                                  <!--date fo birth-->
                                  <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="date" style="height:10px"placeholder="DD/MM/YYYY" name="dob">
                                  </div>
                                 <!--EMAIL-->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email"  placeholder="eg :abc@gmail.com" name="email" >
                                  </div>
                                  <!--PHONE NUMBER-->
                                  
                                  <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" pattern="^\d{10}$" id="phone" placeholder="1234567890" name="phone"
                                     aria-describedby="inputGroupPrepend" required>
                                     <div class="invalid-feedback">  
                                            Please enter 10 digit mobile number.  
                                        </div>
                                  </div>

                                  <!--images-->
                                  <div class="form-group">
                                    <label for="images">Images</label>
                                    <input type="file" name="image">
                                  </div>
                                  
                                <!--PASSWORD-->
                                <div class="form-group">
                                    <label for="password">Your password</label>
                                    <input type="password" id="password"   placeholder="eg :X8df!90EO" name="password" >
                                </div>
                                <!--CONFIRM PASSWORD-->
                                <div class="form-group">
                                    <label for="password">Please confirm your passwords</label>
                                    <input type="password" id="password"   placeholder="eg :X8df!90EO" name="cpassword" >
                                </div>
                                
                                <p class="signin button"> 
									<input type="submit" id="submit" name="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
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
else
{
    header('Location:home.php');
}
?>