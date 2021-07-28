<a href="mycsv.php?sol_id='.$data['sr'].'&pg_id=all-cmp" class="btn btn-success btn-sm">Generate CSV</a>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                <thead>
                  <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Complaint</th>
                    <th>Area</th>
                    <th>Address</th>
                    <th>Date</th>
                    <!-- <th>is-Accepted</th>
                    <th>is-Rejected</th>
                    <th>is-Solved</th> -->
                    <th>Accepted</th>
                    <th>Rejected</th>
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
                    <!-- <th>is-Accepted</th>
                    <th>is-Rejected</th>
                    <th>is-Solved</th> -->
                    <th>Accepted</th>
                    <th>Rejected</th>
                    <th>Solved</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php

                    include ('connection.php');
                    // $servername = "localhost";
                    // $dbuser = "root";
                    // $dbpass = "";
                    // $database = "db_gri_red_sys"; 

                    // $conn = mysqli_connect($servername, $dbuser, $dbpass);

                    // if (!$conn) {
                    //   echo "Database Connection Failed.";
                    // }
                    // mysqli_select_db($conn, $database);

                    $sql = "SELECT * FROM complaint WHERE is_accepted= 0 AND is_rejected= 0 AND is_solved = 0";

                    $result= mysqli_query($conn, $sql);

                    $file = fopen("contacts.csv","w");
                    if (mysqli_num_rows($result) > 0) {
                      while ($data = mysqli_fetch_assoc($result)) {
                        fputcsv($file,$data);
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        echo '<tr>';
                          echo '<td>'.$data['sr'].'</td>';
                          echo '<td>'.$data['name'].'</td>';
                          echo '<td>'.$data['mobile_number'].'</td>';
                          echo '<td>'.$data['complaint_desc'].'</td>';
                          echo '<td>'.$data['Area'].'</td>';
                          echo '<td>'.$data['address'].'</td>';
                          echo '<td>'.$data['date'].'</td>';
                          // echo '<td>'.$data['is_accepted'].'</td>';
                          // echo '<td>'.$data['is_rejected'].'</td>';
                          // echo '<td>'.$data['is_solved'].'</td>';
                          echo '<td><a href="is-accepted.php?acc_id='.$data['sr'].'&pg_id=all-cmp" class="btn btn-primary btn-sm">Accepted</a></td>';
                          echo '<td><a href="is-rejected.php?rej_id='.$data['sr'].'&pg_id=all-cmp" class="btn btn-danger btn-sm">Rejected</a></td>';
                          echo '<td><a href="is-solved.php?sol_id='.$data['sr'].'&pg_id=all-cmp" class="btn btn-success btn-sm">Solved</a></td>';
                        echo '</tr>';

                      } 
                      fclose($file);
                    }
                    include('disconnect.php');
                  ?>
                </tbody>
              </table>