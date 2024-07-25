<?php
session_start();
session_unset();
session_destroy();

setcookie('username', '', time() - 3600, "/");

// Prevent browser caching
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

// Redirect to sign-in page
header("Location: sign-in.php");
exit;
?>
