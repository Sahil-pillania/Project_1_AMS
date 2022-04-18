<?php
ob_start();
?>
<?php

     session_start();
     echo "Logging you out please wait...";
     session_unset();
     session_destroy();
     echo "<script>location='../index.php?logout=logged_out'</script>";
    // header("Location: ../index.php");
     //header("Location: https://assessmentmanagementsystem.000webhostapp.com/index.php?logout=logged_out");
     ob_end_flush();
    exit();


?>
