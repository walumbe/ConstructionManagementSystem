<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    
<?php include 'include/header.php'; ?>
<section class="payroll">
<div class="flex-payroll">
    <h3>Daily Payroll</h3>
    <input value="<?php echo date("l jS \of F Y"); ?>">
    Rate/Hr: <input type="number" name="rate">
    <button type="submit">Update</button>
</div>
</section>
<div class="table">
    <table>
        <tr>
            <th>Emp Id</th>
            <th>Name</th>
            <th>Time In</th>
            <th>Time Out</th>
            <th>Pay(ksh)</th>
            <th>Status</th>
        </tr>
        <?php
            include 'include/config.php';
            $payroll_sql = "SELECT identificationNumber, fullName, timeIn, time_out FROM user";
            $payroll_result = $conn->query($payroll_sql);
            $payroll_data = mysqli_fetch_array($payroll_result);
            // var_dump($payroll_data);

        ?>
        <tr>
            <td><?php echo $payroll_data['identificationNumber']; ?></td>
            <td><?php echo $payroll_data['fullName']; ?></td>
            <td><?php echo $payroll_data['timeIn']; ?></td>
            <td><?php echo $payroll_data['time_out']; ?></td>
            <td><?php echo $_POST['rate']; ?></td>
            <td><?php echo "Pending"; ?></td>
        </tr>
    </table>
</div>



</div>

<?php include 'include/footer.php'; ?>
    
</body>
</html>