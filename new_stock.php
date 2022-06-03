<?php
include 'include/config.php';

$cement_available_sql = "SELECT * FROM cement_stock";
$cement_result = $conn->query($cement_available_sql);
$cement_data = mysqli_fetch_array($cement_result);

$water_available_sql = "SELECT * FROM water_stock";
$water_result = $conn->query($water_available_sql);
$water_data = mysqli_fetch_array($water_result);

$brick_available_sql = "SELECT * FROM brick_stock";
$brick_result = $conn->query($brick_available_sql);
$brick_data = mysqli_fetch_array($brick_result);

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
                <form >
                <fieldset>
                <legend>Cement:</legend>
                <div class="form-group">
                    <label for="brick">Amount Registered(kgs)</label>
                    <input type="number" id="cement_registered" value="<?php  echo $cement_data['amount_registered']; ?>" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label for="water">Amount Used</label>
                    <input type="number" id="cement_used" value="<?php echo $cement_data['amount_used']; ?>" class="form-control">
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
                    <input type="number" id="water_registered" value="<?php  echo $water_data['amount_registered']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="water">Amount Used</label>
                    <input type="number" id="water_used" value="<?php echo $water_data['amount_used']; ?>" class="form-control">
                    <button id="save_water" class="btn">Save</button>
                </div>
                <label for="water">Available Quantity</label>
                <?php echo $water_data['amount_available']; ?>
                </fieldset>
                </form>
                <form >
                <fieldset>
                <legend>Brick:</legend>
    
                <div class="form-group">
                    <label for="brick">Amount Registered(pieces)</label>
                    <input type="number" id="brick_registered" value="<?php echo $brick_data['amount_registered']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="brick">Amount used(pieces)</label>
                    <input type="number" id="brick_used" value="<?php echo $brick_data['amount_used'] ?>" class="form-control">
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


    console.log($cement_registered);
    console.log($cement_used);

    $.ajax({url:"insert_cement.php",
    method:"POST",
    data:{cement_registered:$cement_registered,cement_used:$cement_used},
    success:function(dataabc){
    // window.location.href="index.php";
    }});

    });

    $('#save_water').click(function () {

    $water_registered = $('#water_registered').val();
    $water_used = $("#water_used").val();


    console.log($water_registered);
    console.log($water_used);

    $.ajax({url:"insert_water.php",
    method:"POST",
    data:{water_registered:$water_registered,water_used:$water_used},
    success:function(dataabc){
    // window.location.href="index.php";
    }});

    });


    $('#save_brick').click(function () {

    $brick_registered = $('#brick_registered').val();
    $brick_used = $("#brick_used").val();


    console.log($brick_registered);
    console.log($brick_used);

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