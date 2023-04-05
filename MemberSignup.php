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
      <div class="page-wrapper">
        
       

        <div class="jumboton px-2">
        
            <div id="tble" class="mt-5 col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table  table-striped table-earning" id="myTable">
                    <thead>
                    <tr>
                                   
                                    <th class='text-center' scope='col'>Record ID</th>
                                    <th class='text-center' scope='col'>Student Image</th>
                                    <th class='text-center' scope='col'>Student ID</th>
                                    <th class='text-center' scope='col'>Student Name</th>
                                    <th class='text-center' scope='col'>Roll no</th>
                                    <th class='text-center' scope='col'>Document</th>
                                    <th class='text-center' scope='col'>Similariy</th>
                                    <th class='text-center' scope='col'>Checked By</th>
                                    <th class='text-center' scope='col'>Checking Date</th>
                                    <th class='text-center' scope='col'>Record code</th>
                                    <th class='text-center' scope='col'>Teaching Document</th>
                                    <th class='text-center' scope='col'>Student Document</th>
   
                                  </tr>

                    </thead>
                    <tbody>
                    <?php 
                        //fetching data from database
                            $get_data = "SELECT * FROM student_data order by 1 desc";
                            $run_data = mysqli_query($con,$get_data);
                            $i = 0;
                                while($row = mysqli_fetch_array($run_data))
                                {
                                  $sl = ++$i;
                                  $id = $row['Sys_id'];
                                  $SystemID = $row['SystemID'];
                                  $studentID = $row['student_id'];
                                  $sname = $row['sname'];
                                  $rdate = $row['rdate'];
                                  $studentRno  = $row['srno'];
                                  $DocumentType = $row['DocumentType'];
                                  $Image = $row['StudentImage'];
                                  $SourceData = $row['SourceText'];
                                  $TargetData = $row['TargetText'];
                                  $Similarity = $row['SimilarityRatio'];
                                  $Examiner = $row['Examiner'];
                                  
                                  
                                  echo "

                                  <tr>

                                 
                            
                                    <td class='text-center'>$id</td>
                                    <td class='text-center'><img src='http://localhost/dashboard/SimilarityDetector/uploads/$Image'  style='width:130px; height:100px; border-radius: 5px'></td>
                                    
                                    
                                    <td class='text-center'> $studentID</td>
                                    <td class='text-center'>$sname</td>
                                    <td class='text-center'>$studentRno</td>
                                    <td class='text-center'>$DocumentType</td>


                                    <td class='text-center'>$Similarity %</td>
                                    <td class='text-center'> $Examiner</td>
                                    <td class='text-center'> $rdate</td>
                                    <td class='text-center'> $SystemID</td>
                                    
                                    <td><textarea style='width:500px;height:100px;' readonly>$SourceData</textarea></td>
                                    <td><textarea style='width:500px;height:100px;' readonly>$TargetData</textarea></td>
                                    
                                    
                                    
                                    
                                  </tr>                                 
                             ";
                            }
                           ?>   

                        </tbody>
    </table>
</div>
</div>
            
  
      
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>
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
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
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