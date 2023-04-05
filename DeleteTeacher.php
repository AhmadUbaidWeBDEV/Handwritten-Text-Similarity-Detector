









<?php
include 'config.php';
session_start();
//connect to database

if(($_SESSION['email'])==null){
    header("location:index.php");
    
    }else{
        
      $emailofmember=$_SESSION['email'];
      $sql="SELECT * FROM rolebasedlogin WHERE email='$emailofmember'";
      $run_data=mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($run_data))
                                  {
                                    $Role=$row['Role'];
                                    $artwork1 = $row['aname'];
                                    $username1 = $row['username'];
  
                              }

     
                              if(isset($_POST['Delete_btn']))
                              {
                                  $teacherEmaile=mysqli_real_escape_string($con,$_POST['email']);
                                
                                
                                  $query = "DELETE  FROM rolebasedlogin WHERE email='$teacherEmaile'";
                                  mysqli_query($con,$query);
                                   
                               
                              }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin</title>

   
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <style>

      
      </style>
  </head>

  <body>
    
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
    
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
          <a class="navbar-brand" href="index.html">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img style="border-radius: 8px; margin-top:13%;margin-left:3%;"
                  src="./FypLogo.png"
                  alt="homepage"
                  class="light-logo"
                  width="140"
                  
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
           
    
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
    
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
               
           
            
          </div>
        </nav>
      </header>
   
      <aside class="left-sidebar" data-sidebarbg="skin5">
           <div class="scroll-sidebar">
   
          <nav class="sidebar-nav">
          <ul class="navbar-nav float-end">
   
            </ul>

          
            <ul margin id="sidebarnav" class="pt-4">

            <li style="margin-top:10%; margin-left:25%;margin-bottom:15%" class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
               
                <?php
                echo "
                
                  
                  <img src='http://localhost/dashboard/SimilarityDetector/uploads/$artwork1' class='rounded-circle' width='60' >
                                         
                ";
                
                ?>
                 
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown" style="left:10%"
                >
                  <a class="dropdown-item text-white" 
                    ><i class="mdi mdi-account me-1 ms-1"></i> <?php echo $username1 ?></a
                  >
                
                  <a class="dropdown-item text-white"
                    ><i class="mdi mdi-email me-1 ms-1"></i> <?php echo $emailofmember ?></a>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-white" href="logout.php"
                    ><i class="fa fa-power-off me-1 ms-1"></i>Logout</a
                  >
                  
                </ul>

                
              </li>
            
          
              <li style="margin-top:5%;" class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="MemberSignup.php"
                  aria-expanded="false"
                  ><span class="hide-menu">Similarity Records</span></a
                >
              </li>
              <li style="margin-top:11%;" class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="TeacherRecords.php"
                  aria-expanded="false"
                  ><span class="hide-menu">Techer Records</span></a
                >
              </li>
              <li style="margin-top:12%;" class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="RegisterTeacher.php"
                  aria-expanded="false"
                  ><span class="hide-menu">Register Teacher</span></a
                >
              </li>
              <li style="margin-top:12%;" class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="UpdateTeacher.php"
                  aria-expanded="false"
                  ><span class="hide-menu">Update Teacher</span></a
                >
              </li>
             
              <li style="margin-top:12%;" class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="DeleteTeacher.php"
                  aria-expanded="false"
                  ><span class="hide-menu">Delete Teacher</span></a
                ></li>
              
            </ul>
          </nav>
   
        </div>
    
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
    
      
         
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
  
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
  </body>
</html>








<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<style>
body {
	color: #fff;
	background: #3598dc;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 41px;
	background: #f2f2f2;
	box-shadow: none !important;
	border: none;
}
.form-control:focus {
	background: #e2e2e2;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 30px auto;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2  {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr  {
	margin: 0 -30px 20px;
}    
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 100px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #2389cd !important;
	outline: none;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .hint-text  {
	padding-bottom: 15px;
	text-align: center;
}


</style>
</head>
<body>




<div id="deletefrm" class="signup-form">
    <form action="" method="post">
		<h2>Find Teacher by Email </h2>
	
		<hr>
                <div class="form-group">
        	<input type="text" class="form-control" name="Email" placeholder="Email@abc.xyz" required="required">
        </div>
       

		<div class="form-group">
            <button type="submit" name="find_btn" id="btnlg" class="btn btn-primary btn-lg">Find</button>
        </div>
       
    </form>
	
</div>


<?php
if(isset($_POST['find_btn'])){

    $teacheremail=mysqli_real_escape_string($con,$_POST['Email']);
    $get_data = "SELECT * FROM rolebasedlogin WHERE email='$teacheremail'";
    $run_data = mysqli_query($con,$get_data);
    $i = 0;
        while($row = mysqli_fetch_array($run_data))
        {

            $sl = ++$i;
                                  $id = $row['email'];
                                  $Rolee = $row['Role'];
                                  $imagee = $row['aname'];
                                  $usernam = $row['username'];
                                  $adreees = $row['adress'];
                                  $Deptname = $row['DepartmentName'];
                                  $fname = $row['firstname'];
                                  $lname = $row['lastname'];
                                  $password = $row['password'];
                                  $dob = $row['dob'];
                                  $gender = $row['gender'];
      
                                  if($Rolee=="Teacher"){

                                  echo" <script>document.getElementById('deletefrm').style.display='none';</script>";
                              
                                  
                                  
?>


<div class="signup-form">
    <form action="" method="post">
		<h2>Delete Teacher</h2>
	
		<hr>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control"  name="firstname" placeholder="<?php echo $fname?>" ></div>
				<div class="col"><input type="text" class="form-control" name="lastname" placeholder="<?php echo $lname?>" ></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="<?php echo $usernam ?>" >
        </div>
       
        
        <div class="form-group">
      <select class="form-control" name="DepartmentName" >
      <option name="DepartmentName"><?php echo $Deptname ?></option>
      <option name="DepartmentName">BS Computer Science</option>
      <option name="DepartmentName">BS Artifical Intelligence</option>
      <option name="DepartmentName">BS Electrical Engineering</option>
      <option name="DepartmentName">BS Civil Engineering</option>
      <option name="DepartmentName">BS Electronics Engineering</option>
      <option name="DepartmentName">BS Mechanical Engineering</option>
      <option name="DepartmentName">BS Maths</option>
      <option name="DepartmentName">BS English</option>
    
    </select>  
    </div>  

        <div class="form-group">
        	<input type="email" class="form-control" name="email" value="<?php echo $id ?>"  placeholder="<?php echo $id ?>" >
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="adress" placeholder="<?php echo $adreees ?>" >
        </div>
         


              
    
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password : <?php echo $password ?>" >
        </div>
		
        <div class="form-group">
        <?php echo $imagee ?>
                       <input type="file" name="aname"  class="form-control">
                     </div>        
        <div class="form-group">
	
		</div>
		<div class="form-group">
            <button type="submit" name="Delete_btn" id="btnlg" class="btn btn-primary btn-lg">Delete Record</button>
        </div>
       
    </form>
	
</div>
<?php
}else if($Rolee=="Admin"){
    
    echo" <script>alert('Not Recognize as Teacher Email');</script>";  
                      
}
}
}

 ?>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="../dist/js/waves.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <script src="../dist/js/custom.min.js"></script>
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>

</body>
</html>




<?php } ?>