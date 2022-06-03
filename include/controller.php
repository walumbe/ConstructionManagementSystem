<?php 
session_start();

include 'config.php';

$errors = []; 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// register user
if(isset($_POST["register_user"]))
{
    $fname = test_input($_POST["fname"]);
    $identificationNumber = test_input($_POST["identificationNumber"]);
    $department = test_input($_POST["department"]);
    $typeOfEmployee = test_input($_POST["typeOfEmployee"]);
   
    $user_check_query = "SELECT * FROM user WHERE identificationNumber='$identificationNumber' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) 
    { // if user exists
        if ($user['identificationNumber'] === $identificationNumber) {
            array_push($errors, "Username already exists");
            echo "<script>
                alert('Identification Number already exists');
            </script>";
        }
    }

    if(count($errors) == 0)
    {
        $query = "INSERT INTO user(fullName, identificationNumber, department, typeOfEmployee)
  			  VALUES('$fname', '$identificationNumber', '$department', '$typeOfEmployee')";
        if($conn->query($query) != TRUE)
        {
            var_dump("OOps. Could Not Register");
        }
    }

}


// LOGIN USER
if (isset($_POST['login_user'])) {
    $identificationNumber = test_input($_POST["identificationNumber"]);
    $_SESSION['id'] = $identificationNumber;
  
    if (count($errors) == 0) {
        $verify_query = "SELECT * FROM user WHERE identificationNumber='$identificationNumber' ";
        $results = mysqli_query($conn, $verify_query);
    }
}

$id = $_SESSION['id'];
//   save time in && time out
if(isset($_POST['save'])){ 
    $timeIn = $_POST['timeIn'];
    $timeOut = $_POST['time_out'];
    $insertTimeIn = date('Y-m-d H:i:s', strtotime($timeIn));
    $insertTimeOut = date('Y-m-d H:i:s', strtotime($timeOut));
    if(count($errors) == 0)
    {
        $timesql = "UPDATE user
                    SET timeIn = '$insertTimeIn',time_out = '$insertTimeOut' 
                    WHERE identificationNumber = $id";
        if($conn->query($timesql) != true)
        {
            var_dump("OOPs");
        }
    }
}