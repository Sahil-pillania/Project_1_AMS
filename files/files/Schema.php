<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
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

    <title>AMS | Schema </title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
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
            <div class="container table-responsive">
                <table class="table table-bordered table-info my-4" style="border: 2px solid aqua; border-radius: 4px;">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Registration No</th>
                            <th scope="col">Class roll No</th>
                            <th scope="col">University roll no</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Maximum attendence</th>
                            <th scope="col">Obtained attendence</th>
                            <th scope="col">Total Attendence</th>
                            <th scope="col">Sessional 1</th>
                            <th scope="col">Sessional 2</th>
                            <th scope="col">Sessional Total</th>
                            <th scope="col">Assignment 1</th>
                            <th scope="col">Assignment 2</th>
                            <th scope="col">Assignment total</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Registration No alloted by University/college</td>
                            <td>Student class roll no</td>
                            <td>Student University roll no/exam roll no </td>
                            <td>Name of Student</td>
                            <td>Valid Email ID of student</td>
                            <td>Valid Phone number of student</td>
                            <td>Maximum number of lecture taken during semester</td>
                            <td>Number of lecture attended by particular student</td>
                            <td>Total marks calculated </td>
                            <td>Sessional 1 obtained marks</td>
                            <td>Sessional 2 obtained marks</td>
                            <td>Sessional Average Marks</td>
                            <td>Assignment 1 Obtained marks</td>
                            <td>Assignment 2 Obtained marks</td>
                            <td>Assignment Average Marks</td>
                            <td> Total marks obtained including all three types of marks</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><b>Ex:-</b> 19833452002</td>
                            <td><b>Ex:-</b> 211711</td>
                            <td><b>Ex:-</b> 8334509</td>
                            <td><b>Ex:-</b> Sahil</td>
                            <td><b>Ex:-</b> sahil@gmail.com</td>
                            <td><b>Ex:-</b> 9876543210</td>
                            <td><b>Ex:-</b> 80</td>
                            <td><b>Ex:-</b> 60</td>
                            <td><b>Ex:-</b> 4 (if total > 90%='8', if total > 85% ='7', if total > 80% ='6', if
                                total > 75% ='5', if total > 70% ='4'...resp.if total < 60%='0' </td>
                            <td><b>Max marks:- </b>7</td>
                            <td><b>Max marks:- </b>7</td>
                            <td><b>Average Marks calculated according to both sessionals</b></td>
                            <td><b>Max marks:- </b>5</td>
                            <td><b>Max marks:- </b>5</td>
                            <td><b>Average Marks calculated according to both Assignments</b></td>
                            <td><b> Total marks</b></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include '../partials/_footer.php';
    
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>