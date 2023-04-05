
<!DOCTYPE html>

<?php
include 'config.php';
session_start();


if(isset($_SESSION['email']) )
{
  header("location:RecordManager.php");
  die();
}
//connect to database

if($con)
{


  if(isset($_POST['login_btn']))
  {
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $password=mysqli_real_escape_string($con,$_POST['password']);
   
      $sql="SELECT * FROM rolebasedlogin WHERE email='$email' AND password='$password'";
      $result=mysqli_query($con,$sql);
      
      if($result)
      {

		
        if( mysqli_num_rows($result)>=1)
        {
          $sql="SELECT * FROM rolebasedlogin WHERE email='$email'";
    $run_data=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_data))
                                {
                                
                                  $Role = $row['Role'];
                                  

                            }

							if($Role=="Admin"){
								$_SESSION['email']=$email;
		                          header("location:admin/admincode/MemberSignup.php");

							} 
							if($Role=="Teacher"){
								$_SESSION['email']=$email;
		                          header("location:RecordManager.php");

							} 
							
			
        }
       else
       {
              echo "con not east";
       }
      }
  }
}
?>
<html lang="en">
<head>
	<title>Text Similarity Detector</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="FypLogo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginDesign/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginDesign/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginDesign/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginDesign/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="LoginDesign/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginDesign/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginDesign/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="LoginDesign/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="LoginDesign/css/util.css">
	<link rel="stylesheet" type="text/css" href="LoginDesign/css/main.css">

<style>
	#image_setting{


height: 75%;
	}
</style>
</head>
<body style="background-color: #666666;">
	
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						Login 
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
					

					
					</div>
			

					<div class="container-login100-form-btn">
						<button type="submit" name="login_btn" class="login100-form-btn">
							Login
						</button>
					</div>
					
				

				</form>

				<div class="login100-more" style="background-image: url('LoginDesign/images/pexels-anthony-158834.jpg');">
				</div>
			</div>
			</div>
			</div>
	
	

	
<!--===============================================================================================-->
<script src="LoginDesign/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="LoginDesign/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="LoginDesign/vendor/bootstrap/js/popper.js"></script>
	<script src="LoginDesign/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="LoginDesign/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="LoginDesign/vendor/daterangepicker/moment.min.js"></script>
	<script src="LoginDesign/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="LoginDesign/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="LoginDesign/js/main.js"></script>

</body>
</html>