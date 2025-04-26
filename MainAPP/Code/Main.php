<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/MainStyle.css">
    <title>Order</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="main">
        <div class="top">
            <div class="greeting">
                <h3 class="grt">Hi, <?php echo $_SESSION['Username']; ?></h3>
            </div>
            <div class="notification">
                <img src="../Asset/bell.png" alt="bell icon" class="iconN">
            </div>
        </div>
        <div class="content">
            <div class="item">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><img src="../Asset/ovoLogo.png" alt="" class="iconM"></a>
                    </li>
                </ul>
            </div>
            <div class="shop"></div>
        </div>
        <div class="navbar">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"><img src="../Asset/home.png" alt="" class="icon"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../Asset/home.png" alt="" class="icon"></a>
                </li>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "pos_app");
                $sql = "SELECT * FROM orderuser WHERE Username = '" . $_SESSION['Username'] . "'";
                $query = mysqli_query($conn, $sql);
                if ($row = mysqli_fetch_assoc($query)) {
                    if (!empty($row['ProfilePicture'])) {
                        echo "<div class='border'><img class='pp' src='../Asset/ProfilePicture/" . htmlspecialchars($row['ProfilePicture']) . "'></div>";
                    } else {
                        echo "<div class='border'><img class='pp' src='../Asset/ProfilePicture/user.png'></div>";
                    }
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../Asset/receipt.png" alt="" class="icon"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true"><img src="../Asset/setting.png" alt="" class="icon"></a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>