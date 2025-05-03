<?php
session_start();
unset($_SESSION['BuyerCode']);
?>
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
        <form method="post" action="OrderFunction.php">
            <div class="menu">
                <?php
                if (mysqli_num_rows($sql_run) > 0) {
                    foreach ($sql_run as $row) {
                ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="image" style="width: 99%; height: 170px; margin-bottom: 10px;">
                                    <img src="../Asset/ProductImage/<?php echo $row['Image']; ?>" style="width: 100%; height: 100%; object-fit:cover; object-position:center; border-radius: 10px;">
                                </div>
                                <h5 class="card-title"><?php echo $row['Name']; ?></h5>
                                <h6 class="card-text"><?php echo $row['Shop']; ?></h6>
                                <p class="card-text"><?php echo $row['Rate']; ?>&#11088;</p>
                                <?php
                                $price = number_format($row['Price']);
                                $rupiah = "Rp $price";
                                ?>
                                <p><?php echo $rupiah ?></p>
                                <div class="quantity">
                                    <button type="button" class="pm" onclick="changeQuantity(<?php echo $row['ID']; ?>, -1)">-</button>
                                    <input type="number" name="quantity[<?php echo $row['ID']; ?>]" id="quantity-<?php echo $row['ID']; ?>" class="Num" min="0" value="0">
                                    <button type="button" class="pm" onclick="changeQuantity(<?php echo $row['ID']; ?>, 1)">+</button>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "No Item Found";
                }
                ?>
            </div>
            <button type="submit" id="continueButton" class="fixed-bottom" name="send"><i><img src="../Asset/cart-shopping-fast.png" class="btnico"></i>Order</button>
        </form>
    </div>

    <script>
        function changeQuantity(itemId, changeAmount) {
            const input = document.getElementById(`quantity-${itemId}`);
            if (input) {
                let currentValue = parseInt(input.value);
                if (isNaN(currentValue)) {
                    currentValue = 0;
                }
                const newValue = currentValue + changeAmount;
                if (newValue >= 0) { // Prevent negative quantities
                    input.value = newValue;
                    checkQuantities();
                }
            }
        }
    </script>
</body>

</html>