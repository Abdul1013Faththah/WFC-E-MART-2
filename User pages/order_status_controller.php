<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Bar Controller</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="controls">
        <label for="userId">User ID:</label>
        <input type="text" id="userId" name="userId">
        <form onsubmit="updateOrderStatus(); return false;">
            <input type="checkbox" id="selectItem" name="progress[]" value="selectItem">
            <label for="selectItem">Select Item</label><br>
            <input type="checkbox" id="confirmOrder" name="progress[]" value="confirmOrder">
            <label for="confirmOrder">Confirm Order</label><br>
            <input type="checkbox" id="packing" name="progress[]" value="packing">
            <label for="packing">Packing</label><br>
            <input type="checkbox" id="shipping" name="progress[]" value="shipping">
            <label for="shipping">Shipping</label><br>
            <input type="checkbox" id="payment" name="progress[]" value="payment">
            <label for="payment">Payment</label><br>
            <input type="checkbox" id="delivered" name="progress[]" value="delivered">
            <label for="delivered">Delivered</label><br>
            <button type="submit">Update Status</button>
        </form>
    </div>

    <script src="../JavaScript/order_status.js"></script>
</body>
</html>