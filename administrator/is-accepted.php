<?php
	echo $_GET['acc_id'];

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

    if ($_GET['pg_id'] == "rej-cmp") {
        $sql = "UPDATE complaint SET is_accepted = 1  , is_rejected = 0 where sr=".$_GET['acc_id'];
    }
    else {
        $sql = "UPDATE complaint SET is_accepted = 1 where sr=".$_GET['acc_id'];
    }
    $result= mysqli_query($conn, $sql);

    //echo mysqli_error($conn);

    mysqli_close($conn);
    
    unset($servername);
    unset($dbuser);
    unset($dbpass);
    unset($database);
    unset($conn);
    unset($sql);
    unset($result);

    if ($_GET['pg_id'] == "rej-cmp") {
        echo '<script language="javascript" type="text/javascript">window.location = "rejected-complaints.php"</script>';
        // header('location:rejected-complaints.php');
    } 
    else {
         echo '<script language="javascript" type="text/javascript">window.location = "show-complaints.php"</script>';
        // header('location:show-complaints.php');
    }
?>                                                                      