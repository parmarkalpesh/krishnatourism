<?php
include './includes/header.php';
include './database/connection.php';

$sql = "SELECT count(*)as allpackage FROM packages;";
$all_package = $con->query($sql);
?>
<!-- Page Content -->
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>About Us</h1>
        <span>We have over 15 years of experience</span>
      </div>
    </div>
  </div>
</div>

<div class="more-info about-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <h2>Get to know about <em>our company</em></h2>
                <span>Last 15 Years Experience of tourism company</span>
                <p>
                <ul>
                  <li>&circledcirc; Unique Experience</li>
                  <li>&circledcirc; Sefty is our priority</li>
                  <li>&circledcirc; COVID-19 Protocol</li>
                  <li>&circledcirc; Large Team</li>
                  <li>&circledcirc; Fully Licenced</li>
                  <li>&circledcirc; Pickup & Dropoff include</li>
                </ul>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-1-570x350.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="left-content">
          <h2>We are provide <br> <em>other functionalitys</em></h2>
          <p>
          <ul>
            <li>&dotsquare; Outdoor recreation activities</li>
            <li>&dotsquare; Airlines</li>
            <li>&dotsquare; Car Rentals</li>
            <li>&dotsquare; Cruise Lines</li>
            <li>&dotsquare; Hotels Booking</li>
            <li>&dotsquare; Railways Booking</li>
            <li>&dotsquare; Travel Insurance</li>
            <li>&dotsquare; Package Tours</li>
            <li>&dotsquare; Insurance</li>
            <li>&dotsquare; Guide Books</li>
          </ul>
          </p>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <div class="row">
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">40</div>
              <div class="count-title">Destinations</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">55</div>
              <div class="count-title">Happy clients</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit">9</div>
              <div class="count-title">Cities</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="count-area-content">
              <div class="count-digit"><?php
                                        foreach ($all_package as $p) { ?>
                  <?php echo $p['allpackage'] ?>
                <?php }   ?>
              </div>
              <div class="count-title">Packages</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include './includes/footer.php';
?>