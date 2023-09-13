<?php
include './includes/header.php';
?>


<!-- Banner Starts Here -->
<div class="main-banner header-text" id="top">
  <div class="Modern-Slider">
    <!-- Item -->
    <div class="item item-1">
      <div class="img-fill">
        <div class="text-content">
          <h4>Let's Enjoy Your<br> Trip With Us...</h4>
          <p>Let's Start With us your Unforgatable Trip and create lot's of memoris</p>
          <a href="packages.php" class="filled-button">Packages</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item item-2">
      <div class="img-fill">
        <div class="text-content">
          <h6>Get to know about <em>our company</em></h6>

          <h4>LET'S INTRO <br> KRISHNA TOURISM </h4>
          <a href="about.php" class="filled-button">About Us</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item item-3">
      <div class="img-fill">
        <div class="text-content">
          <h6>let's connect to us </h6>
          <h4>let's connect to us </h4>
          <a href="contact.php" class="filled-button">Contact Us</a>
        </div>
      </div>
    </div>
    <!-- // Item -->
  </div>
</div>
<!-- Banner Ends Here -->

<div class="request-form">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h4>Request a call back right now ?</h4>
        <span>Connect with us with a ones missed call !!</span>
      </div>
      <div class="col-md-4">
        <a href="contact.php" class="border-button">Contact Us</a>
      </div>
    </div>
  </div>
</div>

<div class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Photo <em>Gallary</em></h2>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="assets/images/product-1-720x480.jpg" alt="">
          <div class="down-content">
            <h4>Lorem ipsum dolor sit amet</h4>
            <div style="margin-bottom:10px;">
              <span> <sup>$</sup>300.00 - <sup>$</sup>400.00 </span>
            </div>

            <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

            <a href="package-details.html" class="filled-button">View More</a>
          </div>
        </div>

        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="assets/images/product-2-720x480.jpg" alt="">
          <div class="down-content">
            <h4>Lorem ipsum dolor sit amet</h4>
            <div style="margin-bottom:10px;">
              <span> <sup>$</sup>300.00 - <sup>$</sup>400.00 </span>
            </div>

            <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

            <a href="package-details.html" class="filled-button">View More</a>
          </div>
        </div>

        <br>
      </div>
      <div class="col-md-4">
        <div class="service-item">
          <img src="assets/images/product-3-720x480.jpg" alt="">
          <div class="down-content">
            <h4>Lorem ipsum dolor sit amet</h4>
            <div style="margin-bottom:10px;">
              <span> <sup>$</sup>300.00 - <sup>$</sup>400.00 </span>
            </div>

            <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

            <a href="package-details.html" class="filled-button">View More</a>
          </div>
        </div>

        <br>
      </div>
    </div>
  </div>
</div>

<div class="fun-facts">
  <div class="container">
    <div class="more-info-content">
      <div class="row">
        <div class="col-md-6">
          <div class="left-image">
            <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-6 align-self-center">
          <div class="right-content">
            <span>Who we are</span>
            <h2>Get to know about <em>our company</em></h2>
            <p>We have last 15 years experence of tourism <br>managment</p>
            <a href="about.php" class="filled-button">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="more-info">
  <div class="container">
    <div class="section-heading">
      <h2>Why Choose <em>Us ?</em></h2>
    </div>

    <div class="row" id="tabs">
      <div class="col-md-4">
        <ul>
          <li><a>Best Price Guarantee </a></li>
          <li><a>Easy & quick Booking</a></li>
          <li><a>Best TOur Selection</a></li>
          <li><a>Unique Experience</a></li>
          <li><a>Excellence in Travel </a></li>
          <li><a>Fully Licenced</a></li>

        </ul>
      </div>

      <div class="col-md-8">
        <section class='tabs-content'>
          <article id='tabs-1'>
            <img src="assets/images/blog-image-1-940x460.jpg" alt="">
          </article>

        </section>
      </div>
    </div>


  </div>
</div>


<div class="callback-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Request a <em>call back</em></h2>
        </div>
      </div>
      <div class="col-md-12">
        <div class="contact-form">
          <form id="contact" action="./process/message-process.php" method="post">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12">
                <fieldset>
                  <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="border-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
  </div>
</div>

<?php include './includes/footer.php'; ?>