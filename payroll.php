<?php
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
$pay = [];
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
    <form action="" method="POST">
        Rate/Hr: <input type="number" name="rate" value="<?php echo isset($_POST['rate']) ?? ''; ?>">
        <button type="submit" name="update">Update</button>
    </form>
    
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
            $payroll_sql = "SELECT identificationNumber, fullName, timeIn, time_out FROM user ORDER BY id DESC";
            $payroll_result = $conn->query($payroll_sql);
            $payroll_data = mysqli_fetch_array($payroll_result, MYSQLI_ASSOC);


            $diff = strtotime($payroll_data['time_out']) - strtotime($payroll_data['timeIn']);
            $hours = $diff / (60 * 60);

        ?>

        <?php
        for($i = 0; $i < count($payroll_data); $i++) {

        echo "<tr>";
            echo "<td>";
            echo $payroll_data['identificationNumber']; 
            echo "</td>";
            echo "<td>"; echo $payroll_data['fullName']; echo "</td>";
            echo "<td>"; echo $payroll_data['timeIn']; echo "</td>";
            echo "<td>"; echo $payroll_data['time_out']; echo "</td>";
            echo "<td>"; 
            if(isset($_POST['update']))
            {
                $rate = $_POST['rate'];
                $pay =  round($rate * $hours);
                echo $pay;
            }else 
            {
                $fetch_pay_sql = "SELECT pay FROM pay ORDER BY id DESC LIMIT 1";
                $fetch_result = $conn->query($fetch_pay_sql);
                $payroll_pay = mysqli_fetch_array($fetch_result);
                echo $payroll_pay['pay'];
            }
            echo "</td>";
            echo "<td>"; echo "Pending"; echo "</td>";
        echo "</tr>";

       break;
        }
        $insert_sql = "INSERT INTO pay(pay) VALUES('".$pay."')";
        $conn->query($insert_sql);

        
        ?>
    </table>
</div>



</div>

<?php include 'include/footer.php'; ?>
    
</body>
</html>