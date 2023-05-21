<?php
  // Connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'e-school');

  // Check for form submission
  if (isset($_POST['username']) and isset($_POST['password'])) {
    // Retrieve the form data
    $name = $_POST['username'];
    $password = $_POST['password'];

    // Check the database for a matching username and password
    $query = "SELECT * FROM users WHERE name='$name' and password='$password'";
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);

    // If the count is 1, the login is successful
    if ($count == 1) {
      // Start a session and redirect to the welcome page
      session_start();
      $_SESSION['username'] = $name;
      header("Location: home.php");
    } else {
      echo "Your Username or Password does not match";
    }
  }
?>
