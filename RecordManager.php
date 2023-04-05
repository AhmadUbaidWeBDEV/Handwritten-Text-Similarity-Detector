<?php
session_start();
include 'config.php';
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
                            if($Role=="Admin"){
                                                        
                              header("location:admin/admincode/MemberSignup.php");
                                            
                                                          } 
                              
?>



                    
<!doctype html>
<html lang="en">
  <head>
    <title>Record Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    
    <link href="css/theme.css" rel="stylesheet" media="all">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <style>

    

                    #text {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        font-size: 24px;
                        color: #fff;
                        transform: translate(-50%, -50%);
                        -ms-transform: translate(-50%, -50%)
                    }

                    

                    .instUpload {
                        font-size: 2em
                    }

                  
                    #fileName {
                        padding-top: 10px;
                        display: block
                    }

                    .main-prev-box {
                        float: center;
                        align-items: center;
                        position: relative;
                        margin: 0 auto;
                        height: 234px;
                        width: 180px;
                        padding: 10px;
                        border: 1px solid #e0e8ef;
                        border-radius: 5%;
                        display: none
                    }

                    .prev_box {
                        width: 100%
                    }

                    .prev_box img {
                        width: 100%
                    }
                </style>
  </head>
  <body>

      <div class="page-wrapper">
        
        <header class="header-desktop4">
            <div class="container">

                <div class="header4-wrap">
                    <div class="header__logo">
                        
                    <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                              <?php
echo "
<tr>
  
  <td class='text-left'><img src='uploads/$artwork1' width='1500px' height='150px' ></td>
 </tr>                        
";
                              ?>
                                </div>

                                <div class="content">
                                <a href="#"><?php echo $username1 ?></a>
                                </div>

                                <div style="margin-left:80%;" class="notifi-dropdown js-dropdown">
                                    <div class="info clearfix">
                                       <div class="content">
                                            <h5 class="name">
                                                <a href="#"></a>
                                            </h5>
                                            <span class="email">Login info: <?php echo $_SESSION['email']; ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i><?php echo $username1 ?></a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>

                            </div>
                        </div>


                      
                    </div>
                    <div class="header__tool">


                        
                        <a href="#">
                            <img style="width:120px;height:120;" src="FypLogo.png" alt="CoolAdmin" />
                        </a>

                    </div>
                </div>
            </div>
        </header>
        <div class="mt-5 mr-3 overview-wrap mt-3">
                                    <h2 class="title-1"></h2>
                                     <a  href="AddRecord.php" class="au-btn au-btn-icon au-btn--green" >
                                        <i class="zmdi zmdi-plus"></i>New Similarity Record</a>
                                </div>
        <div class="jumboton px-2">
        
            <div id="tble" class="mt-5 col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table  table-striped table-earning" id="myTable">
                    <thead>
                    <tr>
                                    <th class='text-center' scope='col'>Edit</th>
                                    <th class='text-center' scope='col'>Record ID</th>
                                    <th class='text-center' scope='col'>Student Image</th>
                                    <th class='text-center' scope='col'>Student ID</th>
                                    <th class='text-center' scope='col'>Student Name</th>
                                    <th class='text-center' scope='col'>Roll no</th>
                                    <th class='text-center' scope='col'>Document</th>
                                    <th class='text-center' scope='col'>Similariy</th>
                                    <th class='text-center' scope='col'>Teaching Document</th>
                                    <th class='text-center' scope='col'>Student Document</th>
                                    <th class='text-center' scope='col'>Record code</th>
                                    <th class='text-center' scope='col'>Checking Date</th>
                                    <th class='text-center' scope='col'>Checked By</th>
                                  </tr>

                    </thead>
                    <tbody>
                    <?php 
                     
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
                                  
                                 if($emailofmember==$Examiner){ 
                                  
                                  echo "

                                  <tr>

                                  <td class='text-center'>
                                  <span>
                                  <a href='#' class='btn btn-warning mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='Edit'><i class='fa fa-pencil-square-o fa-lg'></i></a>
                                      
                                      
                                  </span>
                                  
                                </td>
                            
                                    <td class='text-center'>$id</td>
                                    <td class='text-center'><img src='uploads/$Image'  style='width:130px; height:100px; border-radius: 5px'></td>
                                    
                                    
                                    <td class='text-center'> $studentID</td>
                                    <td class='text-center'>$sname</td>
                                    <td class='text-center'>$studentRno</td>
                                    <td class='text-center'>$DocumentType</td>


                                    <td class='text-center'>$Similarity %</td>
                                    <td><textarea style='width:500px;height:100px;' readonly>$SourceData</textarea></td>
                                    <td><textarea style='width:500px;height:100px;' readonly>$TargetData</textarea></td>
                                    
                                    <td class='text-center'> $SystemID</td>
                                    <td class='text-center'> $rdate</td>
                                    <td class='text-center'> $Examiner</td>
                                    
                                  </tr>                                 
                             ";
                                 }
                            }
                           ?>   
