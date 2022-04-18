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

    <title>All Students || view </title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<link rel="stylesheet" href="../style/style2.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>


 .fetchContent {
    padding: 20px;
}

.col-md-12 {
    display: flex;
    justify-content: center;
}

.col-md-5{
    padding: 8px 0;
}

div.col-md-5 select {
    width: 90%;
    
}

h2 {
    margin-bottom: 30px;
    /* width: 80%; */
}
@media only screen and (max-width: 993px){
    #footer{
        display: none;
    }
}

</style>

<body>
    <?php include '../partials/_navbar.php'?>

    <div class="containerMain resp" >
        <div class="sidebar">
            <?php
            include '../partials/_sidebar.php';
            ?>
        </div>
        <div class="mainData">
            <div class="fetchContent">
                <div class="text-center heading mt-4">
                    <h2> Select your Course and Class to fetch students.</h2>
                </div>
                <hr>
                <div class="col-md-12">
                    <div class="col-md-5">
                        <?php
                        // linking database and fetching departments dynamic 
                            include '../partials/_dbconnect.php';
                            $sql2 = "SELECT * from courses WHERE deptt_name = '" . $_SESSION['deptt_name']. "'";
                            // echo $sql2;
                            $result2 = mysqli_query($conn, $sql2);
                            $rowCount = mysqli_num_rows($result2);
                        ?>

                        <select name="course_name" class="course" id="courses">
                            <option value="">Select Course</option>
                            <?php
                            
                            for($i=1; $i <=$rowCount; $i++){
                                   $row =  mysqli_fetch_array($result2);
                                   echo '<option value="' .$row['course_name']. '">' .$row['course_name']. '</option>';
                            }
                            ?>


                            <!-- <option value="Department of Economics">Department of Computer Ecnomics</option> -->
                        </select>
                    </div>
                    <div class="col-md-5">

                        <select name="class" class="class" id="class">
                            <option value="">Select Class</option>

                            <!-- <option value="Department of Economics">Department of Computer Ecnomics</option> -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center my-4"><button class="btn-sm btn-success fetchStudents" id="fetchStudents">Fetch
                    Students</button></div>
            <hr>
            <div class="getData" style="margin-top: 0px;">
                <h1 class="text-center heading">Your data </h1>
                <hr>
                <div class="tableContainer">
                    <table class="table" id="myTable">
                        <tr style="text-align:center;">

                            <th scope="col">Sno</th>
                            <th scope="col">Reg No</th>
                            <th scope="col">Class Roll No</th>
                            <th scope="col">University Roll No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">E-mail</th>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
   </div>
    <div >
    <?php  include '../partials/_footer.php'?>
    </div>

    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jquery  -->
    <script>
    $('.getData').hide();
    $(document).ready(function() {
        // getting dropdown data 
        function loadData(type, id) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    id: id
                },
                success: function(data) {
                    if (type == "class") {
                        $("#class").append(data);
                    } else {
                        // $("#department").append(data);
                    }
                }
            });

        }

        // for all students page 
        function loadStudents(type, id1, id2) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    id1: id1,
                    id2: id2
                },
                success: function(data) {
                    if (type == "get") {
                        $("#myTable").append(data);
                    } else {
                        // $("#department").append(data);
                    }
                }
            });

        }
        //loadData();



        $("#courses").on("change", function() {
            var course_name = $("#courses").val();
            //console.log(course_name);
            loadData("class", course_name);
        });

        // for fetching students 
        $('#fetchStudents').on('click', function() {
            var courses = $('#courses').val();
            var classs = $('#class').val();
            // console.log(courses);
            // console.log(classs);
            if (classs != '' && courses != '') {
                $("#myTable").text("");
                loadStudents('get', classs, courses);
                $('.getData').slideDown(2000);
            }
            //loadStudents("get", classs, courses);
        });
    });
    // $('#fetchStudents').click(function() {

    // });
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
    // table 
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
</body>

</html>