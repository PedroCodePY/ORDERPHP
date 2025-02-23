<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/IndexStyle.css">
    <title>Order</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "pos_app");
    $query = "SELECT * FROM menupos";
    $sql_run = mysqli_query($conn, $query);
    ?>
    <div class="main">
        <div class="sticky-top">
            <h3>Hi, What would you like to buy?</h3>
        </div>
        <div class="menu">
            <?php
            if (mysqli_num_rows($sql_run) > 0) {
                foreach ($sql_run as $row) {
            ?>
                    <div class="card">
                        <img src=<?php echo $row['Image'] ?> class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['Name'] ?></h5>
                            <p class="card-text"><?php echo $row['Rate'] ?>&#11088;</p>
                            <?php
                            $price = number_format($row['Price']);
                            $rupiah = "Rp $price";
                            ?>
                            <a href="#" class="btn btn-primary"><?php echo $rupiah ?></a>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "No Item Found";
            }
            ?>
        </div>
        <div class="fixed-bottom">
            <h1>Hello</h1>
        </div>
    </div>
</body>

</html>