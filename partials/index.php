<?php
// variables
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // db connection 
    include 'partials/_dbconnect.php';
    $userID = $_POST['userID'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    // echo $type;

    //getting id and password
    $sql = "Select * from users where user_email = '$userID'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){

        // verifing the passowrd
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['user_password'])){
                  
                //    $userType = $row['user_type'];
                //    echo $userType;
                if($type == $row['user_type']){
                        $deptt = $row['deptt_name'];
                        $name = $row['user_name'];

                    // putting session according to their type of login users 
                    if($type == 'admin'){
                        $login = true;
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["type"] = $type;
                        $_SESSION["deptt_name"] = $deptt;
                        $_SESSION["user_name"] = $name;
                    
                        header("location: ../files/center.php");
                        }
                        else{
                            $showError ="Invalid Credentials in admin";
                        }
                    
                    if($type == 'HOD'){
                            $login = true;
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["type"] = $type;
                            $_SESSION["deptt_name"] = $deptt;
                            $_SESSION["user_name"] = $name;
                        
                            header("location: ../files/HOD.php");
                            }
                            else{
                                $showError ="Invalid Credentials";
                            }
                    if($type == 'faculty'){
                            $login = true;
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["type"] = $type;
                            $_SESSION["deptt_name"] = $deptt;
                            $_SESSION["user_name"] = $name;
                        
                            header("location: ../files/home.php");
                            }
                            else{
                                $showError ="Invalid Credentials";
                            }
                }else{
                    $showError ="Invalid user type";
                }

                }else
                {
                    $showError ="Password didn't match ";
                }
        

}
}
 }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>A Management System</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css?v=<?php echo time();?>" />

    <link rel="stylesheet" href="partials/partialscss.css" />
    <style>
    *,
    div.image .mainImg {
        user-select: none;
    }

    nav.navbar {
        background: transparent;
    }
    </style>

</head>

<body class="loginPage">
    <!-- Navbar -->
    <?php include 'partials/_navbar.php' ?>
    <?php
    // error message if user is unable to log in.
    if($showError){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Login Unsuccessful!</strong> ' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>


    <div class="containerMain title">
        <div class="icon">
            <div class="image">
                <img class="mainImg" src="images/main.png" alt="" width="540px">
            </div>
        </div>
        <div class="right">
            <h1 class="login">Login</h1>
            <form action="/partials/index.php" method="POST">
                <div class="txt-field my-4">
                    <input type="text" name="userID" id="userID" required>
                    <label for="User Email">User Email</label>
                    <span></span>
                </div>
                <div class="txt-field my-4">
                    <input type="password" name="password" id="password" required>
                    <label for="User Password">User Password</label>
                    <span></span>
                </div>

                <div class="userType">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="type" value="faculty" checked />
                        <label class="form-check-label" for="faculty">
                            Faculty
                        </label>
                    </div>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="type" value="HOD" />
                        <label class="form-check-label" for="HOD">
                            HOD
                        </label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="type" value="admin" />
                        <label class="form-check-label" for="admin">
                            Admin
                        </label>
                    </div>

                </div>
                <div class="text-center"><input type="submit" value="Login" class="my-4"></div>



            </form>
        </div>

    </div>


    <!-- footer  -->


    <?php   
    include 'partials/_footer.php';
    ?>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="script/script.js"></script>
</body>

</html>