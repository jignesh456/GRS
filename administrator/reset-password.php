<?php
  if (isset($_REQUEST['rs_submit'])) {
    $password = md5($_REQUEST['password']);
    $con_password = md5($_REQUEST['con-password']);
    if ($password == $con_password) {
      include('connection.php');
      // echo "out";
      // print_r($_GET);
      // echo $_GET['email'];
      if (isset($_REQUEST['email'])) {
        // echo "in";
        $username = $_REQUEST['email'];
        $hash = $_REQUEST['hash'];

        $sql = "SELECT email,password FROM `admin_data` WHERE email = '$username'";

        $result = mysqli_query($conn, $sql);
        $totalrows = mysqli_num_rows($result);
        $x = mysqli_fetch_row($result);
        $password_db = $x[1];

        if ($hash == $password_db) {
           
          $sql = "UPDATE `admin_data` SET `password` = '$password' WHERE  `email` = '$username'";
          mysqli_query($conn, $sql);
          if(!mysqli_query($conn, $sql)) {
            $msg = mysqli_error($conn);
            echo "<script type='text/Javascript'>alert('$msg');</script>";
          }
          echo '<script language="javascript" type="text/javascript">alert("Password Changed Successfully...")</script>';
          echo '<script language="javascript" type="text/javascript">window.location = "index.php"</script>';
          //header('location:index.php');
        
          echo mysqli_error($conn);
          include('disconnect.php');
        }
      }
    }
    else {
      $msg = "Password Not Match!!!";
      echo "<script type='text/Javascript'>alert('$msg');</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reset Password</title>
  <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon' />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="password" id="Password" name="password" class="form-control" placeholder="Password" required="required">
                  <label for="Password">Password</label>
                </div>
              </div>
          </div>
          <div class="form-group">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="con-password" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
          </div>
          <!-- <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div> -->
          <input type="submit" name="rs_submit" value="Reset" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.php">Register an Account</a> -->
          <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
