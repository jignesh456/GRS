<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accepted Complaints</title>
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
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Accepted Complaints</li>
        </ol> -->

        <!-- Page Content -->
        <div class="card mb-3">
          <div class="card-header">
              <i class="fas fa-table"></i> Accepted Complaints
          </div>
          <div class="card-body">   
            <div class="table-responsive" >
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Complaint</th>
                    <th>Area</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Reject</th>
                    <th>Solved</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Complaint</th>
                    <th>Area</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Reject</th>
                    <th>Solved</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                      include('connection.php');
                    // $servername = "localhost";
                    //$dbuser = "root";
                    //$dbpass = "";
                    //$database = "db_gri_red_sys"; 

                    //$conn = mysqli_connect($servername, $dbuser, $dbpass);

                    //if (!$conn) {
                    //  echo "Database Connection Failed.";
                    //}
                    //mysqli_select_db($conn, $database); 

                    $sql = "SELECT * FROM complaint where is_accepted = 1";

                    $result= mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      while ($data = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                          echo '<td>'.$data['sr'].'</td>';
                          echo '<td>'.$data['name'].'</td>';
                          echo '<td>'.$data['mobile_number'].'</td>';
                          echo '<td>'.$data['complaint_desc'].'</td>';
                          echo '<td>'.$data['Area'].'</td>';
                          echo '<td>'.$data['address'].'</td>';
                          echo '<td>'.$data['date'].'</td>';            
                          echo '<td><a href="is-rejected.php?rej_id='.$data['sr'].'&pg_id=acc-cmp" class="btn btn-danger btn-sm">Rejected</a></td>';    
                          echo '<td><a href="is-solved.php?sol_id='.$data['sr'].'&pg_id=acc-cmp" class="btn btn-success btn-sm">Solved</a></td>';
                        echo '</tr>';
                      } 
                    }
                    include('disconnect.php');
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <?php
          // print_r( timezone_identifiers_list());
            date_default_timezone_set("Asia/Kolkata");
          ?>
          <div class="card-footer small text-muted">Last Updated on <?php echo date('d-m-Y'); ?> at <?php echo date('h:i', time())."&nbsp"; echo date('A'); ?></div>
        </div> <!-- /.card mb-3 -->
  
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
