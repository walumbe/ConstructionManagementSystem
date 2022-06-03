<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
include 'include/controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    
<?php include 'include/header.php'; ?>
    <section class="registration">
        <div class="flex-registration">
                <form action="index.php" method="POST">
                <fieldset>
                <legend>Registration of Employee:</legend>
                <div class="form-group">
                    <label for="fname">Full Name:</label>
                    <input type="text" name="fname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="identificationNumber">Identification Number:</label>
                    <input type="number"  class="form-control" name="identificationNumber" required>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" id="department" class="form-control" name="department" required>  
                </div>
                <div class="form-group">
                    <label for="department">Type of Employee:</label>
                    <input type="text" class="form-control" name="typeOfEmployee" required>
                </div>
                <button type="submit" class="btn btn-primary" name ="register_user">Register</button>
                </fieldset>
                </form>


                <form action="index.php" method="POST">
                <fieldset>
                <legend>Employee Checkin:</legend>
                <div class="form-group">
                    <label for="identificationNumber">Identification Number:</label>
                    <input type="number" value="<?php echo $identificationNumber; ?>" id="identificationNumber" class="form-control" name="identificationNumber" required>
                </div>
                
                <button type="submit" class="btn btn-primary"  name="login_user">Verify</button>
                <div class="form-group">
                    <label for="report">Verification Report</label>
                    <?php 
                    $identificationNumber = $_SESSION['id'];
                    $verify_query = "SELECT * FROM user WHERE identificationNumber='$identificationNumber' ";
                    $results = mysqli_query($conn, $verify_query);
                    if (mysqli_num_rows($results) == 1) {

                    ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Employee Found.</strong>
                    </div>
                    <?php
                    }else {
                    ?>
                        <div class="danger">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                            <strong>Employee Not Found.</strong>
                        </div>  
                    <?php
                    }
                    ?>
                </div>
                </fieldset>
                </form>
                <form action="index.php" method="post">
                <fieldset>
                <legend>Employee Checkout:</legend>
                
                <h3>Date: <?php echo date("l jS \of F Y "); ?></h3>
                <div class="form-group">
                <label for="timein">Time In</label>
                <input type="datetime-local" name="timeIn" value="<?php echo $timeIn; ?>" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="time_out">Time Out</label>
                <input type="datetime-local" name="time_out" value= "<?php echo $timeOut; ?>" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary" name ="save">Save</button>
                </fieldset>
                </form>
        </div>

    </section>
</div>

<?php include 'include/footer.php'; ?>
    
</body>
</html>