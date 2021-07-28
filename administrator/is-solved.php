<?php
	echo $_GET['sol_id'];

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

     if ($_GET['pg_id'] == "acc-cmp") {
        $sql = "UPDATE complaint SET  is_solved = 1 , is_accepted = 0 where sr=".$_GET['sol_id'];
        echo mysqli_error($conn);
    }
    else {
        $sql = "UPDATE complaint SET is_solved = 1 where sr=".$_GET['sol_id'];
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

    if ($_GET['pg_id'] == "acc-cmp") {
        echo '<script language="javascript" type="text/javascript">window.location = "accepted-complaints.php"</script>';
        // header('location:acceptedrejected-complaints.php');
    }
    else {
         echo '<script language="javascript" type="text/javascript">window.location = "show-complaints.php"</script>';
        // header('location:show-complaints.php');
    }
?>