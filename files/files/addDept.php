<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
}
$Alert = false;
$Error = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // db connection 
    include '../partials/_dbconnect.php';
    $deptt_name = $_POST['deptt_name'];


    $sql = "INSERT INTO `departments` (`deptt_name`) VALUES ( '$deptt_name')";

    $result = mysqli_query($conn, $sql);

    
    
    if($result){
        $Alert = 'New Department has been Added Successfully.';
    }
    else
    {
        $Error = 'Unable to Add. Try again';
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

    <title>New Department | Add</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    h2.heading {
        padding: 10px 200px;
    }

    form {
        width: auto;
        padding-left: 20%;
    }
    @media only screen and (max-width: 993px){
        form{
            padding: 0;
          
        }
       h2.heading{
              padding: 11px 8px;
        }
    }
    </style>
</head>

<body>
    <?php
    include '../partials/_navbar.php';
    
    ?>

    <div class="containerMain">
        <div class="sidebar">
            <?php
            include '../partials/_sidebar.php';
            ?>
        </div>
        <div class="mainData">
            <?php
            if($Alert){
              echo '<div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16" role="img" aria-label="Success:">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <div>
                            ' . $Alert  .'
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                        </div>';

            }
            if($Error){
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center" role="alert" style="justify-content: revert;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:" id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                ' . $Error .'
                            </div><button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                            </div>';
            }

            ?>
            <div class="container">

                <form action="/AMS/files/addDept.php" method="POST" id="form">
                    <div class="text-center my-4"><u>
                            <h2 class="heading">New Department </h2>
                        </u></div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-4 col-form-label">Name of Department</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="deptt_name"
                                placeholder="Department of ....">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-6">
                            <button class="btn btn-success"> Add </button>
                            <button class="btn btn-warning" id="resetform"> Reset </button>

                        </div>
                    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/script.js">

    </script>

</body>

</html>