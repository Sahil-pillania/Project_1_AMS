<?php 

echo '<footer id="footer" style="
        line-height: 24px;
        letter-spacing: 0px;
        text-transform: none;
        background: #000;
        text-align:center;
        
        background: #0aa1aa;
        ">
        <div id="footer-wrap" class="be-wrap clearfix">
            <div id="copyright" style="color: #fff;">
                Copyright © 2022 Friends.Corp, Company.No - 0001 </div>
            </div>
            <div><p style="margin-bottom:0;"> '; 
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true && $_SESSION['type']=='admin'){
           echo ' <a href="../files/center.php" style="text-decoration:none; color:#000;">Home</a>';
        }else if(isset($_SESSION['loggedin']) && $_SESSION['type']=="HOD"){
            echo '<a href="/AMS/files/HOD.php" style="text-decoration:none; color:#000;">Home</a>';
        }else if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true && $_SESSION['type']=='faculty'){
            echo '<a href="../files/Home.php" style="text-decoration:none; color:#000;">Home</a>';}

            echo ' · <a href="/AMS/files/contactUs.php" style="text-decoration:none; color:#000;">Contact us</a> . <a href="#" style="text-decoration:none; color:#000;">Help</a> · <a href="../partials/_logout.php" style="text-decoration:none; color:#000;">Logout</a></p><div>
    </footer>';
?>