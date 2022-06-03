<?php
// include 'include/config.php';

// $available_water_sql = "SELECT amount_available FROM water_stock";
// $available_brick_sql = "SELECT amount_available FROM brick_stock";
// $available_cement_sql = "SELECT amount_available FROM cement_stock";

// $available_cement_result = $conn->query($available_cement_sql);
// $available_brick_result = $conn->query($available_brick_sql);
// $available_water_result = $conn->query($available_water_sql);

// $used_cement_sql = "SELECT amount_used FROM cement_stock";
// $used_water_sql = "SELECT amount_used FROM water_stock";
// $used_brick_sql = "SELECT amount_used FROM brick_stock";

// $used_cement_result = $conn->query($used_cement_sql);
// $used_brick_result = $conn->query($used_brick_sql);
// $used_water_result = $conn->query($used_water_sql);


// $registered_cement_sql = "SELECT amount_registered FROM cement_stock";
// $registered_water_sql = "SELECT amount_registered FROM water_stock";
// $registered_brick_sql = "SELECT amount_registered FROM brick_stock";

// $registered_cement_result = $conn->query($registered_cement_sql);
// $registered_brick_result = $conn->query($registered_brick_sql);
// $registered_water_result = $conn->query($registered_water_sql);



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
    <section class="registration">
        <div class="flex-registration">
                <form action="index.php" class="">
                <fieldset>
                <legend>Cement:</legend>
                <div class="form-group">
                    <label for="brick">Amount Registered(kgs)</label>
                    <?php 
                        if ($registered_cement_result->num_rows > 0) {
                        // output data of each row
                            while($row = $registered_cement_result->fetch_assoc()) {
                            
                    ?>
                    <input type="number" id="cement_registered" value="<?php # echo $row['amount_registered']; ?>" class="form-control">
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="water">Amount Used</label>
                    <?php 
                        // if ($used_cement_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $used_cement_result->fetch_assoc()) {
                            
                    ?>
                    <input type="number" id="cement_used" value="<?php # echo $row['amount_used']; ?>" class="form-control">
                    <?php
                    //     }
                    // }
                    ?>
                    <button id="save_cement" class="btn">Save</button>
                </div>
                
                    <label for="brick">Amount available</label>
                    <?php 
                        // if ($available_cement_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $available_cement_result->fetch_assoc()) {
                        //         echo $row['amount_available']." kgs";
                        //     }
                        // }
                    ?>
                </fieldset>
                </form>


                <form action="" class="">
                <fieldset>
                <legend>Water:</legend>
                <div class="form-group">
                    <label for="water">Amount Registered(in litres)</label>
                    <?php 
                        // if ($registered_water_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $registered_water_result->fetch_assoc()) {
                            
                    ?>
                    <input type="number" id="water_registered" value="<?php # echo $row['amount_registered']; ?>" class="form-control">
                    <?php
                    //     }
                    // }
                    ?>
                </div>
                <div class="form-group">
                    <label for="water">Amount Used</label>
                    <?php 
                        // if ($used_water_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $used_water_result->fetch_assoc()) {
                            
                    ?>
                    <input type="number" id="water_used" value="<?php # echo $row['amount_used']; ?>" class="form-control">
                    <?php
                    //     }
                    // }
                    ?>
                    <button id="save_water" class="btn">Save</button>
                </div>
                <label for="water">Available Quantity</label>
                <?php 
                        // if ($available_water_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $available_water_result->fetch_assoc()) {
                        //         echo $row['amount_available']. "litres";
                        //     }
                        // }
                    ?>

                </fieldset>
                </form>
                <form >
                <fieldset>
                <legend>Brick:</legend>
    
                <div class="form-group">
                    <label for="brick">Amount Registered(pieces)</label>
                    <?php 
                        // if ($registered_brick_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $registered_brick_result->fetch_assoc()) {
                            
                    ?>
                    <input type="number" id="brick_registered" value="<?php # echo $row['amount_registered']; ?>" class="form-control">
                    <?php
                    //     }
                    // }
                    ?>
                </div>
                <div class="form-group">
                    <label for="brick">Amount used(pieces)</label>
                    <?php 
                        // if ($used_brick_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $used_brick_result->fetch_assoc()) {
                            
                    ?>
                    <input type="number" id="brick_used" value="<?php # echo $row['amount_used']; ?>" class="form-control">
                    <?php
                    //     }
                    // }
                    ?>
                    <button id="save_brick" class="btn">Save</button>
                </div>
                <label for="Brick">Available Quantity</label>
                <?php 
                        // if ($available_brick_result->num_rows > 0) {
                        // // output data of each row
                        //     while($row = $available_brick_result->fetch_assoc()) {
                        //         echo $row['amount_available']." pieces";
                        //     }
                        // }
                ?>
                
                </fieldset>
                </form>
        </div>

    </section>
</div>

<?php include 'include/footer.php'; ?>

<script>
     $('#save_cement').click(function() {
        $cement_registered = $('#cement_registered').val();
        $cement_used = $('#cement_used').val();

        $.ajax({url:"insert_cement.php",
        method: "POST",
        data: {amount_registered:$cement_registered, amount_used:$cement_used},
        success: function(dataabc ){
            window.location.href = "stock.php";
        }});
    });

    $('#save_water').click(function() {
        $water_registered = $('#water_registered').val();
        $water_used = $('#water_used').val();

        $.ajax({url:"insert_water.php",
        method: "POST",
        data: {amount_registered:$water_registered, amount_used:$water_used},
        success: function(dataabc ){
            window.location.href = "stock.php";
        }});
    });

    $('#save_brick').click(function() {
        $bick_registered = $('#brick_registered').val();
        $brick_used = $('#brick_used').val();


        // $.ajax({url:"insert_brick.php",
        // method: "POST",
        // data: {amount_registered:$brick_registered, amount_used:$brick_used},
        // success: function(dataabc ){
            // window.location.href = "stock.php";
        // }});
    });
</script>
    
</body>
</html>