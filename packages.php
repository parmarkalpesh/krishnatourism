<?php
include './includes/header.php';
include './database/connection.php';
$sql = "SELECT * FROM packages";
$all_package = $con->query($sql);
?>

<!-- Page Content -->
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Tour Packages</h1>
        <!-- <span>Lorem ipsum dolor sit amet.</span> -->
      </div>
    </div>
  </div>
</div>
<div class="services">
  <div class="container">
    <div class="row">
      <?php
      while ($row = mysqli_fetch_assoc($all_package)) {
      ?>
        <div class="col-md-4">
          <div class="service-item">
            <img src="./admin/upload/<?php echo $row["packageimage"] ?>" alt="Image" class="img-fluid" style=" width:  400px; height: 400px; object-fit: cover">
            <div class="down-content">
							<h4><?php echo $row["packagename"] ?></h4>
              <div style="margin-bottom:10px;">
                <span> <?php echo $row["packageprice"] ?> </span>
              </div>

              <p><?php echo $row["packagedetails"] ?></p>
							<a href="package-details.php?id=<?php echo $row['packageid'] ?>"><button type="button" class="btn btn-primary">view Details</button></a>

            </div>
          </div>

          <br>
        </div>

      <?php } ?>
    </div>

    <br>
    <br>

    <nav>
      <ul class="pagination pagination-lg justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">«</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">»</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>

    <br>
    <br>
    <br>
    <br>
  </div>
</div>

<?php
include './includes/footer.php';
?>