<?php
session_start();

  // Set this to true if login is successful
  $loggedIn = false;

  // Check if login form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are correct
    if ($username == "user" && $password == "pass") {
      // Set the session variable
      $_SESSION["loggedIn"] = true;
      $_SESSION["username"] = $username;
      $loggedIn = true;
    } else {
      // Invalid username or password
      echo "Invalid username or password";
    }
  }

include("includes/header.php");

if ($loggedIn) { ?>
    
    <?php header("Location: startmenu.php");
    } 
    else { ?>
    <form action="index.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="myusername">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="mypassword">
      </div>
      <input class="submitButton" type="submit" value="Log in">
    </form>
  <?php }

include("includes/footer.php");