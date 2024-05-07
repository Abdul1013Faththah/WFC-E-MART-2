<?php

// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the home page after logout
header("location: ../User pages/home.php");

// Ensure no output or whitespace before header redirect
exit(); // Terminate the script
?>
