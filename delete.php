<?php

include('config.php');
$id = $_GET['Sys_id'];
$delete = "DELETE FROM student_data WHERE Sys_id= $id";
$run_data = mysqli_query($con, $delete);

if($run_data){
	header('location:RecordManager.php');
}else{
	echo "Donot Delete";
}


?>