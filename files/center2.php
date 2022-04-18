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
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>" />
    <!-- <style>
    .container1 {
        position: relative;
        display: flex;
        margin-bottom: 15px;
        min-height: 540px;
    }

    .sidebar {
        width: 250px;

        left: 0;
    }

    .mainData {
        position: absolute;
        width: 75vw;
        left: 310px;
        min-height: 510px;


    }

    body {
        min-height: 100vh;
        overflow-x: hidden;
    }


    .cards {
        display: flex;
        flex-wrap: wrap;


    }

    .cards .box {
        width: 30%;
        margin: 1rem;
        cursor: pointer;
        transition: 0.5s;

    }

    .cards .box:hover {

        animation: size 0.3s ease-in-out;


    }

    @keyframes size {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1.07);
        }
    }

    .cards .box:hover .innerContent {
        background: #2b59ff;
    }

    .innerContent {
        position: relative;
        background: gray;
        background-size: cover;
        background-repeat: no-repeat;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.55);
        border-radius: 30px;
        background-position: center;
        text-align: center;
        min-height: 200px;
        height: auto;

        color: rgb(255, 255, 255);
        font-size: 1.5rem;

    }

    h3.text {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    body.body {
        min-height: 100%;
    }


    @media screen and (max-width: 1282px) {
        .container1 {
            min-height: 700px;
        }
    }
    </style> -->
</head>

<body class="body">
    <?php include '../partials/_navbar.php';?>
    <div class="container1">
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

    <?php include '../partials/_footer.php'; ?>
    <!-- <style>
    .footer {
        /* font: normal normal 14px "Open Sans", "Open Sans", "Arial", sans-serif; */
        color: #868686;
        line-height: 14px;
        letter-spacing: 0px;
        text-transform: none;
        background: #000;
    }
    </style>
    <footer id="footer" style="color: #868686;
        line-height: 39px;
        letter-spacing: 0px;
        text-transform: none;
        background: #000;
        text-align:center;
        border-radius: 15px;
        ">
        <div id="footer-wrap" class="be-wrap clearfix">
            <div id="copyright">
                © Copyright 2022 Friends.Company No - 0001 </div>
        </div>
    </footer> -->

    <!-- Optional JavaScript; choose one of the two! 
    -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>