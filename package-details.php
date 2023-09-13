<?php include './includes/header.php';
include './database/connection.php';

$sql = "SELECT * FROM packages";
$all_package = $con->query($sql);

?>
<!-- Page Content -->
<div class="page-heading header-text">
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                   
                    <h1><?php echo $row["packageprice"]  ?></h1>

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
                         <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid wc-image">
                    </div>

                    <br>

                    <div class="row">
                         <div class="col-sm-4 col-6">
                              <div>
                                   <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">
                              </div>
                              <br>
                         </div>
                         <div class="col-sm-4 col-6">
                              <div>
                                   <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">
                              </div>
                              <br>
                         </div>
                         <div class="col-sm-4 col-6">
                              <div>
                                   <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">
                              </div>
                              <br>
                         </div>
                    </div>

                    <br>
               </div>

               <style>
                    .section {
                         position: relative;
                         height: 100vh;
                    }

                    .section .section-left {
                         position: absolute;
                         top: 50%;
                         left: 50%;
                         right: 0;
                         -webkit-transform: translateY(-50%);
                         transform: translateY(-50%);
                    }

                    .booking-form {
                         background-color: #fff;
                         padding: 50px 20px;
                         -webkit-box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
                         box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
                         border-radius: 4px;
                    }

                    .booking-form .form-group {
                         position: relative;
                         margin-bottom: 30px;
                    }

                    .booking-form .form-control {
                         background-color: #ebecee;
                         border-radius: 4px;
                         border: none;
                         height: 40px;
                         -webkit-box-shadow: none;
                         box-shadow: none;
                         color: #3e485c;
                         font-size: 14px;
                    }

                    .booking-form .form-control::-webkit-input-placeholder {
                         color: rgba(62, 72, 92, 0.3);
                    }

                    .booking-form .form-control:-ms-input-placeholder {
                         color: rgba(62, 72, 92, 0.3);
                    }

                    .booking-form .form-control::placeholder {
                         color: rgba(62, 72, 92, 0.3);
                    }

                    .booking-form input[type="date"].form-control:invalid {
                         color: rgba(62, 72, 92, 0.3);
                    }

                    .booking-form select.form-control {
                         -webkit-appearance: none;
                         -moz-appearance: none;
                         appearance: none;
                    }

                    .booking-form select.form-control+.select-arrow {
                         position: absolute;
                         right: 0px;
                         bottom: 4px;
                         width: 32px;
                         line-height: 32px;
                         height: 32px;
                         text-align: center;
                         pointer-events: none;
                         color: rgba(62, 72, 92, 0.3);
                         font-size: 14px;
                    }

                    .booking-form select.form-control+.select-arrow:after {
                         content: '\279C';
                         display: block;
                         -webkit-transform: rotate(90deg);
                         transform: rotate(90deg);
                    }

                    .booking-form .form-label {
                         display: inline-block;
                         color: #3e485c;
                         font-weight: 700;
                         margin-bottom: 6px;
                         margin-left: 7px;
                    }

                    .booking-form .submit-btn {
                         display: inline-block;
                         color: #fff;
                         background-color: #1e62d8;
                         font-weight: 700;
                         padding: 14px 30px;
                         border-radius: 4px;
                         border: none;
                         -webkit-transition: 0.2s all;
                         transition: 0.2s all;
                    }

                    .booking-form .submit-btn:hover,
                    .booking-form .submit-btn:focus {
                         opacity: 0.9;
                    }

                    .booking-cta {
                         margin-top: 80px;
                         margin-bottom: 30px;
                    }

                    .booking-cta h1 {
                         font-size: 52px;
                         text-transform: uppercase;
                         color: #fff;
                         font-weight: 700;
                    }

                    .booking-cta p {
                         font-size: 16px;
                         color: rgba(255, 255, 255, 0.8);
                    }
               </style>
               <div id="booking" class="section">
                    <div class="section-center">
                         <div class="container">
                              <div class="row">
                                  
                                   <div class="col-md-12 col-md-pull-8">
                                        <div class="booking-form">
                                             <form>
                                                  <div class="form-group">
                                                       <span class="form-label">Your Destination</span>
                                                       <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-sm-6">
                                                            <div class="form-group">
                                                                 <span class="form-label">Check In</span>
                                                                 <input class="form-control" type="date" required>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-6">
                                                            <div class="form-group">
                                                                 <span class="form-label">Check out</span>
                                                                 <input class="form-control" type="date" required>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="row">
                                                       <div class="col-sm-4">
                                                            <div class="form-group">
                                                                 <span class="form-label">Rooms</span>
                                                                 <select class="form-control">
                                                                      <option>1</option>
                                                                      <option>2</option>
                                                                      <option>3</option>
                                                                 </select>
                                                                 <span class="select-arrow"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-4">
                                                            <div class="form-group">
                                                                 <span class="form-label">Adults</span>
                                                                 <select class="form-control">
                                                                      <option>1</option>
                                                                      <option>2</option>
                                                                      <option>3</option>
                                                                 </select>
                                                                 <span class="select-arrow"></span>
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-4">
                                                            <div class="form-group">
                                                                 <span class="form-label">Children</span>
                                                                 <select class="form-control">
                                                                      <option>0</option>
                                                                      <option>1</option>
                                                                      <option>2</option>
                                                                 </select>
                                                                 <span class="select-arrow"></span>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="form-btn">
                                                       <button class="submit-btn">Book Now</button>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
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
                                   <a href="mailto:john@carsales.com">john@carsales.com</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <div class="modal-body">
                    <form action="./process/booking-process.php" method="post" class="form" id="contact">
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
                                   </div>
                              </div>

                              <div class="col-md-6">
                                   <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Enter email address" required>
                                   </div>
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <input type="text" pattern="0-9" class="form-control" name="phonenumber" placeholder="Enter phone number" required>
                                   </div>
                              </div>

                              <!-- <div class="col-md-6">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="From date" required="">
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="To date" required="">
                              </div>
                           </div>
                        </div>
                     </div> -->
                         </div>
               </div>
               </form>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Send Request</button>
               </div>
          </div>
     </div>
</div>



<?php include './includes/footer.php'; ?>