
<?php require_once "process.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="img/logo2.jpg">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <title>Health Feed Plus</title>
</head>
<body>
  <section class="header-section">
    <header class="main-header">
      <div class="small-header">
        <ul id="header-span" class="header-ul-span">
          <li><a href="#about">About Us</a></li>
          <li><a href="#medical">Our Medical Service</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
        <!-- <div class="hamburg" onclick="myFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div> -->
        <div id="myNav" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content">
            <a href="#about">About</a>
            <a href="#medical">Our Medical Service</a>
            <a href="#contact">Contact Us</a>
          </div>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="burger">&#9776;</span>
        <div class="logo"><img src="img/logo2.jpg" alt=""></div>
      </div>
      <div class="menu-header text-center">
        <div class="col-md-12">
          <div class="row" id="show-row">
            <div class="col-md-4 mt-5 menu-header-div">
              <h3>Subscribe To Our Newslatter</h3>
              <form action="" method="POST" class="form-wrapper" id="subscribe">
                <h4 class="mb-4 form-h4">Be the first to know <br> when we go live.</h4>
                <div class="form-div">
                  <?php if (!empty($error)) {echo $error;} ?>
                  <input type="text" class="mb-4" placeholder="Full-Name" name="name"><br>
                  <input type="email" class="mb-4" placeholder="Email" name="email"><br>
                  <button type="submit" class="" name="subscribe">SUBSCRIBE</button>
                </div>
              </form>
            </div>
            <div class="col-md-8 div-slide-two">
              <h3 class="">We are on this Journey Together</h3>
              <p class="div-slide-p">We help, guide and inspire our users to make life-changing health decisions and choose healthy <br> lifestyle as a necessity.</p>
              <h6 class="text-center"><a href="#message-us">message us</a></h6>
            </div>
          </div>
          <div class="row" id="hide-row">
            <div class="col-md-8 div-slide-two" id="div-slide-two-id">
              <h3 class="">We are on this Journey Together</h3>
              <p class="div-slide-p">We're help, guide and inspire our users to make life-changing health decisions and choose healthy <br> lifestyle as a necessity.</p>
              <h6 class="text-center"><a href="#message-us">message us</a></h6>
            </div>
            <div class="col-md-4 mt-5 menu-header-div">
              <h3>Subscribe To Our Newslatter</h3>
              <form action="" method="POST" class="form-wrapper" id="subscribe">
                <h4 class="mb-4 form-h4">Be the first to know <br> when we go live.</h4>
                <div class="form-div">
                  <?php if (isset($error)) {echo $error;} ?>
                  <input type="text" class="mb-4" placeholder="Full-Name" name="name"><br>
                  <input type="text" class="mb-4" placeholder="Email" name="email"><br>
                  <button type="submit" class="" name="subscribe">SUBSCRIBE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>

  <!-- about section -->
  <section>
    <div class="about-wrapper" id="about">
      <div class="col-md-12">
        <h3 class="mb-4 text-center">about us</h3>
        <h4 class="mb-4 text-center">short story about healthfeed<span>plus</span></h4>
        <div class="row">
          <div class="col-md-6 about-div-one">
            <p>We are a Health care Technology brand that uses information technology to heal the world. We operate on the belief that if the global community we serve can take control of their health, they can take control of their life. This we do by helping them save more through our preventive health measures, a step away from that-the reason we are here to support throughout the journey to good healthand well-being.</p>
          </div>
          <div class="col-md-6 about-div-two">
            <p>We leverage on the combined experience of our multi-disciplinary team of experts who have demonstrated an appreciable level of competence and authority in their variuos fields and strictly sourced from different geographical locations to ensure the delivery of credible health information for all.</p>
            <p><i>Join our wait list to get notified when we go live.</i></p>
            <h6 class="text-center"><a href="#subscribe">subscribe</a></h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service Section-->
  <section>
    <div class="col-md-12 mt-5" id="medical">
      <h3 class="text-center">Best Services Ever</h3>
      <h4 class="text-center">Our Medical Services</h4>
      <div class="row service-row">
        <div class="col-md-3 main-service-div" id="main-service-div-sample">
          <h3>24/7 Consultation</h3>
          <p>We give prompt response to specific questions or information pertaining to the health needs of our users, using the combined experince and expertise of our health consultants to meet clients health goals.</p>
        </div>
        <div class="col-md-3 main-service-div-two" id="div-sample">
          <h3>Podcasting</h3>
          <img src="img/podcast.jpg" alt="" class="pod-img">
          <p>We cannot afford to leave our consumers stranded on their journey to good health. We're on a course to redefine healthy living through our audio programs curated to help them live more and do more.</p>
        </div>
        <div class="col-md-3 main-service-div-two" id="div-sample">
          <h3>Community Support</h3>
          <img src="img/support.jpg" alt="" class="pod-img">
          <p>Our HealthFeedplus Insider is a community of survivors of health challenge or the other. <br>We believe they are not alone. Ww're right here for them...</p>
        </div>
        <div class="col-md-3 main-service-div-two" id="worldwide">
          <h3>Worldwide Campus Ambassadorship Program</h3>
          <img src="img/ambassador.jpg" alt="" class="" id="pod-img">
          <p>The students are not left out in this as they may find the platform useful for theier classroom assignments. It encourages the intentional usage of health information for health life style.</p>
        </div>
        <div class="col-md-3 main-service-div-two" id="main-service-div-sample-two">
          <h3>Ambulance Service</h3>
          <img src="img/amblance.jpg" alt="" class="pod-img" id="pod-img-two">
          <p>We understand the impacts of emergency situations especially in some region where ambulance service is a challenging.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- footer section -->
  <section>
    <footer class="footer-wrapper mt-5 text-center">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6 footer-div">
            <h3 class="mb-5">Related Links</h3>
            <ul class="main-footer-ul">
              <li><a href="#about">About Us</a></li>
              <li><a href="#medical">Our Medical Service</a></li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
            <ul class="media-footer-ul">
              <li><a href="#" class="fa fa-instagram instagram" aria-hidden="true"></a></li>
              <li><a href="#" class="fa  fa-youtube youtube" aria-hidden="true"></a></li>
              <li><a href="#" class="fa fa-facebook-f facebook-f" aria-hidden="true"></a></li>
              <li><a href="#" class="fa fa-twitter twitter" aria-hidden="true"></a></li>
              <li><a href="#" class="fa fa-linkedin linkedin" aria-hidden="true"></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h3 class="mb-5" id="contact">Message Us</h3>
            <form action="" method="post" class="fooeter-form" id="message-us">
              <?php if (!empty($conerror)) {echo $conerror;} ?>
              <input type="text" placeholder="Full Name" class="mb-3" name="full_name">
              <input type="text" placeholder="Email" class="mb-3" name="email">
              <textarea name="message" id="" cols="20" rows="5" placeholder="Message" class="mb-3"></textarea>
              <button type="submit"  name="send">Send</button>
            </form>
          </div>
        </div>
        <div class="copywrite">HealthFeed<span class="text-success">Plus</span> &#169; 2020 Alright Reserved.</div>
      </div>
    </footer>
  </section>

  <script>
    // function myFunction(x) {
    //   x.classList.toggle("change");
    // }

    
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
</body>
</html>
