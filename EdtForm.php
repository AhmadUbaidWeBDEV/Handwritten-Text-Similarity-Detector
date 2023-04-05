<?php
$get_data = "SELECT * FROM rolebasedlogin";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	  

    $id = $row['email'];
    $image = $row['aname'];
    $Deptname = $row['DepartmentName'];
    $fname = $row['firstname'];
    $lname = $row['lastname'];
    $password = $row['password'];
    $dob = $row['dob'];

	echo "
      <div id='edit$id' class='modal fade' role='dialog'>
        <div class='modal-dialog'>
          <!-- Modal content-->
          <div class='modal-content'>
            <div class='modal-header'>
            <h4 class='modal-title text-center'>Edit  Data</h4> 
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <div class='modal-body'>
              <form action='Edit.php?email=$id' method='post' enctype='multipart/form-data'>

                <div class='form-group'>
                <label for='email'>Email</label>
                <input type='text' class='form-control' name='sname' value='$fname' required>
                </div>
                <div class='form-group'>
                <label for='email'>Email</label>
                <input type='text' class='form-control' name='sname' value='$lname' required>
                </div>
                <div class='form-group'>
                <label for='songName'>Student Rollno</label>
                <input type='text' class='form-control' name='srno' value='$password' required>
                </div>
                
                <div class='form-group'>
                <label for='songName'>Student ID</label>
                <input type='text' class='form-control' name='student_id' value='$dob' required>
                </div>
           
                <div class='form-group'>
                              <label for='inputState'>Document</label>
                              <select id='inputState' name='DocumentType' class='form-control'>
                              <option >BS Computer Science</option>
                              <option >BS Artifical Intelligence</option>
                              <option >BS Electrical Engineering</option>
                              <option >BS Civil Engineering</option>
                              <option >BS Electronics Engineering</option>
                              <option >BS Mechanical Engineering</option>
                              <option >BS Maths</option>
                              <option >BS English</option>
                              </select>
                    
                </div>
                      
                <div class='form-group'>
                  <label>Student Image</label>
                  <input type='file' name='image' class='form-control'>
                  <img src = 'uploads/$image' style='width:50px; height:50px'>
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