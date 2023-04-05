<?php
session_start();
include 'config.php';

if($_GET['dat1again']==null){
   
    header("Location: Sourcepage.php");
    exit();
    
}

if($_GET['dat2']==null){
   
    header("Location: Targetpage.php");
    exit();
    
}

include_once('./lib/class.comparetext.php');
$textCompare = new TextCompare;
$text_1 = $_GET['dat1again'];
$text_2 = $_GET['dat2'];
$studentID = $_GET['student_id'];
$SystemID = $_GET['SystemID'];
$studentName = $_GET['sname'];
$checkingDate = $_GET['rdate'];
$studentRno  = $_GET['srno'];
$DocumentType = $_GET['DocumentType'];
$image = $_GET['StudentImage'];
$imgepath =$_GET['Examiner'];
echo "
<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	

	
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>

	
	<link type='text/css' rel='stylesheet' href='css/bootstrap.min.css' />

	
		  <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
		  <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
		

</head>

<body>

	<h2 style='text-align:center;margin-top:5%;'>Similarity Report</h2>

	
			<div style='margin-left:10%;margin-right: 10%;margin-top: 5%;'>
			        
					<div class='col-12 mt-5'>
					
							<form>
								<div class='row'>
									<div class='col-sm-4'>
										<div class='form-group'>
											
											<img src='./uploads/$image' style='width:150px ;height:150px; border-radius:8px;'>
										</div>
									</div>
									<div class='col-sm-4'>
										<div class='form-group'>
											<span class='form-label'>Record Code</span>
											
											<input class='form-control' type='text' placeholder='$SystemID' readonly/>
										</div>
									</div>
									<div class='col-sm-4'>
										<div class='form-group'>
											<span class='form-label'>Checked By</span>
											
											<input class='form-control' type='text' placeholder='$imgepath' readonly/>
										</div>
									</div>
								</div>
								<div class='row'>
									<div class='col-sm-4'>
										<div class='form-group'>
											<span class='form-label'>Student ID</span>
											
											<input class='form-control' type='text' placeholder='$studentID' readonly/>
										</div>
									</div>
									<div class='col-sm-4'>
										<div class='form-group'>
											<span class='form-label'>Student Name</span>
											
											<input class='form-control' type='text' placeholder='$studentName' readonly/>
										</div>
									</div>
									<div class='col-sm-4'>
										<div class='form-group'>
											<span class='form-label'>Student Rollno</span>
											
											<input class='form-control' type='text' placeholder='$studentRno' readonly/>
										</div>
									</div>
								</div>
								<div class='row'>
									<div class='col-sm-4'>
										<div class='form-group'>
											<span class='form-label'>Document Type</span>
											<input class='form-control' type='text' placeholder='$DocumentType' readonly/>
										</div>
									</div>
									<div class='col-sm-4'>
										<div class='form-group'>
											<span class='form-label'>Checking Date</span>
											<input class='form-control' type='text' placeholder='$checkingDate' readonly/>
										</div>
									</div>
								</div>								
							</form>
						</div>
				</div>
		
	</div>
</body>

</html>
";


$textCompare->compareText($text_1, $text_2, 60, TRUE ,$SystemID,$studentID,$studentName,$checkingDate,$studentRno,$DocumentType,$image,$imgepath);
echo "<button onClick='window.print();' type='button' class='btn btn-warning mt-5' style='margin-left:38%;'>Genrate Report</button>";
echo "<a href='RecordManager.php'><button type='button' class='btn btn-success mt-5' style='margin-left:10%;'>Home Page</button></a>";
?>