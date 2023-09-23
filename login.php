<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="icon" href="./assets/images/logo.png" type="image/x-icon">
  <title>Login Now</title>
</head>

<body>
  <style>
    body {
      font-family: "Roboto", sans-serif;
      background-color: #f8fafb;
    }

    p {
      color: #b3b3b3;
      font-weight: 300;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6 {
      font-family: "Roboto", sans-serif;
    }

    a {
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
    }

    a:hover {
      text-decoration: none !important;
    }

    .content {
      padding: 7rem 0;
    }

    h2 {
      font-size: 20px;
    }

    @media (max-width: 991.98px) {
      .content .bg {
        height: 500px;
      }
    }

    .content .contents,
    .content .bg {
      width: 50%;
    }

    @media (max-width: 1199.98px) {

      .content .contents,
      .content .bg {
        width: 100%;
      }
    }

    .content .contents .form-group,
    .content .bg .form-group {
      position: relative;
    }

    .content .contents .form-group label,
    .content .bg .form-group label {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: .3s all ease;
      -o-transition: .3s all ease;
      transition: .3s all ease;
    }

    .content .contents .form-group input,
    .content .bg .form-group input {
      background: transparent;
      border-bottom: 1px solid #ccc;
    }

    .content .contents .form-group.first,
    .content .bg .form-group.first {
      border-top-left-radius: 7px;
      border-top-right-radius: 7px;
    }

    .content .contents .form-group.last,
    .content .bg .form-group.last {
      border-bottom-left-radius: 7px;
      border-bottom-right-radius: 7px;
    }

    .content .contents .form-group label,
    .content .bg .form-group label {
      font-size: 12px;
      display: block;
      margin-bottom: 0;
      color: #b3b3b3;
    }

    .content .contents .form-group.focus,
    .content .bg .form-group.focus {
      background: #fff;
    }

    .content .contents .form-group.field--not-empty label,
    .content .bg .form-group.field--not-empty label {
      margin-top: -25px;
    }

    .content .contents .form-control,
    .content .bg .form-control {
      border: none;
      padding: 0;
      font-size: 20px;
      border-radius: 0;
    }

    .content .contents .form-control:active,
    .content .contents .form-control:focus,
    .content .bg .form-control:active,
    .content .bg .form-control:focus {
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .content .bg {
      background-size: cover;
      background-position: center;
    }

    .content a {
      color: #888;
      text-decoration: underline;
    }

    .content .btn {
      height: 54px;
      padding-left: 30px;
      padding-right: 30px;
    }
  </style>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="./assets/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid" />
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>Log In to <strong>KrishnaTourism</strong></h3>
                <p class="mb-4">
                  Welcome Back !!
                </p>
              </div>
              <form action="./process/login-process.php" method="post">
                <div class="form-group first">
                  <input type="text" class="form-control" name="username" placeholder="Username" />
                </div>
                <div class="form-group last mb-4">
                  <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary" />

                <br />
              </form>
              <form action="./index.php">
                <input type="submit" value="Cancel" class="btn text-white btn-block btn-danger" />
              </form>

              <span class="d-block text-left my-4 text-muted">
                I don't have Account <a href="./register.php">Register here</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/jquery/jquery.min.js"></script>
</body>

</html>