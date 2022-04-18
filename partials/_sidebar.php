<link rel="stylesheet" href="../style/style2.css?v=<?php echo time();?>">
<?php
echo '<div class="containerside">
      <div class="menu" style="position: absolute;
          left: -10px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
          margin: 10px;
          background: gray;
          padding: 15px;
          
          ">
        <ul class="sideBar">';
         if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'admin'){
          echo '<a href="center.php"><li class="side">Home</li></a>';}

          if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'HOD'){
          echo '<a href="../files/HOD.php"><li class="side">Home</li></a>
                <a href="contactUs.php"><li class="side">Contact us</li></a>
                <a href="addTeachers.php"><li class="side">Add Teachers </li></a>
                <a href="addStudent.php"><li class="side">Add Students </li></a>
                <a href="allTeachers.php"><li class="side">All Teachers list</li></a>
                <a href="allStudents.php"><li class="side">All Students list</li></a>
                ';}

          if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'faculty'){
          echo '<a href="../files/home.php"><li class="side">Home</li></a>
                <a href="Schema.php"><li class="side">Schema</li></a>
                
                <a href="../partials/_logout.php"><li class="side">Logout</li></a>
                <a href="contactUs.php"><li class="side">Contact us</li></a>
               ';}

          
         
    if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'admin'){
        echo '  <a href="allUsers.php"><li class="side">All Users</li></a>
        <a href="signup.php"><li class="side">Add new User</li></a>
          <a href="addDept.php"><li class="side">Add department</li></a>
          <a href="allDeptt.php"><li class="side">All department</li></a>
          <a href="addCourses.php"><li class="side">Add Courses</li></a>
          <a href="allCourses.php"><li class="side">All Courses</li></a>
          <a href="addSubjects.php"><li class="side">Add Subjects</li></a>
          <a href="watchQueries.php"><li class="side" >watch Queries</li></a>';
    }
      echo '   
        </ul>
      </div>
    </div>';
    ?>
