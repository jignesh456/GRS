<?php 
  session_start();

  include ('connection.php');
  // for total number of compalints
  $qry1 = "SELECT * FROM `complaint`";
  
  $result1 = mysqli_query($conn, $qry1);
  $total_cmp = 0;
   if(mysqli_num_rows($result1) > 0) {
    // echo $total_cmp;
      while ($data = mysqli_fetch_assoc($result1)) {
          $total_cmp = $total_cmp + 1; 
          // echo $total_cmp;
      }
    } 
    echo mysqli_error($conn);
    // echo $total_cmp;

    //for accepted complaints
    $qry2 = "SELECT * FROM `complaint` WHERE is_accepted = 1";
  
  $result2 = mysqli_query($conn, $qry2);
  $acc_cmp = 0;
   if(mysqli_num_rows($result2) > 0) {
    // echo $acc_cmp;
      while ($data = mysqli_fetch_assoc($result2)) {
          $acc_cmp = $acc_cmp + 1; 
          // echo $acc_cmp;
      }
    } 
    echo mysqli_error($conn);
    // echo $acc_cmp;
    $unacc_cmp = $total_cmp - $acc_cmp;

     //for rejected complaints
    $qry3 = "SELECT * FROM `complaint` WHERE is_rejected = 1";
  
  $result3 = mysqli_query($conn, $qry3);
  $rej_cmp = 0;
   if(mysqli_num_rows($result3) > 0) {
    // echo $rej_cmp;
      while ($data = mysqli_fetch_assoc($result3)) {
          $rej_cmp = $rej_cmp + 1; 
          // echo $rej_cmp;
      }
    } 
    echo mysqli_error($conn);
    // echo $rej_cmp;
    $unrej_cmp = $total_cmp - $rej_cmp;

    //for rejected complaints
    $qry4 = "SELECT * FROM `complaint` WHERE is_solved = 1";
  
  $result4 = mysqli_query($conn, $qry4);
  $sol_cmp = 0;
   if(mysqli_num_rows($result4) > 0) {
    // echo $sol_cmp;
      while ($data = mysqli_fetch_assoc($result4)) {
          $sol_cmp = $sol_cmp + 1; 
          // echo $sol_cmp;
      }
    } 
    echo mysqli_error($conn);
    // echo $sol_cmp;
    $unsol_cmp = $total_cmp - $sol_cmp;

    // for bar chart 
    $qry5 = "SELECT date FROM `complaint`";
    $result5 = mysqli_query($conn, $qry5);
    echo mysqli_error($conn);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>
  <link rel='shortcut icon' href='images/favicon.png' type='image/x-icon' />

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- header is included here -->
  <?php
    include ('header.php');
  ?>
  <!-- header ends --> 

  <div id="wrapper">

    <!-- Sidebar is included here -->
    <?php
      include ('sidebar.php');
    ?>
    <!-- Sidebar ends -->

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
       <!--  <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol> -->

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color:#370154; color:white;">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-globe"></i>
                </div>
                <div class="mr-5">Arrived Complaints</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="show-complaints.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">Accepted Complaints</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="accepted-complaints.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-tasks"></i>
                </div>
                <div class="mr-5">Solved Complaints</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="solved-complaints.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-ban"></i>
                </div>
                <div class="mr-5">Rejected Complaints</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="rejected-complaints.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Accepted Complaints Chart</div>
              <div class="card-body">
                <canvas id="myPieChartAcc" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Last Updated on <?php echo date('d-m-Y'); ?> at <?php echo date('h:i', time())."&nbsp"; echo date('A'); ?></div>
            </div>
          </div>
          <div class="col-lg-4 ">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Rejected Complaints Chart
              </div>
              <div class="card-body">
                <canvas id="myPieChartRej" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Last Updated on <?php echo date('d-m-Y'); ?> at <?php echo date('h:i', time())."&nbsp"; echo date('A'); ?> 
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-pie"></i>
                Solved Complaints Chart
              </div>
              <div class="card-body">
                <canvas id="myPieChartSol" width="100%" height="100"></canvas>
              </div>
              <div class="card-footer small text-muted">Last Updated on <?php echo date('d-m-Y'); ?> at <?php echo date('h:i', time())."&nbsp"; echo date('A'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Footer is included here -->
      <?php
        include ('footer.php');
      ?>
      <!-- footer ends -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php
    include('logout.php');
  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
   <!--  <script src="js/demo/chart-bar-demo.js"></script> -->
 <script type="text/javascript">
   // Set new default font family and font color to mimic Bootstrap's default styling
  Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#292b2c';
 </script>
  <!-- <script src="js/demo/chart-pie-demo.js"></script> -->
  <!-- // relpacemnent  of chart-pie-demo -->
  <script type="text/javascript">
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChartAcc");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Accepted Complaints", "Remaining Complaints"],
        datasets: [{
          data: [<?php echo $acc_cmp; ?> , <?php echo $unacc_cmp; ?>],
          backgroundColor: ['#007bff', '#212529'],
        }],
      },
    });

    var ctx = document.getElementById("myPieChartRej");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Rejected Complaints", "Remaining Complaints"],
        datasets: [{
          data: [<?php echo $rej_cmp; ?> , <?php echo $unrej_cmp; ?>],
          backgroundColor: ['#dc3545', '#212529'],
        }],
      },
    });

    var ctx = document.getElementById("myPieChartSol");
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Solved Complaints", "Remaining Complaints"],
        datasets: [{
          data: [<?php echo $sol_cmp; ?> , <?php echo $unsol_cmp; ?>],
          backgroundColor: ['#28a745', '#212529'],
        }],
      },
    });

  </script>

</body>

</html>
