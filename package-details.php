<?php include './includes/header.php';
include './database/connection.php';


$id = $_GET['id'];
$sql = "SELECT * FROM packages WHERE id=$id";

$all_package = $con->query($sql);
$row = mysqli_fetch_assoc($all_package);
?>
<!-- <?php
     $user_id = $_SESSION['user_id'];
     ?> -->

<!-- Page Content -->
<div class="page-heading header-text">
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                    <h1> <?php echo  $row['packagelocation']  ?></h1>
               </div>
          </div>
     </div>
</div>

<div class="services">
     <div class="container">
          <div class="row">
               <div class="col-md-7">
                    <div>
                         <img src="./admin/upload/<?php echo $row['packageimage'] ?>" alt="" class="img-fluid wc-image" style=" width:  650px; height: 500px; object-fit: cover">
                    </div>
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

                    input::-webkit-outer-spin-button,
                    input::-webkit-inner-spin-button {
                         -webkit-appearance: none;
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
                                             <h5 class="form-group">Tour Booking Details</h5>
                                             <hr>
                                             <form method="post" action="./process/booking-process.php">
                                                  <input class="form-control" name="user_id" type="text" value="<?php echo $user_id; ?>" hidden>
                                                  <input class="form-control" name="package_id" type="text" value="<?php echo $id ?>" hidden>

                                                  <div class="form-group">
                                                       <span class="form-label">Your Name</span>
                                                       <input class="form-control" name="name" type="text" id="name" placeholder="Enter Phone Name">

                                                  </div>
                                                  <div class=" form-group">
                                                       <!-- <?php
                                                            // $sql = "SELECT * FROM user WHERE id=$user_id";
                                                            // $result = $con->query($sql);
                                                            // $row = mysqli_fetch_assoc($result);
                                                            ?> -->
                                                       <span class="form-label">Your Phone Number</span>
                                                       <input class="form-control" id="phonenumber" name="phonenumber" type="number" placeholder="Enter Phone Number">

                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-6">
                                                            <div class="form-group">
                                                                 <span class="form-label">Select Date</span>
                                                                 <input class="form-control" name="date" type="date" id="datePicker" required>
                                                            </div>
                                                       </div>

                                                       <div class="col-sm-6">
                                                            <div class="form-group">
                                                                 <span class="form-label">No. of Traveller</span>
                                                                 <input class="form-control" name="countpeople" type="text" onkeyup="mult(this.value);" required>
                                                            </div>
                                                       </div>

                                                  </div>
                                                  <div class="row">
                                                  </div>
                                                  <hr>
                                                  <div class="row">
                                                       <div class="col-sm-12">
                                                            <div class="form-group">
                                                                 <span class="form-label">Total Amount</span>
                                                                 <input class="form-control" name="totalamount" type="text" id="total" readonly>

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
                                   <th>Package Name</th>
                                   <th>From</th>
                                   <th>To</th>
                                   <th>Price</th>
                              </tr>
                         </thead>

                         <tbody>
                              <tr>
                                   <td><?php echo $row['packagename'] ?></td>
                                   <td>Jamnagar</td>
                                   <td><?php echo $row['packagelocation'] ?></td>
                                   <td> &circledR; <?php echo $row['packageprice'] ?> per parson</td>
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
                                        <strong>Places</strong>
                                   </p>
                              </div>
                              <div class="col-md-10 col-sm-9">
                                   <p>
                                        <?php echo  $row['packagedetails'] ?>
                                   </p>
                              </div>
                         </div>


                    </li>
                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p class="pjVpProductPolicyTitle">
                                        <strong>Day/Night</strong>
                                   </p>
                              </div>
                              <div class="col-md-10 col-sm-9">
                                   <p>
                                        <?php echo  $row['day'] ?> Day / <?php echo  $row['night'] ?> Night
                                   </p>
                              </div>
                         </div>


                    </li>
                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p>
                                        <strong>Facilities</strong>
                                   </p>
                              </div>

                              <div class="col-md-10 col-sm-9">
                                   <div>
                                        <p>
                                             24-hour Room Service, Cable / Satellite TV, Chinese dishes, Coffee Maker, Coffee shop, Color TV, Doctor-on-call, Florist, Food, Gift Shop, Hairdryer, Homely Kerala Food, In Room Safe, Internet facility, Iron / Ironing Board, Laundry, Library, Non A/c Room, North Indian Dishes, Refrigerator, Safe Deposit Lockers, South Indian Dishes, Tour Packages, Travel desk, Wi-fi Lobby, Work Desk with Lamp
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </li>
                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p class="pjVpProductPolicyTitle">
                                        <strong>Policies</strong>
                                   </p>
                              </div>
                              <div class="col-md-10 col-sm-9">
                                   <p>
                                        <?php echo  $row['packagename'] ?> Travelling all tours strat from Jamnagar.
                                   </p>
                              </div>
                         </div>
                    </li>

                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p>
                                        <strong>Charges</strong>
                                   </p>
                              </div>

                              <div class="col-md-10 col-sm-9">
                                   <p>
                                        5% GST has to be paid extra on the ticket price.
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
                                        <strong>Fees</strong>
                                   </p>
                              </div>

                              <div class="col-md-10 col-sm-9">
                                   <div>
                                        <p>
                                             Hotels and other transportaion charges extra.
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </li>
                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p>
                                        <strong>Covid Guidelines</strong>
                                   </p>
                              </div>

                              <div class="col-md-10 col-sm-9">
                                   <div>
                                        <p>
                                             Guidelines of the Center/State Government regarding Covid-19 have to be followed - Please cooperate
                                        </p>
                                   </div>
                              </div>

                         </div>
                    </li>
                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-md-2 col-sm-3">
                                   <p>
                                        <strong>With you</strong>
                                   </p>
                              </div>

                              <div class="col-md-10 col-sm-9">
                                   <div>
                                        <p>
                                             Keep Identycard
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </li>
               </ul>
          </div>

          <br>



          <br>



          <br>
          <br>
     </div>
</div>
<script>
     function getCurrentDate() {
          const today = new Date();
          const year = today.getFullYear();
          const month = String(today.getMonth() + 1).padStart(2, '0');
          const day = String(today.getDate()).padStart(2, '0');
          return `${year}-${month}-${day}`;
     }

     const datePicker = document.getElementById("datePicker");
     datePicker.setAttribute("min", getCurrentDate());

     function mult(value) {
          var x;
          x = <?php echo $row['packageprice'] ?> * value;
          document.getElementById('total').value = x;
     }
</script>

<?php include './includes/footer.php'; ?>