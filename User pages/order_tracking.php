<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WFC E-MART Order Tracking</title>
    <link rel="stylesheet" href="/CSS/order_tracking.css">

    <!-- UniIcon CDN Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="main">

        <div class="head">
            <p class="head_1">WFC <span> E-MART</span></p>
            <p class="head_2">Custom Order Status</p>
        </div>

        <ul>
            <li>
                <i class="icon uil uil-list-ui-alt"></i>
                <div class="progress one">
                    <p>1</p>
                    <?php echo $orderStatus['selectItem'] ? '<i class="uil uil-check"></i>' : ''; ?>
                </div>
                <p class="text">Select Item</p>
            </li>
            <li>
                <i class="icon uil uil-file-check-alt"></i>
                <div class="progress two">
                    <p>2</p>
                    <?php echo $orderStatus['confirmOrder'] ? '<i class="uil uil-check"></i>' : ''; ?>
                </div>
                <p class="text">Confirm Order</p>
            </li>
            <li>
                <i  class="icon uil uil-box"></i>
                <div class="progress three">
                    <p>3</p>
                    <?php echo $orderStatus['packing'] ? '<i class="uil uil-check"></i>' : ''; ?>
                </div>
                <p class="text">Packing</p>
            </li>
            <li>
                <i class="icon uil-truck" ></i>
                <div class="progress four">
                    <p>4</p>
                    <?php echo $orderStatus['shipping'] ? '<i class="uil uil-check"></i>' : ''; ?>
                </div>
                <p class="text">Shipping</p>
            </li>
            <li>
                <i  class="icon uil uil-credit-card"></i>
                <div class="progress five">
                    <p>5</p>
                    <?php echo $orderStatus['payment'] ? '<i class="uil uil-check"></i>' : ''; ?>
                </div>
                <p class="text">Payment</p>
            </li>
            <li>
                <i class="icon uil uil-home"></i>
                <div class="progress six">
                    <p>6</p>
                    <?php echo $orderStatus['delivered'] ? '<i class="uil uil-check"></i>' : ''; ?>
                </div>
                <p class="text">Delivered</p>
            </li>
        </ul>

    </div>

    <script src="/JavaScript/order_tracking.js"></script>
</body>
</html>
?>