<?php 
  session_start();

  if (isset($_REQUEST['fp_submit'])) {
    include('connection.php');

    $username = $_REQUEST['email'];
    // $password = md5($_REQUEST['password']);

    // echo md5($_REQUEST['password']);
    $sql = "SELECT fname,email,password FROM `admin_data` WHERE email = '$username'";

    $result = mysqli_query($conn, $sql);
    $totalrows = mysqli_num_rows($result);

    $x = mysqli_fetch_row($result);
    $name = $x[0];
    $email = $x[1];
    $password = $x[2];

    // $arr = explode('@' , $username);
    if($totalrows == 1) {         
      $_SESSION['username'] = $name;

      $to      = $email; // Send email to our user
      $subject = 'Password Reset | Gbattle'; // Give the email a subject 
      $message = '
       
      Dear '.$name.',
        We have got a request of forgot password from your email.below are the username and password of yours.
        thanks for using our sevices, we are happy to help you anytime.       
      ------------------------
      Username: '.$name.'
      Password: '.$password.'
      ------------------------
       
      Please click this link to activate your account:
      http://www.pratikraval.tk/gbattle/administrator/reset-password.php?email='.$email.'&hash='.$password.'
       
      '; // Our message above including the link
                           
      $headers = 'From:support.gbattle@gmail.com' . "\r\n"; // Set from headers
      mail($to, $subject, $message, $headers); // Send our email
        echo '<h3 style="color:white; text-align:center;">We have sent a password reset link to your Registered Email.</h3>';
      // echo '<script language="javascript" type="text/javascript">window.location = "dashboard.php"</script>';
      //header('location:dashboard.php');
    }
    else {
      $msg = "Please Enter Valid Email Address !!!";
      echo "<script type='text/Javascript'>alert('$msg')</script>";
    }
    echo mysqli_error($conn);
    include('disconnect.php');  
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

  <title>Forgot Password</title>
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
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Enter email address</label>
            </div>
          </div>
          <input type="submit" name="fp_submit" value="Reset Password" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="register.">Register an Account</a> -->
          <a class="d-block small" href="index.php">Login Page</a>
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
