<!--<!DOCTYPE html>

Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <script>
        // Function to check auction status every 1 minute (60000 milliseconds)
            setInterval(function () {
                // Create an AJAX request
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "Find_winner.php", true); // Replace with the correct path to your PHP script
                xhr.onload = function () {
                    if (xhr.status == 200) {
                        console.log(xhr.responseText); // Log response from the server
                        document.getElementById("result").innerHTML=xhr.responseText;
                    }
                };
                xhr.send();
            }, 60000); // 1 minute interval (can adjust the timing)
        </script>
        <div id="result">
        </div>
    </body>
</html>-->
<!DOCTYPE html>
<html>
    <head>
        <title>Auction Activation</title>
        <script>
            // Function to check if the auction should be active or closed
            function checkAuctionStatus(start_datetime, auction_id, end_datetime, emd_date, auction_status, reserve_price, min_bidders) {
                var currentDate = new Date();
                var currentTimestamp = currentDate.getTime();
                var startTimestamp = new Date(start_datetime).getTime();
                var endTimestamp = new Date(end_datetime).getTime();
                var emdTimestamp = new Date(emd_date).getTime();
                console.log(currentTimestamp);
                console.log(endTimestamp);
                console.log(auction_id);
                console.log(auction_status);


                // Activate auction if the start time has been reached
                if (currentTimestamp >= startTimestamp && auction_status === 'PENDING') {
                    updateAuctionStatus(auction_id, "ACTIVE");
//                    consol.log('Active');
                }

                // Check if EMD date has passed for a pending auction
                if (currentTimestamp > emdTimestamp && auction_status === 'PENDING') {
                    handleEmdDatePassed(auction_id, min_bidders, reserve_price);
                }

                // Close auction if end time has been reached
                if (currentTimestamp >= endTimestamp && auction_status === 'ACTIVE') {
                    alert('close');
                    closeAuction(auction_id, reserve_price);
                }
            }

            // Function to update auction status
            function updateAuctionStatus(auction_id, status) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "update_auction_status.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        console.log("Auction " + auction_id + " status updated to " + status + ".");
                    }
                };
                xhr.send("auction_id=" + auction_id + "&status=" + status);
            }

            // Function to handle cases where EMD date has passed
            function handleEmdDatePassed(auction_id, min_bidders, reserve_price) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "handle_emd_date_passed.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        console.log(xhr.responseText);
                    }
                };
                xhr.send("auction_id=" + auction_id + "&min_bidders=" + min_bidders + "&reserve_price=" + reserve_price);
            }

            // Function to close the auction
            function closeAuction(auction_id, reserve_price) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "close_auction.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        console.log(xhr.responseText);
                    }
                };
                xhr.send("auction_id=" + auction_id + "&reserve_price=" + reserve_price);
            }

            // Function to fetch auction data from the database
            function fetchAuctions() {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "fetch_auction_data.php", true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var auctions = JSON.parse(xhr.responseText);
                        auctions.forEach(function (auction) {
                            checkAuctionStatus(
                                    auction.start_datetime,
                                    auction.id,
                                    auction.end_datetime,
                                    auction.emd_date,
                                    auction.auction_status,
                                    auction.reserve_price,
                                    auction.min_bidders
                                    );
                        });
                    }
                };
                xhr.send();
            }

            // Call this function every second to check auction status
            function monitorAuctions() {
                fetchAuctions(); // Fetch auction data and then check statuses
            }

            // Run the check every second (1000 ms)
            setInterval(monitorAuctions, 1000);
        </script>

    </head>
    <body>

        <!-- HTML Content -->

    </body>
</html>
