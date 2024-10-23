function payNow() {
    var amount = 2000;
//                                            var amount = document.getElementById('amount').value;
    if (!amount || amount <= 0) {
        alert('Please enter a valid amount');
        return;
    }

    console.log("Amount to be sent: " + amount); // Debugging log

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'payment/cheakout.php', true);
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
                    alert('Payment Successful');
                    var xhr2 = new XMLHttpRequest();
                    xhr2.open('POST', 'insert_auction_ragistation_data.php', true);
                    xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr2.onload = function () {
                        if (xhr2.status === 200) {
                            alert('Payment details saved successfully.');
                        } else {
                            alert('Error saving payment details.');
                        }
                    };
                    xhr2.send('auction_item_id=' + encodeURIComponent(auction_item_id) +
                            '&bidder_id=' + encodeURIComponent(bidder_id) +
                            '&emd_refund=Applicable' +
                            '&full_payment=' + encodeURIComponent(amount));
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
    xhr.send('num=' + encodeURIComponent(amount));
}
payNow();