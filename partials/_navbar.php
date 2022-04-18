<?php
// session_start();
echo '    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true && $_SESSION['type']=='admin'){
           echo ' <a class="navbar-brand" href="../files/center.php"><img class="logo" src="../images/logo2.png" alt="" style="width: 78px;"/></a>';
        }else if(isset($_SESSION['loggedin']) && $_SESSION['type']=="HOD"){
            echo '<div class="navbar-login-page"> <div><a class="navbar-brand" href="../files/HOD.php"><img class="logo" src="../images/logo2.png" alt="" /></a></div>
            </div>';
        }else if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true && $_SESSION['type']=='faculty'){
            echo '<div class="navbar-login-page"> <div><a class="navbar-brand" href="../files/Home.php"><img class="logo" src="../images/logo2.png" alt="" /></a></div>
            </div>';
        }else{
            echo '<div class="navbar-login-page"> <div><a class="navbar-brand" href="../index.php"><img class="logo" src="../img/logo.PNG" alt="" /></a></div>
            <div class="mx-4 pgname text-center"> <h4 style="padding-top: 12px; text-decoration: underline;"> Assessment Management System <h4> </div></div>';
        }
           echo ' <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">';

               echo '<div class="nav-bar2">' ;
               echo '<hr/>' ;
                if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'admin'){
          echo '
          <a href="center.php"><li class="nav-item">Home</li></a>';}

          if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'HOD'){
          echo '<a href="../files/HOD.php"><li class="nav-item">Home</li></a>
                <a href="contactUs.php"><li class="nav-item">Contact us</li></a>
                <a href="addTeachers.php"><li class="nav-item">Add Teachers </li></a>
                <a href="addStudent.php"><li class="side">Add Students </li></a>
                <a href="allTeachers.php"><li class="nav-item">All Teachers list</li></a>
                <a href="allStudents.php"><li class="nav-item">All Students list</li></a>
                ';}

          if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'faculty'){
          echo '<a href="../files/home.php"><li class="nav-item">Home</li></a>
                <a href="Schama.php"><li class="nav-item">Schema</li></a>
                <a href="contactUs.php"><li class="nav-item">Contact us</li></a>
                
                <a href="../partials/_logout.php"><li class="side">Logout</li></a>
                ';}

          
         
    if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'admin'){
        echo '  <a href="allUsers.php"><li class="nav-item">All Users</li></a>
        <a href="signup.php"><li class="nav-item">Add new User</li></a>
          <a href="addDept.php"><li class="nav-item">Add department</li></a>
          <a href="allDeptt.php"><li class="nav-item">All department</li></a>
          <a href="addCourses.php"><li class="nav-item">Add Courses</li></a>
          <a href="allCourses.php"><li class="nav-item">All Courses</li></a>
          <a href="addSubjects.php"><li class="nav-item">Add Subjects</li></a>
          <a href="watchQueries.php"><li class="nav-item" >watch Queries</li></a>';
    }
            echo '</div>';    


            // work when session is active 
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

               include '_dbconnect.php';

                $sql2 = 'SELECT image_url from users WHERE user_name = "'.$_SESSION["user_name"].'" AND user_type="'.$_SESSION["type"].'" AND deptt_name="'.$_SESSION["deptt_name"].'"';
                //echo $sql;
                //$image_url = $row['image_url'];
                // if($row['image_url'] == 'undefined'){
                //    $image_url = $row['image_url'];
                //     $image_url = '../images/user.png';
                // }
                $result2 = mysqli_query($conn, $sql2);
                $row =  mysqli_fetch_array($result2);
                $image_url = $row['image_url'];
               
                
               
               
               
                echo '</ul>
                <form class="d-flex" style="width: 30px;">
                   
                </form>';

                echo '<div class="user mx-4" style="display:flex">
                            <img src="../uploads/'.$image_url.'" alt="" class="userImage" placeholder="user">
                            <div class="userInfo">
                                <p style="margin-bottom:0;"><b>'.$_SESSION['user_name'].'</b></p>
                                <p class="" style="margin-bottom:0;margin-right:60px;">'.$_SESSION['deptt_name'].'</p>
                            </div>
                        </div>';

            
        echo '
        <a href="../partials/_logout.php" class="btn logout btn-danger controls" type="button" style="padding:6px 15px; text-decoration: none; border-radius: 7px;">Logout</a>
        
        ';
        }

    echo ' </div>
        </div>
    </nav>';

?>
