<?php 
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark secondBar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MENU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

             <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
         if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'admin'){
          echo '<a href="center.php"><li class="nav-item">Home</li></a>';}

          if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'HOD'){
          echo '<a href="HOD.php"><li class="nav-item">Home</li></a>
                <a href="contactUs.php"><li class="nav-item">Contact us</li></a>
                <a href="addTeachers.php"><li class="nav-item">Add Teachers </li></a>
                <a href="addStudent.php"><li class="side">Add Students </li></a>
                <a href="allTeachers.php"><li class="nav-item">All Teachers list</li></a>
                <a href="allStudents.php"><li class="nav-item">All Students list</li></a>
                <li class="nav-item">About us</li>';}

          if(isset($_SESSION['loggedin']) && $_SESSION['type']== 'faculty'){
          echo '<a href="home.php"><li class="nav-item">Home</li></a>
                <a href=""><li class="nav-item">Schema</li></a>
                <a href="seeStdData.php"><li class="nav-item"> See Data</li></a>
                <a href="updateStudentData.php"><li class="nav-item"> Update Data</li></a>
                <a href="contactUs.php"><li class="nav-item">Contact us</li></a>
                <li class="nav-item">About us</li>';}

          
         
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
       
     echo'   </ul>
</div>
</div>
</nav>';
?>