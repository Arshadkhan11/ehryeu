<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EHRYEU - Contact us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style3.css" rel="stylesheet">

  
</head>

<body>
 <!-- ======= Bar ======= -->
 <section id="topbar" class="d-none d-lg-block">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <ul>
        <li><i class="icofont-envelope"></i><a href="#"> admin@ehryeu.com</a></li>
        <li><i class="icofont-phone"></i> 9741629893 , 9980354261</li>
        
      </ul>

    </div>
    <div class="cta">
      <a href="contact us.html" class="scrollto">Register</a>
    </div>
  </div>
</section>


 
   <!-- ======= Header ======= -->
   <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!--<h1 class="text-light"><a href="index.html"><span>logo</span></a></h1>
        Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="assets/img/ehryeu.png" alt="" class="img-fluid"></a>
      </div>


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="About.html">About Us</a></li>
          <li class="drop-down"><a href="">Our Services</a>
            <ul>
              <li><a href="webdesignanddevelopment.html">Web Design and Development</a></li>
              
              <li><a href="SearchEngineOptimization.html">Search Engine Optimation</a></li>
              <li><a href="SearchEngineMarketing.html">Search Engine Marketing</a></li>
              <li><a href="SocialMediaMarketing.html">Social Media Marketing</a></li>
              <li><a href="EmailMarketing.html">Email Marketing</a></li>
              <li><a href="MarketReserach.html">Market Research</a></li>
              <li><a href="LeadGeneration.html">Lead Generation</a></li>
              
            </ul>
          </li>
          <li><a href="F A Q'S.html">F.A.Q'S</a></li>
          <li class="active"><a href="contact us.html">Contact Us</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1 class="w3-animate-left">Get in touch</h1>
      <h2 class="w3-animate-down">Feel free to reach us.</h2>
      
    </div>
  </section><!-- End Hero --></br></br></br></br></br></br></br></br>
   <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-up">Get in touch</h2>
            <p data-aos="fade-up">Fill this form to do business with us </p>
          </div>
  
          <div class="row justify-content-center">
  
            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p> No 241/C,  RASHAD NAGAR, AC POST, BANGALORE 560045</p>
              </div>
            </div>
  
            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>admin@ehryeu.com</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+91 9741629893<br>+91 9980354261</p>
              </div>
            </div>
          </div>
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST'){
              $name = $_POST['name'];
              $email = $_POST['email'];
              $number = $_POST['number'];
              $msg = $_POST['msg'];
              
            
            // Connecting to the Database
            $servername = "localhost";
            $username = "root";
           
            $password = "";
            $database = "contact";
      
            // Create a connection
            
            // Die if connection was not successful
            if (!$conn){
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{ 
              // Submit these to a database
              // Sql query to be executed 
              $sql = "INSERT INTO `contact` (`name`, `email`, `number`, `msg`,) VALUES ('$name', '$email', '$number', '$msg')";
              $result = mysqli_query($sql);
       
              if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
              }
              else{
                  // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
              }
      
            }
      
          }
      
          
      ?>
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
            <div class="col-xl-9 col-lg-12 mt-4">
              <form action="contact us.php" method="POST" role="form" class="email-form">
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="number" id="number" placeholder="Enter Your Phone" data-msg="Please enter your number" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Enter Your Message Here..."></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  
    
  
    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3><a href="index.html"><img src="assets/img/ehryeu.png" alt="ehryeu logo" width="100%" class="img-fluid"></a></br>
              </h3>
              <p>
                No, 241/C, 2ND CROSS, ENAM MOSQUE STREET <br>
                RASHAD NAGAR, AC POST<br>
                BANGALORE, 560045 <br><br>
                <strong>Phone:</strong> 6360218664 , 9980354261<br>
                <strong>Email:</strong> admin@ehryeu.com<br>
              </p>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="About.html">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="F A Q'S.html">F.A.Q'S</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="contact us.html">Contact us</a></li>
            
                <li><i class="bx bx-chevron-right"></i> <a href="privacypolicy.html">Privacy policy</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="webdesignanddevelopment.html">Web Design and Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="SearchEngineOptimization.html">Search Engine Optimation</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="SearchEngineMarketing.html">Search Engine Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="SocialMediaMarketing.html">Social Media Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="EmailMarketing.html">Email Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="MarketReserach.html">Market Research</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="LeadGeneration.html">Lead Generation</a></li>
              </ul>
            </div>
  
            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <p>Get updates on our services and offers.</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Get Updates">
              </form>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container d-lg-flex py-4">
  
        <div class="mr-lg-auto text-center text-lg-left">
          <div class="copyright">
            Copyright &copy; 2020 <strong><span>EHRYEU TECHNOLOGIES PRIVATE LIMITED</span></strong>. All Rights Reserved
          </div>
         
        </div>
        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
          <a href="https://twitter.com/Ehryeutech?s=08" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/ehryeu.technologies" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/ehryeu.technologies/" class="instagram"><i class="bx bxl-instagram"></i></a>
          
          <a href="https://www.linkedin.com/company/ehryeu" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
      $('.skill-per').each(function(){
        var $this = $(this);
        var per = $this.attr('per');
        $this.css("width",per+'%');
        $({animatedValue: 0}).animate({animatedValue: per},{
          duration: 2900,
          step: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          },
          complete: function(){
            $this.attr('per', Math.floor(this.animatedValue) + '%');
          }
        });
      });
    </script>
  
  </body>
  
  </html>