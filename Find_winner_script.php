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
        // Function to check if the auction should be active
        function checkAuctionStatus(start_datetime, auction_id,end_datetime) {
            // Get the current date and time in the same format as in the database
            var currentDate = new Date();
            var currentTimestamp = currentDate.getTime();
            var startTimestamp = new Date(start_datetime).getTime();
             var endTimestamp = new Date(end_datetime).getTime();
            // Compare current time with auction start time
            if (currentTimestamp >= startTimestamp) {
                // Call the PHP function to update auction status to 'ACTIVE'
                updateAuctionStatus(auction_id);
            }
        }

        // AJAX call to update the auction status in the database
        function updateAuctionStatus(auction_id) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "update_auction_status.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log("Auction " + auction_id + " is now ACTIVE.");
                }
            };
            xhr.send("auction_id=" + auction_id);
        }

        // Function to fetch auction data from the database
        function fetchAuctions() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "fetch_auction_data.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var auctions = JSON.parse(xhr.responseText);
                    auctions.forEach(function (auction) {
                        checkAuctionStatus(auction.start_datetime, auction.id,auction.end_datetime );
                    });
                }
            };
            xhr.send();
        }

        // Call this function every second to check auction status
        function monitorAuctions() {
            fetchAuctions();  // Fetch auction data and then check statuses
        }

        // Run the check every second (1000 ms)
        setInterval(monitorAuctions, 1000);
    </script>
</head>
<body>

<!-- HTML Content -->

</body>
</html>
