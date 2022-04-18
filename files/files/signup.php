<?php
session_start();
$Alert = false;
$Error = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // db connection 
    include '../partials/_dbconnect.php';
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_pass= $_POST['user_pass'];
    $user_pass_confirm= $_POST['user_pass_confirm'];
    $user_type = $_POST['user_type'];
    $deptt_name = $_POST['deptt_name'];
    $files = $_FILES['file'];

    // print_r($user_name);
    // print_r($files);
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if(in_array($filecheck,$fileextstored)){

        if($user_pass ==  $user_pass_confirm){
                $destinationfile = '../uploads/'.$filename;
                move_uploaded_file($filetmp,$destinationfile);

                $user_pass = password_hash($user_pass, PASSWORD_DEFAULT);

            //echo $user_type;
            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`, `image_url`, `user_type`,  `deptt_name`) VALUES ( '$user_name', '$user_email', '$user_pass','$destinationfile', '$user_type','$deptt_name')";

            $result = mysqli_query($conn, $sql);
            }
    }
    
    
    if($result){
        $Alert = 'New user has been Added Successfully.';
    }
    else
    {
        $Error = 'Unable to signup. Try again';
    }

}



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title class="heading">Signup | new user</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    */ form.form {
        width: 60vw;
    }

    .align input {
        width: 93%;
    }

    label.form-label::after {
        content: " *";
        font-weight: 400;
        color: red;
    }
    @media only screen and (max-width: 578px){
        #footer{
            display: none;
        }
    }
    </style>
</head>

<body>
    <?php
    include '../partials/_navbar.php';
    
    ?>
    <div class="nav-bar2 my-2">
        <?php include '../partials/_navbar2.php';?>
    </div>


    <div class="containerMain">
        <div class="sidebar">
            <?php
            include '../partials/_sidebar.php';
            ?>
        </div>
        <div class="mainData">
            <?php
            if($Alert){
              echo '<div class="alert alert-success alert-dismissible d-flex align-items-center mt-4" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16" role="img" aria-label="Success:">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <div class="mx-3">
                            ' . $Alert  .'
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                        </div>';

            }
            if($Error){
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center mt-4" role="alert" style="justify-content: revert;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:" id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div class="mx-3">
                                ' . $Error .'
                            </div><button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                            </div>';
            }
            
            
            ?>
            <div class="container">

                <form class="form" action="/AMS/files/signup.php" method="POST" enctype="multipart/form-data" id="form">
                    <div class="text-center my-4" style="width:85%;"><u>
                            <h2 class="heading">Signup for new User</h2>
                        </u></div>
                    <div class="mb-3 row">
                        <label for="department" class="col-sm-2 col-form-label">Department</label>
                        <?php
                        // linking database and fetching departments dynamic 
                            include '../partials/_dbconnect.php';
                            $sql2 = "Select * from departments";
                            $result2 = mysqli_query($conn, $sql2);
                            $rowCount = mysqli_num_rows($result2);
                        ?>

                        <select name="deptt_name" class="col-sm-9" style="margin-left :10px;" required>
                            <option value="">Select Department</option>
                            <?php
                            
                            for($i=1; $i <=$rowCount; $i++){
                                   $row =  mysqli_fetch_array($result2);
                                   echo '<option value="' .$row['deptt_name']. '">' .$row['deptt_name']. '</option>';
                            }
                            ?>


                            <!-- <option value="Department of Economics">Department of Computer Ecnomics</option> -->
                        </select>
                    </div>
                    <div class="mb-3 row align">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="user_name" placeholder="Sahil"
                                required>
                        </div>
                    </div>
                    <div class="mb-3 row align">
                        <label for="email" class="col-sm-2 col-form-label">Email ID</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="user_email" required>
                        </div>
                    </div>
                    <div class="mb-3 row align">
                        <label for="file" class="col-sm-2 col-form-label">Upload image:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                    </div>
                    <div class="mb-3 row align">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pass" name="user_pass" min="5" required>
                        </div>
                    </div>
                    <div class="mb-3 row align">
                        <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pass1" name="user_pass_confirm" min="5"
                                required>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">User type</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="user_type" value="admin" id="admin"
                                    checked required>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Admin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="user_type" id="HOD" value="HOD"
                                    required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    HOD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="user_type" id="faculty"
                                    value="faculty" required>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    faculty
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button class="btn btn-success">Sign Up</button>
                            <button class="btn btn-warning" id="resetform">Reset</button>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php
    include '../partials/_footer.php';
    
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/script.js">

    </script>
</body>

</html>