<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
}
//echo $_SESSION["deptt_name"];
?>
<?php
    $Alert = false;
    $Error = false;
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        include '../partials/_dbconnect.php';

        $deptt_name = $_SESSION["deptt_name"];
        $Course_name = $_POST['Course_name'];
        $class = $_POST['class'];
        $Subject_name = $_POST['Subject_name'];
        $teacher_id = $_POST['teacher_id'];
        $teacher_name = $_POST['teacher_name'];
        $teacher_email = $_POST['teacher_email'];
        $teacher_mobile = $_POST['teacher_mobile'];
        // echo $teacher_mobile;
        // echo $teacher_email;
        // echo $teacher_name;
        // echo $teacher_id;
        //echo var_dump($teacher_mobile);

        

        if(($deptt_name || $Course_name || $Subject_name || $class || $teacher_id || $teacher_name || $teacher_email || $teacher_mobile) == "" || NULL ){
                $Error = "Your Data couldn't be saved. All fields are mandatory to fill. Try again";
    }
    else{
        
        $sql ="INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_phone`, `subject_name`,`class`) VALUES ( '$teacher_id', '$teacher_name', '$teacher_email', '$teacher_mobile', '$Subject_name','$class')";

        $result = mysqli_query($conn, $sql);
        if($result){
            $Alert = 'Data has been saved successfully. ';
            
        
        }else{
            $Error = 'Couldn\'t save data. Try again. Check your credentials and try again.';
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

    <title>Add teachers | HOD panel</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style2.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    /* .containerMain {
        position: relative;
        display: flex;
        margin-bottom: 15px;
    }

    .sidebar {
        width: 250px;

        left: 0;
    }

    .mainData {
        position: relative;
        width: 70vw;
        left: 80px;
        min-height: 510px;


    } */

    select.col-md-5 {
        width: 100%;
    }

    footer.container {
        top: 590px;
    }

    .text-center {
        width: 67vw;
    }

    .button {
        padding: 3px 7px;
        margin-right: 13px;
    }

    label.form-label {
        font-weight: 400;

    }

    label.form-label::after {
        content: ' *';
        font-weight: 400;
        color: red;
    }
    </style>
    <link rel="stylesheet" href="../partials/partialscss.css">
</head>

<body>
    <?php include '../partials/_navbar.php'?>

    <div class="containerMain">
        <div class="sidebar">
            <?php
            include '../partials/_sidebar.php';
            ?>
        </div>
        <div class="mainData">

            <?php
            if($Alert){
              echo '<div class="alert alert-success alert-dismissible d-flex align-items-center my-3" role="alert" style="width: 67vw">
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
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center my-3" role="alert" style="justify-content: revert; width: 67vw;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:" id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div class="mx-3">
                                ' . $Error .'
                            </div><button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                            </div>';
            }
            
            
            ?>

            <h1 class="text-center my-4 heading"><u> Add Teachers</u></h1>
            <form action="/AMS/files/addTeachers.php" method="POST" id="form">
                <div class="HOD">
                    <!-- data fetching form database  -->
                    <div class="row col-12 my-4">
                        <div class="col-md-5 ">
                            <!-- <div class="row"> -->
                            <div class="mb-3 col-md-5 department">

                                <select name="Deptt_name" class="department col-md-5" id="department">
                                    <option value="<?php echo $_SESSION["deptt_name"] ?>">
                                        <?php echo $_SESSION["deptt_name"] ?></option>

                                </select>
                            </div>

                            <div class="invalid-feedback">
                                <!-- Please select a valid Department Name. -->
                            </div>
                        </div>

                        <div class="col-md-5 ">
                            <!-- <div class="row"> -->
                            <div class="mb-3 col-md-5">


                                <select name="Course_name" class="col-md-5" id="courses" required>
                                    <option value="">Select Course</option>


                                </select>
                            </div>

                            <div class="invalid-feedback">
                                <!-- Please select a valid Course Name. -->
                            </div>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-md-5 ">
                            <!-- <div class="row"> -->
                            <div class="mb-3 col-md-5">

                                <select name="class" class="col-md-5" id="class" required>
                                    <option value="">Select Class</option>
                                    <option value="1">1st Sem</option>
                                    <option value="2">2nd Sem</option>
                                    <option value="3">3rd Sem</option>
                                    <option value="4">4th Sem</option>
                                    <option value="5">5th Sem</option>
                                    <option value="6">6th Sem</option>

                                </select>
                            </div>

                            <div class="invalid-feedback">
                                <!-- Please select a valid Course Name. -->
                            </div>
                        </div>

                        <div class="col-md-5 ">
                            <!-- <div class="row"> -->
                            <div class="mb-3 col-md-5">

                                <select name="Subject_name" class="col-md-5" id="subject">
                                    <option value="">Select Subject</option>

                                </select>
                            </div>

                            <div class="invalid-feedback">
                                <!-- Please select a valid Course Name. -->
                            </div>
                        </div>
                    </div>
                    <!-- teacher data entering from here  -->
                    <div class="row col-12">
                        <div class="col-md-5">
                            <label for="" class="form-label">Teacher ID</label>
                            <input type="text" class="form-control" id="teacher_id" name="teacher_id" / required>
                        </div>
                        <div class="col-md-5">
                            <label for="" class="form-label">Teacher Name </label>
                            <input type="text" class="form-control" id="teacher_name" name="teacher_name" / required>
                        </div>
                    </div>
                    <div class="row col-12">
                        <div class="col-md-5">
                            <label for="" class="form-label">Teacher Email</label>
                            <input type="text" class="form-control" id="teacher_email" name="teacher_email" / required>
                        </div>
                        <div class="col-md-5 my-1">
                            <label for="" class="form-label">Teacher Mobile Number</label>
                            <input type="text" class="form-control" id="teacher_mobile" name="teacher_mobile" /
                                required>
                        </div>
                    </div>

                </div>
                <div>
                    <button class="btn btn-success my-4 button">Save</button>
                    <button class="btn btn-warning my-4 button" id="resetform">Refresh</button>

                </div>
        </div>
    </div>

    <?php   
    include '../partials/_footer.php';
    ?>


 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../jquery/jquery-3.6.0.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/script.js">

    </script>
    <script>
    // fetching dropdown data using ajax 
    $(document).ready(function() {
        function loadData(type, id) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    id: id
                },
                success: function(data) {
                    if (type == "courses") {
                        $("#courses").append(data);
                    } else if (type == "class") {
                        $("#class").append(data);
                    } else if (type == "subject") {
                        $("#subject").append(data);
                    } else {
                        // $("#department").append(data);
                    }
                }
            });

        }
        loadData();


        var deptt_name = $("#department").val();
        //console.log(deptt_name);
        loadData("courses", deptt_name);
        // $("#department").on("change", function() {


        // });
        $("#courses").on("change", function() {
            var course_name = $("#courses").val();
            //console.log(course_name);
            //loadData("class", course_name);
        });
        $("#class").on("change", function() {
            var subject_name = $("#class").val();
            //console.log(subject_name);
            loadData("subject", subject_name);
        });

    });
    </script>
</body>

</html>