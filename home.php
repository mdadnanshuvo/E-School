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
  <title>Welcome to e-school</title>

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

</head>

<body>

  <!--
    - main container
  -->

  <div class="container">

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
            <a href="home.php">Home</a>
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
            <a href="contact.php">Contact Us</a>
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

  


    </header>





    <main>

      <!--
        - #HOME SECTION
      -->

      <section class="home" id="home">

        <div class="deco-shape shape-1">
          <img src="./assets/images/shape-1.png" alt="art shape" width="70">
        </div>
        <div class="deco-shape shape-2">
          <img src="./assets/images/shape-2.png" alt="art shape" width="55">
        </div>
        <div class="deco-shape shape-3">
          <img src="./assets/images/shape-3.png" alt="art shape" width="120">
        </div>
        <div class="deco-shape shape-4">
          <img src="./assets/images/shape-4.png" alt="art shape" width="30">
        </div>

        <div class="home-left">

          <p class="section-subtitle">Welcome To E-School</p>

          <h1 class="main-heading">
            Get the genuine education.
            <span class="underline-img"> <img src="./assets/images/banner-line.png" alt="line"></span>
          </h1>

          <p class="section-text">
            Explore the courses that can broaden your wisdom and make you feel high.
          </p>

          <div class="home-btn-group">
            <button class="btn btn-primary">
             
                <a href="courses2.php">
                   <p class="btn-text">Explore Courses</p>
                </a>
              <span class="square"></span>
            </button>
            
            <a href="contact.php">
            <button class="btn btn-secondary">
              <p class="btn-text">Contact Us</p>
              <span class="square"></span>
            </button>
          </a>
          </div>

        </div>

        <div class="home-right">

          <div class="img-box">

            <img src="./assets/images/banner-img-bg.png" alt="colorful background shape" class="background-shape">
            <img src="./assets/images/banner-img.jpg" alt="banner image" class="banner-img">

            <img src="./assets/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
            <img src="./assets/images/banner-aliment-icon-2.png" alt="" class="icon-2 smooth-zigzag-anim-2" width="240">
            <img src="./assets/images/banner-aliment-icon-3.png" alt="" class="icon-3 smooth-zigzag-anim-3" width="195">
            <img src="./assets/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim">

          </div>

        </div>

      </section>





     
      





     

      <section class="about" id="about">

        <div class="about-left">

          <div class="img-box">
            <img src="./assets/images/about-img-bg.png" alt="about bg" class="about-bg">

            <img src="./assets/images/about-img.png" alt="about person" class="about-img">

            <img src="./assets/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
            <img src="./assets/images/banner-aliment-icon-3.png" alt="" class="icon-2 smooth-zigzag-anim-3" width="195">
          </div>

        </div>

        <div class="about-right">

          <p class="section-subtitle">About Us</p>

          <h2 class="section-title">We Have Best Online Education</h2>

          <p class="section-text">
           E-School is an online education platform dedicated to providing high-quality educational resources to students around the world. Our team of experienced educators and technologists is committed to using technology to enhance the learning experience and help students reach their full potential.
          </p>
          <br>
          <br>

          <p class="section-text">We offer a wide range of online courses, tutorials, and materials that are designed to help students learn and succeed. Our platform is constantly updated and innovated to ensure that it is user-friendly and effective. We are proud to create a welcoming and inclusive learning community where students can feel supported and motivated to succeed.</p>
          <br>
    <p class="section-text">Thank you for choosing E-School as your educational partner. We look forward to supporting you on your learning journey.</p>

          <ul class="about-ul">

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Show the best of yours.</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Achieve what others dreaming for.</p>
            </li>

            <li>
              <ion-icon name="checkmark-circle"></ion-icon>
              <p>Never stop learning.</p>
            </li>

          </ul>
          

          <a href="courses2.php">
          <button class="btn btn-primary">
            <p class="btn-text">Explore More</p>
            <span class="square"></span>
          </button>
        </a>

        </div>

      </section>





      


      <!--
        - #EVENT SECTION
      -->

      <section class="event">

        <div class="event-left">

          <div class="event-banner">
            <img src="./assets/images/event-img.jpg" alt="event banner" class="banner-img">
          </div>

          <button class="play smooth-zigzag-anim-1">
            <div class="play-icon pulse-anim">
              <ion-icon name="play-circle"></ion-icon>
            </div>

            <p>Watch Us !</p>
          </button>

        </div>

        <div class="event-right">

          <p class="section-subtitle">Our Events</p>

          <h2 class="section-title">Join Our Upcoming Events</h2>

          <div class="event-card-group">

            <div class="event-card">

              <div class="content-left">
                <p class="day">28</p>
                <p class="month">Feb, 2023</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">Bashundhara</p>
                </div>

                <a href="#" class="event-name">Programming BootCamp for Fresh Bloods</a>
              </div>

            </div>

            <div class="event-card">

              <div class="content-left">
                <p class="day">15</p>
                <p class="month">Mar, 2023</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">UITS PHP Square</p>
                </div>

                <a href="#" class="event-name">Coding for Living.</a>
              </div>

            </div>

            <div class="event-card">

              <div class="content-left">
                <p class="day">20</p>
                <p class="month">May, 2023</p>
              </div>

              <div class="content-right">
                <div class="schedule">
                  <p class="time">10:30am To 2:30pm</p>
                  <p class="place">UITS</p>
                </div>

                <a href="#" class="event-name">CodingGram</a>
              </div>

            </div>

          </div>

        </div>

      </section>





      <!--
        - #FEATURES SECTION
      -->

      <section class="features">

        <div class="features-left">

          <p class="section-subtitle">Core Features</p>

          <h2 class="section-title">See What Our Missions Are</h2>

          <ul>

            <li class="features-item">
              <div class="item-icon-box blue">
                <img src="./assets/images/feature-icon-1.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Student Life</h3>

                <p class="item-text">Students get the authentic education by which they can define their moral and skills. Skills taught by us aid the students to catch their desired goals and the morality assocaites them to be excellent human being</p>

              </div>
            </li>

            <li class="features-item">
              <div class="item-icon-box pink">
                <img src="./assets/images/feature-icon-2.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">Best Online Class</h3>

                <p class="item-text">The enviroment of our online classes are so attractive that students can not ignore to the class for a single day.</p>

              </div>
            </li>

            <li class="features-item">
              <div class="item-icon-box purple">
                <img src="./assets/images/feature-icon-3.png" alt="feature icon">
              </div>

              <div class="wrapper">

                <h3 class="item-title">24x7 Program</h3>

                <p class="item-text">Fortunately pupils from around the world can take their classes at anytime and there will be 24X7 supports system in order to make sure that the students get the best from us.</p>

              </div>
            </li>

          </ul>

        </div>

        <div class="features-right">
          <img src="./assets/images/coure-features-img.jpg" alt="core features image">
        </div>

      </section>





      

      <section class="instructor">

        <p class="section-subtitle">Best Coach</p>

        <h2 class="section-title">Our Expert Instructor</h2>

        <div class="instructor-grid">

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/images/instructor-1.jpg" alt="instructor louis sullivan">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Mohammad Adnan Shuvo</h4>

            <p class="instructor-title">Instructor</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/images/instructor-2.jpg" alt="instructor camden david">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Tushar Mahmud</h4>

            <p class="instructor-title">Instructor</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/images/instructor-3.jpg" alt="instructor fiona dean">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Sifat Nur</h4>

            <p class="instructor-title">Instructor</p>

          </div>

          <div class="instructor-card">

            <div class="instructor-img-box">
              <img src="./assets/images/instructor-4.jpg" alt="instructor cherish sosa">

              <div class="social-link">
                <a href="#" class="facebook">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>

                <a href="#" class="instagram">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>

                <a href="#" class="twitter">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>

            <h4 class="instructor-name">Firoz Begum</h4>

            <p class="instructor-title">Instructor</p>

          </div>

        </div>

      </section>





      <!--
        - #TESTIMONIALS
      -->

      <section class="testimonials">

        <div class="testimonials-left">

          <p class="section-subtitle">Testimonial</p>

          <h2 class="section-title">What Our Students Say About Us</h2>

          <p class="section-text">
            E-School prvides the best education that every student deserve. The teaching system specially their all-time helping system make the students feel-like they are taking class in-fornt of their favorite teachers rather than virtual appearance.
          </p>

        </div>

        <div class="testimonials-right">

          <div class="testimonials-card">
            <img src="./assets/images/quote.png" alt="quote icon" class="quote-img">

            <p class="testimonials-text">
              Nothing is as precious as education and E-School has been doing it more revolutionized way.
            </p>

            <div class="testimonials-client">

              <div class="client-img-box">
                <img src="./assets/images/client.jpg" alt="client christine rose">
              </div>

              <div class="client-detail">
                <h4 class="client-name">Fahada Khatun</h4>

                <p class="client-title">Student</p>
              </div>

            </div>
          </div>

        </div>

      </section>





      <!--
        - #BLOG
      -->

      <section class="blog" id="blog">

        <p class="section-subtitle">Our Blog</p>

        <h2 class="section-title">Latest Blog & News</h2>

        <div class="blog-grid">

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="./assets/images/blog-1.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Did you check the latest Technologies that emerging right now?</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="./assets/images/calendar.png" alt="calendar icon">

                  <a href="#">07 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="./assets/images/comment.png" alt="comment icon">

                  <a href="#">3 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="./assets/images/blog-2.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Another Dominating year for Python as a Programming Language</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="./assets/images/calendar.png" alt="calendar icon">

                  <a href="#">04 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="./assets/images/comment.png" alt="comment icon">

                  <a href="#">10 Comments</a>
                </div>

              </div>

            </div>

          </div>

          <div class="blog-card">

            <div class="blog-banner-box">
              <img src="./assets/images/blog-3.jpg" alt="blog banner">
            </div>

            <div class="blog-content">

              <h3 class="blog-title">
                <a href="#">Check out the Latest libraries of Javascript.</a>
              </h3>

              <div class="wrapper">

                <div class="blog-publish-date">
                  <img src="./assets/images/calendar.png" alt="calendar icon">

                  <a href="#">01 Jan, 2022</a>
                </div>

                <div class="blog-comment">
                  <img src="./assets/images/comment.png" alt="comment icon">

                  <a href="#">5 Comments</a>
                </div>

              </div>

            </div>

          </div>

        </div>

      </section>





      <!--
        - #CONTACT
      -->

      <section class="contact">

        <div class="contact-card" id="contact">
          <img src="./assets/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

          <h2>Start Your Best Online Classes With Us</h2>
          
          <a href="contact.html">
          <button class="btn btn-primary">
            <p class="btn-text">Contact Us</p>
            <span class="square"></span>
          </button>
        </a>
        </div>

      </section>

    </main>





    <!--
      - #FOOTER
    -->

    <footer>

      <div class="footer-grid">

        <div class="grid-item">

         

          <p class="footer-text">
           Do not hesitate to reach us to unleash your potential.
          </p>

          <div class="social-link">
            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </div>

        </div>

        <ul class="grid-item">

          <h4 class="item-heading">Our Link</h4>

          <li class="list-item">
            <a href="home.php">Home</a>
          </li>

          <li class="list-item">
            <a href="#about">About Us</a>
          </li>

          <li class="list-item">
            <a href="#course">Courses</a>
          </li>

          <li class="list-item">
            <a href="#blog">Blog</a>
          </li>

          <li class="list-item">
            <a href="contact.php">Contact Us</a>
          </li>

        </ul>

        <ul class="grid-item">

          <h4 class="item-heading">Other Link</h4>

          <li class="list-item">
            <a href="#">Instructor</a>
          </li>

          <li class="list-item">
            <a href="#">FAQ</a>
          </li>

          <li class="list-item">
            <a href="#">Event</a>
          </li>

          <li class="list-item">
            <a href="#">Privacy Policy</a>
          </li>

          <li class="list-item">
            <a href="#">Term & Condition</a>
          </li>

        </ul>

        <div class="grid-item">

          <h4 class="item-heading">Subscribe Now</h4>

          <div class="wrapper">
            <input type="text" name="subscribe" placeholder="Email Address">
            
            <button class="send-btn">
              <ion-icon name="paper-plane"></ion-icon>
            </button>
          </div>

        </div>

      </div>

      <p class="copyright">
        Copyright © 2022 <a href="#">Mohammad Adnan Shuvo</a>. All rights reserved.
      </p>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>