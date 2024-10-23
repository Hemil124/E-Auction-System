
// Function to check auction status every 1 minute (60000 milliseconds)
setInterval(function () {
    // Create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "check_auction.php", true); // Replace with the correct path to your PHP script
    xhr.onload = function () {
        if (xhr.status == 200) {
            console.log(xhr.responseText); // Log response from the server
        }
    };
    xhr.send();
}, 60000); // 1 minute interval (can adjust the timing)
