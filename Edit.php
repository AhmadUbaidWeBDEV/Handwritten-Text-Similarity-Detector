<?php
include('config.php');

$id = $_GET['Sys_id'];

//Fetching privious image to update
if(isset($_GET['Sys_id'])){
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM student_data WHERE Sys_id = $edit_id";
    $edit_query_run = mysqli_query($con, $edit_query);

    if(mysqli_num_rows($edit_query_run) > 0){
        
        $edit_row = mysqli_fetch_array($edit_query_run);
        $e_image = $edit_row['aname'];
    }
    else{
        // header('location: index.php');
        echo "Error1";
    }
}
else{
    // header("location: index.php");
    echo "Error2";
}


if(isset($_POST['submit']))
{

    $studentID = $_POST['student_id'];
    $studentName = $_POST['sname'];
    $studentRno  = $_POST['srno'];
    $DocumentType = $_POST['DocumentType'];

	$update = "UPDATE student_data SET student_id='$studentID', sname = '$studentName', srno = '$studentRno', DocumentType = '$DocumentType' WHERE Sys_id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:RecordManager.php');
	}else{
		echo "Data not update";


}

}

?>