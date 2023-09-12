<?php include './includes/header.php'; ?>
    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><sup>€</sup>300 - <sup>€</sup>4000</h1>

            <span>
                Lorem ipsum dolor sit amet.
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div>
            <img src="./admin/upload/<?php echo $row["packageimage"] ?>" alt="Image" class="img-fluid" style=" width:  400px; height: 400px; object-fit: cover">

              <!-- <img src="" alt="" class="img-fluid wc-image"> -->
            </div>

            <br>

            <br>
          </div>

          <div class="col-md-5">
            <form action="#" method="post" class="form">
              <ul class="list-group list-group-flush">
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Available</span>

                         <strong class="pull-right">Spring</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Nights</span>

                         <strong class="pull-right">20 nights</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Breakfast</span>

                         <strong class="pull-right">Yes</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Flight included</span>

                         <strong class="pull-right">Yes</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Free parking spot</span>

                         <strong class="pull-right">Yes</strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Free WiFi</span>

                         <strong class="pull-right">Yes</strong>
                    </div>
               </li>
              </ul>
            </form>

            <br>
          
            <a href="./booking.php" data-toggle="modal" data-target="#exampleModal" class="filled-button btn-block text-center">Book Now</a>

            <br>
          </div>
        </div>

        <div class="tabs-content" style="display: block;">
          <h4>Availability &amp; Prices</h4>

          <div class="table-responsive">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
                 <thead>
                      <tr>
                           <th>Package</th>
                           <th>From</th>
                           <th>To</th>
                           <th>Price</th>
                      </tr>
                 </thead>
                 
                 <tbody>
                      <tr>
                           <td></td>
                           <td>01-06-2020</td>
                           <td>31-12-2020</td>
                           <td>€ 300 per night</td>
                      </tr>

                      <tr>
                           <td></td>
                           <td>01-06-2020</td>
                           <td>31-12-2020</td>
                           <td>€ 300 per night</td>
                      </tr>

                      <tr>
                           <td></td>
                           <td>01-06-2020</td>
                           <td>31-12-2020</td>
                           <td>€ 300 per night</td>
                      </tr>
                      <tr>
                           <td></td>
                           <td>01-06-2020</td>
                           <td>31-12-2020</td>
                           <td>€ 4000 total price</td>
                      </tr>
                 </tbody>
            </table>
          </div>
        </div>

        <br>

        <div class="tabs-content" style="display: block;">
          <h4>INFO</h4>

          <ul class="list-group list-group-no-border">
              <li class="list-group-item">
                 <div class="row">
                      <div class="col-md-2 col-sm-3">
                           <p class="pjVpProductPolicyTitle">
                                <strong>Check-in</strong>
                           </p>
                      </div>
                      <div class="col-md-10 col-sm-9">
                           <p>
                                Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                           </p>
                      </div>
                 </div>
              </li>

              <li class="list-group-item">
                   <div class="row">
                        <div class="col-md-2 col-sm-3">
                             <p>
                                  <strong>Check-out</strong>
                             </p>
                        </div>

                        <div class="col-md-10 col-sm-9">
                             <p>
                                  Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum.
                             </p>
                        </div>
                   </div>
              </li>

              <li class="list-group-item">
                   <div class="row">
                        <div class="col-md-2 col-sm-3">
                             <p>
                                  <strong>Pets</strong>
                             </p>
                        </div>
                        <div class="col-md-10 col-sm-9">
                             <p>
                                  Not allowed
                             </p>
                        </div>
                   </div>
              </li>

              <li class="list-group-item">
                   <div class="row">
                        <div class="col-md-2 col-sm-3">
                             <p>
                                  <strong>Policies</strong>
                             </p>
                        </div>
                        <div class="col-md-10 col-sm-9">
                             <div>
                                  <p>
                                       Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                        Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                  </p>
                             </div>
                        </div>
                   </div>
              </li>
              
              <li class="list-group-item">
                   <div class="row">
                        <div class="col-md-2 col-sm-3">
                             <p>
                                  <strong>Fees</strong>
                             </p>
                        </div>

                        <div class="col-md-10 col-sm-9">
                             <div>
                                  <p>
                                       Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                        Donec dapibus semper sem, ac ultrices sem sagittis ut. Donec sit amet erat elit, sed pellentesque odio. In enim ligula, euismod a adipiscing in, laoreet quis turpis. Ut accumsan dignissim rutrum. <br>
                                  </p>
                             </div>
                        </div>
                   </div>
              </li>
          </ul>
        </div>

        <br>

        <div class="row">
          <div class="col-lg-9">
            <div class="tabs-content" style="display: block;">
              <h4>Map</h4>

              <img src="assets/images/map.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3">
            <div class="tabs-content">
              <h4>Contact Details</h4>

              <p>
                <span>Name</span>
              
                <br>
              
                <strong>John Smith</strong>
              </p>
              
              <p>
                <span>Phone</span>
              
                <br>
                
                <strong>
                  <a href="tel:123-456-789">123-456-789</a>
                </strong>
              </p>
              
              <p>
                <span>Mobile phone</span>
              
                <br>
                
                <strong>
                  <a href="tel:456789123">456789123</a>
                </strong>
              </p>
              
              <p>
                <span>Email</span>
              
                <br>
                
                <strong>
                  <a href="#">contact@krishnatourism.com</a>
                </strong>
              </p>
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