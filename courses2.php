<?php
  // Start the session
  session_start();

  // Check if the user is logged in
  if (!isset($_SESSION['username'])) {
    // If not, redirect to the login page
    header("Location: login.php");
  }
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses</title>

  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/media_queries.css">
  <link rel="stylesheet" href="./assets/css/animation.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/media_queries.css">
  <link rel="stylesheet" href="./assets/css/animation.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    .course-card {
      margin-bottom: 20px;

    }


    .myButton {
    display: block;
    margin: auto;
    margin-top: 10px;
    padding:5px;
    background-color: green;
    color: white;
    font-size: 16px;
    border-radius: 5px;
}

  </style>

</head>

<body>

  <!--
    - main container
  -->

  

    <!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-brand">
          <img src="./assets/images/logo.png" style="width: 250px">
        </div>


        <li>
                <img src="assets/images/student-icon.png">       
              <p><?php echo $_SESSION['username']; ?></p>
            </li>
        


       
        
         
        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a href="courses2.php">Courses</a>
          </li>
          <li class="nav-item">
            <a href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a href="#contact">Contact Us</a>
          </li>

           <li class="nav-item">
            <a href="logout.php">Log out</a>
          </li>

           

        </ul>

       
          

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </nav>

  


<body style="background-color: yellowgreen">
  <div class="container mt-5">
    <h1 style="text-align: center;">Courses</h1>
    <form method="post" action="courses2.php" style="padding: 10px;margin:10px;">
      <div class="form-group">
        <input type="text" name="search" placeholder="Search courses..." class="form-control">
      </div>
      <button type="submit" class="btn btn-info" style="margin-left: 300px;">Search</button>
    </form>
    <div class="row">
      <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'e-school');
        // Check for search query
        if (isset($_POST['search'])) {
          $search_query = mysqli_real_escape_string($conn, $_POST['search']);
          $query = "SELECT * FROM courses WHERE course_name LIKE '%$search_query%' OR course_dept LIKE '%$search_query%'";
        } else {
          $query = "SELECT * FROM courses";
        }
        // Fetch data from the database
        $result = mysqli_query($conn, $query);
        // Loop through the courses and display them
        while ($course = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-md-4 course-card">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $course['course_name']; ?></h5>
                <p class="card-text"><i>
                  Course ID: <?php echo $course['course_id']; ?><br>
                  Department: <?php echo $course['course_dept']; ?><br>
                  Price: BDT <?php echo $course['course_price']; ?>
                  
                    <br>Discount: <?php echo $course['course_discount']; ?>
                    <br>

                  </i>

                   <?php
                    echo "<button  class='myButton' onclick='window.location = \"$course[url]\"'>Go To Course</button>";
                    ?>
                  
                </p>
              </div>
            </div>
          </div>
      <?php
        }
        // Close the database connection
        mysqli_close($conn);
      ?>
    </div>
  
</body>


    </header>









