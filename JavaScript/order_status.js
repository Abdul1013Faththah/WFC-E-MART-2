function updateOrderStatus() {
    var userId = document.getElementById('userId').value;
    var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
    var progress = Array.from(checkboxes).map(function(checkbox) {
        return checkbox.value;
    });

    $.ajax({
        type: 'POST',
        url: '../Includes/update_order_status.php',
        data: { user_id: userId, progress: progress },
        success: function(response) {
            console.log(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr, status, error);
        }
    });
}