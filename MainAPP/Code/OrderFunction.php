<?php
session_start();
if ($_POST['quantity'] >= 0) {
    header("location:index.php");
}
if (isset($_POST['send'])) {
    $quantities = $_POST['quantity'];
    foreach ($quantities as $itemId => $quantity) {
        $conn = mysqli_connect("localhost", "root", "", "pos_app");
        $query = "SELECT * FROM menupos WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $itemId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $item = mysqli_fetch_assoc($result);
        if ($quantity > 0) {
            if ($item) {
                $itemName = $item['Name'];
                $itemPrice = $item['Price'];
                $totalPrice = $itemPrice * $quantity;
                $_SESSION['Price'] = "Item: " . $itemName . ", Quantity: " . $quantity . ", Total: Rp " . number_format($totalPrice) . "<br>";
                header("location:PaymentProcces.php");
            } else {
                header("location:OrderNotValid.php");
            }
        }
    }
}
