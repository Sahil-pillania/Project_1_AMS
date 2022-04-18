<?php
ob_start();
?>
<?php

     session_start();
     echo "Logging you out please wait...";
     session_unset();
     session_destroy();
     echo "<script>location='../index.php?logout=logged_out'</script>";
    
     ob_end_flush();
    exit();


?>
