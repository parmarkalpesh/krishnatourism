 <?php
  include './includes/header.php';
  include './database/connection.php';
  ?>
 <?php
  $user_id = $_SESSION['user_id'];
  $user_name = $_SESSION['tms'];
  ?>

 <!-- Page Content -->
 <div class="page-heading header-text">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>My History</h1>
       </div>
     </div>
   </div>
 </div>



 <div class="more-info about-info">
   <div class="more-info">
     <div class="container">
       <div class="section-heading">
         <h2>Booking History</h2>
       </div>
       <div class="col-md-6 align-self-center">
         <div class="right-content">
         </div>
       </div>
     </div>
   </div>
 </div>

 <div class="table-wrapper table-responsive">
   <table class="table">
     <thead>
       <tr>
         <th>
           <h6>Username</h6>
         </th>
         <th>
           <h6>Name</h6>
         </th>
         <th>
           <h6>Package Name</h6>
         </th>
         <th>
           <h6>Booking Date</h6>
         </th>
         <th>
           <h6>No. of Traveller</h6>
         </th>
         <th>
           <h6>Total Amount</h6>
         </th>
         <th>
           <h6>Status</h6>
         </th>
         <th>
           <h6>Action</h6>
         </th>
       </tr>
       <!-- end table row -->
     </thead>
     <tbody>
       <!-- <form > -->
         <?php
          $sql = "SELECT packages.packagename as pname,booking.id,booking.name,booking.date,booking.countpeople,booking.totalamount,booking.status FROM packages,booking where packages.id=booking.package_id and user_id=$user_id";
          $data = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_assoc($data)) {
            echo "  <tr>
                      <input type='hidden' value=' . $row[id] . ' id='id' name='id'>
                      <td>$user_name</td>
                      <td>" . $row['name'] . "</td>
                      <td>" . $row['pname'] . "</td>
                      <td>" . $row['date'] . "</td>
                      <td>" . $row['countpeople'] . "</td>
                      <td>" . $row['totalamount'] . "</td>
                      <td>" . $row['status'] . "</td>
                      <td>
                      <form action='./process/cancel-booking.php?id=$row[id]' method='post'>                              
                      <input type='submit' id='cancle' class='btn btn-danger'  name='submit' value='Cancel' />
                        </form>
                      </td>
                  </tr>";
          }
          ?>
         </tr>
         <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <!-- </form> -->
         <script>
  $(document).ready(function() {
    $(".cancel-btn").click(function() {
      var bookingId = $(this).data('booking-id');
      var button = $(this);

      // Make an AJAX request to the cancellation process page
      $.ajax({
        url: './process/cancel-booking.php?id=' + bookingId,
        type: 'POST',
        success: function(response) {
          // Handle the response as needed
          // For example, you can hide the button upon success
          button.hide();
          alert('Booking canceled successfully');
        },
        error: function() {
          alert('Error cancelling booking');
        }
      });
    });
  });
</script>

       <!-- end table row -->
     </tbody>
   </table>
   <!-- end table -->
 </div>
 </div>
 <!-- end card -->
 </div>
 <!-- end col -->
 </div>
 <!-- end row -->
 </div>
 <br>
 <br>

 <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
 <?php
  include './includes/footer.php';
  ?>