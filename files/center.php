<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
}
//echo $_SESSION["deptt_name"];
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

    <title>Contol Center || Admin</title>
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
 <style>


@media screen and (max-width: 700px) {
  .box{
    margin: auto;
  }
  .cards{
    display: block;
  }
  .innerContent{
    width: 381%;
  }
  .body .containerMain{
    min-height: 1366px;
  }
    #footer{
      display: none;
  }
}


    </style>
</head>

<body class="body">
    <?php include '../partials/_navbar.php';?>

    <div class="containerMain">
        <div class="sidebar">
            <?php include '../partials/_sidebar.php';?>
        </div>


        <div class="mainData">
            <h1 class="text-center my-3 heading">Dashboard</h1>
            <div class="cards my-3">
                <div class="box">
                    <div class="container">
                        <a href="signup.php">
                            <div class="innerContent">
                                <div class="inner-box">
                                    <h3 class="text">Add new User</h3>
                                    <span></span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="box">
                    <div class="container">
                        <a href="addDept.php">
                            <div class="innerContent">
                                <div class="inner-box">
                                    <h3 class="text">Add new Department</h3>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="container">
                        <a href="addCourses.php">
                            <div class="innerContent">
                                <div class="inner-box">
                                    <h3 class="text">Add new Courses</h3>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="container">
                        <a href="addSubjects.php">
                            <div class="innerContent">
                                <div class="inner-box">
                                    <h3 class="text">Add new Subjects</h3>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="box">
                    <div class="container">
                        <a href="watchQueries.php">
                            <div class="innerContent">
                                <div class="inner-box">
                                    <h3 class="text">Watch all Queries</h3>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="box">
                    <div class="container">
                        <div class="innerContent">
                            <div class="inner-box">
                                <h3 class="text">More...</h3>
                                <span></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include '../partials/_footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>

    </script>

</body>

</html>