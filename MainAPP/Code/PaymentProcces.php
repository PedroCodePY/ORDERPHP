<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style/Payment.css">
</head>

<body>
    <div class="main">
        <div class="form">
            <h1>Payment Method</h1>
            <p>Every transaction out of this app, is not our resposible</p>
            <form action="" class="paymentType">
                <div class="pytype">
                    <div class="imageCon">
                        <img src="../Asset/coins.png" alt="" class="image">
                    </div>
                    <div class="labelCon">
                        <label for="py" class="name">Cash</label>
                    </div>
                    <div class="inputCon">
                        <input type="radio" name="py" id="" class="py" align="right">
                    </div>
                </div>
                <div class="pytype">
                    <div class="imageCon">
                        <img src="../Asset/bank.png" alt="" class="image">
                    </div>
                    <div class="labelCon">
                        <label for="py" class="name">Bank</label>
                    </div>
                    <div class="inputCon">
                        <input type="radio" name="py" id="" class="py" align="right">
                    </div>
                </div>
                <div class="pytype">
                    <div class="imageCon">
                        <img src="../Asset/ovoLogo.png" alt="" class="image">
                    </div>
                    <div class="labelCon">
                        <label for="py" class="name">OVO</label>
                    </div>
                    <div class="inputCon">
                        <input type="radio" name="py" id="" class="py" align="right">
                    </div>
                </div>
                <div class="pytype">
                    <div class="imageCon">
                        <img src="../Asset/gopayLogo.webp" alt="" class="image">
                    </div>
                    <div class="labelCon">
                        <label for="py" class="name">GoPay</label>
                    </div>
                    <div class="inputCon">
                        <input type="radio" name="py" id="" class="py" align="right">
                    </div>
                </div>
                <div class="pytype">
                    <div class="imageCon">
                        <img src="../Asset/Dana-logo.png" alt="" class="image">
                    </div>
                    <div class="labelCon">
                        <label for="py" class="name">DANA</label>
                    </div>
                    <div class="inputCon">
                        <input type="radio" name="py" id="" class="py" align="right">
                    </div>
                </div>
                <button type="submit" id="continueButton" class="sticky-bottom" name="send">Pay</button>
            </form>
        </div>
    </div>
</body>

</html>