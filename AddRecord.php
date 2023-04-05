<?php
session_start();
include 'config.php';

function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}

//If I want a 4-digit PIN code.
$pin = generatePIN();


if(($_SESSION['email'])==null){
header("location:index.php");

}else{ 
    $imgepath=$_SESSION['email'];
    $sql="SELECT * FROM rolebasedlogin WHERE email='$imgepath'";
$run_data=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_data))
                                {
                                
                                  $artwork = $row['aname'];
                                  $username = $row['username'];

                                  
                            }


                                
                                





?>



                    
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
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
  
  <td class='text-left'><img src='uploads/$artwork' width='150px' height='150px' ></td>
 </tr>                        
";

                              ?>
                                </div>

                                <div class="content">
                                <a href="#"><?php echo $username ?></a>
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
                                                <i class="zmdi zmdi-account"></i><?php echo $username ?></a>
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


                        <div class="header-button-item  js-item-menu">
                            <i class="zmdi "></i>
                            <div class="account-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Tools </p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-image"></i>
                                    </div>
                                    <div class="content">
                                        <p>Image to Text</p>
                                        
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>Similarity Between Raw Text</p>
                                       
                                    </div>
                                </div>
                               
                             
                            </div>
                        </div>
                        <a href="#">
                            <img style="width:120px;height:120;" src="FypLogo.png" alt="CoolAdmin" />
                        </a>

                    </div>
                </div>
            </div>
        </header>

        <div class="row">
            <div  id="stufrm" class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Create New Similarity Record</h5>
                  <hr>
                  <form action="Sourcepage.php">
                  <div class="form-group">
                        <label for="formGroupExampleInput2">Record Code</label>
                        <input type="text" name="SystemID" class="form-control" placeholder="<?php echo $pin ?>" value="<?php echo $pin ?>" readonly/>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Student Name</label>
                        <input type="text" name="sname" class="form-control" placeholder="Enter Student Name" required/>
                      </div>
                      
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Student Rollno</label>
                        <input type="text" name="srno" class="form-control" placeholder="Enter Student Rollno" required/>
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Student ID</label>
                        <input type="text" name="student_id" class="form-control" placeholder="Enter Student ID" required/>
                      </div>
                     
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Student Picture</label>
                        <input type="file" name="StudentImage" class="form-control" required/>
                      </div>
 
                      <div class="form-row">
                        <div class="col-md-8">
                          
                            <label for="inputState">Document</label>
                            <select id="inputState" name="DocumentType" class="form-control">
                              <option >Quiz</option>
                              <option >Assignmet</option>
                              <option >others</option>
                              
                            </select>
                      
                        </div>
                        
                      </div>
                      <br>
                    
                   <button  type="submit" name="submit" class="btn btn-primary" value="Submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
 
    
</script>
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
    <script src="js/main.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  </body>
</html>
<?php

}
?>