</tbody>
    </table>
</div>
</div>
            
<?php

$get_data = "SELECT * FROM student_data";
$run_data = mysqli_query($con, $get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['Sys_id'];
	echo "
<div id='delete$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>
    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
      <h4 class='modal-title text-center'>Are you want to sure?</h4>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body text-center'>
        <a href='delete.php?Sys_id=$id' class='btn btn-danger'>Delete</a>
      </div>
      
    </div>
  </div>
</div>
	";
	
}


//Edit data modal 

$get_data = "SELECT * FROM student_data";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	  $id = $row['Sys_id'];
    $sname = $row['sname'];
    $sid = $row['student_id'];
    $srno = $row['srno'];
    $aname = $row['DocumentType'];
    $artwork = $row['StudentImage'];
	echo "
      <div id='edit$id' class='modal fade' role='dialog'>
        <div class='modal-dialog'>
          <!-- Modal content-->
          <div class='modal-content'>
            <div class='modal-header'>
            <h4 class='modal-title text-center'>Edit Student Data</h4> 
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <div class='modal-body'>
              <form action='Edit.php?Sys_id=$id' method='post' enctype='multipart/form-data'>

                <div class='form-group'>
                <label for='songName'>Student Name</label>
                <input type='text' class='form-control' name='sname' value='$sname' required>
                </div>

                <div class='form-group'>
                <label for='songName'>Student Rollno</label>
                <input type='text' class='form-control' name='srno' value='$srno' required>
                </div>
                
                <div class='form-group'>
                <label for='songName'>Student ID</label>
                <input type='text' class='form-control' name='student_id' value='$sid' required>
                </div>
           
                <div class='form-group'>
                              <label for='inputState'>Document</label>
                              <select id='inputState' name='DocumentType' class='form-control'>
                              <option>Quiz</option>
                              <option>Assignmet</option>
                              <option>others</option>
                              </select>
                    
                </div>
                      
                <div class='form-group'>
                  <label>Student Image</label>
                  <input type='file' name='image' class='form-control'>
                  <img src = 'uploads/$artwork' style='width:50px; height:50px'>
                </div>
                      
                <div class='modal-footer'>
                  <input type='submit' name='submit' class='btn btn-info btn-large' value='Submit'>
                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
	    ";
}
?>
      
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 
    <script src="vendor/jquery-3.2.1.min.js"></script>
 
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
 <script>
  function frombtnon(){
    document.getElementById("sbmtrec").style.display = 'block';
  }
  function frombtnoff(){
    document.getElementById("sbmtrec").style.display = 'none';
    document.getElementById("tble").style.display = 'none';
    document.getElementById("stufrm").style.display = 'block';
  }
    function showform(){
      document.getElementById("newrec").style.display = 'none';
      document.getElementById("stufrm").style.display = 'block';
      document.getElementById("tble").style.display = 'none';
      
    }
  </script>
    <script src="js/main.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   
  </body>
</html>




<?php

}
?>