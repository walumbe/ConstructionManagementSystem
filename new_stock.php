<?php
include 'include/config.php';

if(isset($_POST['save_cement'])){
    $cement_id = $_GET['edit_id'];
}
$sql = "SELECT * FROM cement_stock WHERE id='".$cement_id."'";
$cement_edit_result = mysqli_query($conn,$sql);
$data=mysqli_fetch_array($cement_edit_result);

$cement_available_sql = "SELECT (amount_registered - amount_used) AS amount_available FROM cement_stock ORDER BY id DESC LIMIT 1;";
$cement_result = $conn->query($cement_available_sql);
$cement_data = mysqli_fetch_array($cement_result);

$water_available_sql = "SELECT (amount_registered - amount_used) AS amount_available FROM water_stock ORDER BY id DESC LIMIT 1;";
$water_result = $conn->query($water_available_sql);
$water_data = mysqli_fetch_array($water_result);

$brick_available_sql = "SELECT (amount_registered - amount_used) AS amount_available FROM brick_stock ORDER BY id DESC LIMIT 1;";
$brick_result = $conn->query($brick_available_sql);
$brick_data = mysqli_fetch_array($brick_result);

// cement registered 
$registered_cement_sql = "SELECT amount_registered FROM cement_stock ORDER BY id DESC";
$registered_cement_result = $conn->query($registered_cement_sql);
$registered_cement = mysqli_fetch_array($registered_cement_result);

// cement used
$used_cement_sql = "SELECT amount_used FROM cement_stock ORDER BY id DESC";
$used_cement_result = $conn->query($used_cement_sql);
$used_cement = mysqli_fetch_array($used_cement_result);

// water registered
$registered_water_sql = "SELECT amount_registered FROM water_stock ORDER BY id DESC";
$registered_water_result = $conn->query($registered_water_sql);
$registered_water = mysqli_fetch_array($registered_water_result);

// water used
$used_water_sql = "SELECT amount_used FROM water_stock ORDER BY id DESC";
$used_water_result = $conn->query($used_water_sql);
$used_water = mysqli_fetch_array($used_water_result);

// Brick Registered
$registered_brick_sql = "SELECT amount_registered FROM brick_stock ORDER BY id DESC";
$registered_brick_result = $conn->query($registered_brick_sql);
$registered_brick = mysqli_fetch_array($registered_brick_result);

// Brick used
$used_brick_sql = "SELECT amount_used FROM brick_stock ORDER BY id DESC";
$used_brick_result = $conn->query($used_brick_sql);
$used_brick = mysqli_fetch_array($used_brick_result);

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
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</head>
<body>
<div class="container">
    
<?php include 'include/header.php'; ?>
    <section class="registration">
        <div class="flex-registration">
                <form method="POST">
                <fieldset>
                <legend>Cement:</legend>
                <div class="form-group">
                <input type="hidden" id="cement_postid" value="<?php echo $_GET['edit_id'];?>">
                    <label for="brick">Amount Registered(kgs)</label>
                    <input type="number" name="cement_registered" id="cement_registered" value="<?php echo $registered_cement['amount_registered']; ?>" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label for="water">Amount Used</label>
                    <input type="number" id="cement_used" value="<?php echo $used_cement['amount_used']; ?>" class="form-control">
                    <button id="save_cement" class="btn">Save</button>
                </div>
                    <label for="brick">Available Quantity</label>
                    <?php echo $cement_data['amount_available']; ?>
                </fieldset>
                </form>


                <form action="" class="">
                <fieldset>
                <legend>Water:</legend>
                <div class="form-group">
                    <label for="water">Amount Registered(in litres)</label>
                    <input type="number" id="water_registered" value="<?php  echo $registered_water["amount_registered"]; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="water">Amount Used</label>
                    <input type="number" id="water_used" value="<?php echo $used_water['amount_used']; ?>" class="form-control">
                    <button id="save_water" class="btn">Save</button>
                </div>
                <label for="water">Available Quantity</label>
                <?php echo $water_data['amount_available']; ?>
                </fieldset>
                </form>
                <form method="POST">
                <fieldset>
                <legend>Brick:</legend>
    
                <div class="form-group">
                    <label for="brick">Amount Registered(pieces)</label>
                    <input type="number" id="brick_registered" name="brick_registered" value="<?php echo $registered_brick['amount_registered'];?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="brick">Amount used(pieces)</label>
                    <input type="number" id="brick_used" value="<?php echo $used_brick['amount_used'] ?>" class="form-control">
                    <button type="submit" id="save_brick" onsubmit="return false" class="btn">Save</button>
                </div>
                <label for="Brick">Available Quantity</label>
                <?php echo $brick_data['amount_available']; ?>
                </fieldset>
                </form>
        </div>

    </section>
    <section>
        <h1 style="margin-left: 10%; margin-top: 2.4rem">Notifications</h1>
        <div class="notifications">
        <div>
            <?php 
                if($cement_data['amount_available'] > 0)
                {
                    echo "<h2> Cement available</h2>";
                }else {
                    echo "<h2> Cement out of stock!</h2>";
                }
            ?>
        </div>
        <div>
            <?php
                if($water_data['amount_available'] > 0)
                {
                    echo "<h2> Water available</h2>";
                }else {
                    echo "<h2> Water out of stock!</h2>";
                }
            ?>
        </div>
        <div>
            <?php
                if($brick_data['amount_available'] > 0)
                {
                    echo "<h2> Bricks available</h2>";
                }else {
                    echo "<h2> Bricks out of stock!</h2>";
                }
            ?>
        </div>
    </section>
</div>

<?php include 'include/footer.php'; ?>

<script>
    $('#save_cement').click(function () {

    $cement_registered = $('#cement_registered').val();
    $cement_used = $("#cement_used").val();
    $id=$("#cement_postid").val();

    $.ajax({url:"insert_cement.php",
    method:"POST",
    data:{cement_registered:$cement_registered,cement_used:$cement_used},
    success:function(response){
        // console.log(response);
    }});

    });

    $('#save_water').click(function () {

    $water_registered = $('#water_registered').val();
    $water_used = $("#water_used").val();


    $.ajax({url:"insert_water.php",
    method:"POST",
    data:{water_registered:$water_registered,water_used:$water_used},
    success:function(data){
        // $("#water_registered").val(data);
        // $("#water_used").val(data);
        
    // window.location.href="index.php";
    }});

    });


    $('#save_brick').click(function () {

    $brick_registered = $('#brick_registered').val();
    $brick_used = $("#brick_used").val();


    $.ajax({url:"insert_brick.php",
    method:"POST",
    data:{brick_registered:$brick_registered,brick_used:$brick_used},
    // success:function(dataabc){
    // window.location.href="index.php";
    // }
    });


    });
</script>
    
</body>
</html>