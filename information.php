<?php
session_start();

  // Check if user is logged in
  if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
    // Redirect to login page
    header("Location: index.php");
    exit();
  }

function print_info() { 

  // Get the current date and time
  $current_time = date("Y-m-d H:i:s");
  echo "Current date and time: $current_time<br>";

  // Check if it's Friday
  $current_day = date("l");
  switch ($current_day) {
    case "Monday":
      echo "It's Monday again... Let's make the most of it!";
      break;
    case "Tuesday":
      echo "Happy Tuesday! Keep pushing forward!";
      break;
    case "Wednesday":
      echo "Happy Hump Day! The weekend is within reach!";
      break;
    case "Thursday":
      echo "One more day until Friday! Keep up the good work!";
      break;
    case "Friday":
      echo "Finally Friday! Have a great weekend!";
      break;
    case "Saturday":
      echo "Enjoy your weekend! Relax and have fun!";
      break;
    case "Sunday":
      echo "Make the most of your Sunday! Prepare for the week ahead!";
      break;
    default:
      echo "Invalid day of the week.";
  }
  echo "<br>"; // Adds a blank line
  echo "<br>"; // Adds a blank line

  // Get the visitor's IP address
  if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
    $visitor_ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
  } else {
    $visitor_ip = $_SERVER["REMOTE_ADDR"];
  }
  echo "Visitor's IP address: $visitor_ip<br>";
  echo "<br>"; // Adds a blank line

  // Get the path and filename of the current PHP file
  $current_file = $_SERVER["PHP_SELF"];
  echo "Current file: $current_file<br>";
  echo "<br>"; // Adds a blank line

  // Get information about the user agent
  $user_agent = $_SERVER["HTTP_USER_AGENT"];
  preg_match("/\((.*?)\)/", $user_agent, $matches);
  $os_browser = $matches[1];
  echo "User agent: $os_browser<br>";
}

include("includes/header.php");

print_info();

include("includes/footer.php");
