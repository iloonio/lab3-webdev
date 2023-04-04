<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
  // Redirect to login page
  header("Location: index.php");
  exit();
}