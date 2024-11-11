<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment Page</title>
</head>
<body>
    <?php
    // Use htmlspecialchars for safety
    $am = 200; // You can also use $_GET['a'] if you want to get the amount from the URL
    ?>
    <script>
        // Function to initiate payment
        function initiatePayment() {
            var amount = <?php echo htmlspecialchars($am); ?>; // Use htmlspecialchars for output safety

            // Validate amount
            if (!amount || amount <= 0) {
                alert('Please enter a valid amount');
                return;
            }

            console.log("Amount to be sent: " + amount); // Debugging log

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'payment/checkout.php', true); // Corrected spelling of checkout
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.error) {
                        alert('Error: ' + response.error);
                        return;
                    }

                    var options = {
                        "key": response.key,
                        "amount": response.amount,
                        "currency": "INR",
                        "name": response.name,
                        "description": "Test Transaction",
                        "order_id": response.order_id,
                        "handler": function (response) {
                            console.log(response);
                            alert('Registration Successfully');
                            window.location = "index-3.php";
                        },
                        "theme": {
                            "color": "#F37254"
                        }
                    };
                    var rzp = new Razorpay(options);
                    rzp.open();
                } else {
                    alert('Something went wrong. Please try again. Status: ' + xhr.status);
                }
            };
            xhr.send('amount=' + encodeURIComponent(amount)); // Use 'amount' instead of 'num'
        }

        // Call the initiatePayment function on page load
        window.onload = initiatePayment;
    </script>
</body>
</html>