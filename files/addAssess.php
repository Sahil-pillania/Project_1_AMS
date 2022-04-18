<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
}
$Alert = false;
$Error = false;
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <title>AMS | Students Assessment Details </title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>




    <style>
    .container3.mainData {
        /* width: 60%; */
        min-height: 650px;
    }

    div.dataTables_scrollBody thead {
        display: none;
    }

    table#myTable,
    table#myTable tbody tr td {
        font-size: 13px;
    }
    
@media screen and (max-width: 1200px) {
  .containerMain {
    min-height: 690px;
  }
@media screen and (max-width: 769px) {
  .containerMain {
    min-height: 690px;
  }
     @media screen and (max-width: 266px) {
  .containerMain {
    min-height: 690px;
  }
} 
    @media screen and (max-width: 200px) {
      .containerMain.assess_pg {
        min-height: 650px;
      }
    } 

    @media screen and (max-width: 195px) {
      .getData {
        margin-top: 50px;
      }
      .containerMain{
          min-height: 700px;
      }
    }
@media screen and (max-width: 185px) {
      .getData {
        margin-top: 50px;
      }
      .containerMain{
          min-height: 700px;
      }
    }
    @media screen and (max-width: 150px) {
      .getData {
        margin-top:  75px;
      }
            .containerMain{
          min-height: 730px;
      }
    }


    @media print {

        /* Hide every other element  */
        body * {

            visibility: hidden;
        }

        .operationButtons {
            visibility: hidden;
        }

        /* Then displaying print container elements  */
        .print-container,
        .print-container * {
            visibility: visible;
        }

        /* adjusting the position to always start from top  */
        .print-container {
            position: absolute;
            top: 12px;
            left: 0;
            right: 0;
        }

    }
    </style>

    <?php

include '../partials/_dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // db connection 
    $deptt_name = $_POST['Deptt_name'];
    $course_name = $_POST['courses'];
    $duration = $_POST['courseDuration'];
    $class = $_POST['class'];
    $subject = $_POST['subject'];
    echo $deptt_name;
    echo $class;
    echo $subject;
    echo $course_name;
    }
if(isset($_POST["summary"])) {
              echo "Button triggered";

            $Alert = 'Fetching data...';
            //header("Location: addStudents.php?class=$class&course=$Course_name");
            header("Location: seeStdData.php?class=$class&course=$Course_name&deptt=$deptt_name&duration=$courseDuration&subject=$subject");
   
    }
?>


</head>

<body>
    <!-- Navbar -->
    <?php include '../partials/_navbar.php'?>

    <form action="">
        <div class="containerMain assess_pg" style="min-height: 700px" >
            <div class="sidebar">
                <?php
            include '../partials/_sidebar.php';
            ?>
            </div>


            <div class="container3 text-center my-3 mainData">
                <?php
            if($Alert){
              echo '<div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert" style="width: 67vw">
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
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center" role="alert" style="justify-content: revert; width: 67vw;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:" id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div class="mx-3">
                                ' . $Error .'
                            </div><button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                            </div>';
            }
            ?>
                <h2 class="heading">Select subject for Data</h2>
                <hr>

                <div class="Data">
                    <form id="form">
                        <div class="col-md-12">
                            <div class="col-md-5">
                                <div class="mb-3 col-md-5 ">
                                    <!-- <div class="row"> -->

                                    <label for="deptt" class="form-label">Department</label>
                                    <select name="Deptt_name" id="department" class="col-md-5 form-control form-select">
                                        <option value="<?php echo $_SESSION["deptt_name"] ?>">
                                            <?php echo $_SESSION["deptt_name"] ?></option>

                                    </select>
                                </div>


                                <div class="invalid-feedback">
                                    <!-- Please select a valid Department Name. -->
                                </div>
                            </div>

                            <div class="col-md-5">
                                <!-- <div class="row"> -->
                                <div class="mb-3 col-md-5">

                                    <label for="course" class="form-label">Select Course </label>
                                    <select name="courses" class="col-md-5 form-control form-select" id="courses"
                                        required>
                                        <option value="">Select Course</option>


                                    </select>
                                </div>

                                <div class="invalid-feedback">
                                    <!-- Please select a valid Course Name. -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-5">
                                <label for="session" class="form-label">Select Session</label>
                                <select class="form-select form-control" id="courseDuration" name="courseDuration"
                                    required>
                                    <option value="">Choose Session...</option>
                                    <!-- //<option></option> -->
                                </select>
                                <div class="invalid-feedback">
                                    <!-- Please select a valid data.  -->
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="class" class="form-label">Class</label>
                                <select class="form-control form-select" id="class" name="class" required>
                                    <option value="">Choose...</option>
                                    <!-- <option></option> -->
                                </select>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-5 my-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="col-md-5 form-select form-control" id="subject" name="subject" required>
                                    <option value="">Choose...</option>
                                    <!-- <option></option> -->
                                </select>

                            </div>
                            <div class="col-md-5"></div>
                        </div>
                        <div class="col-md-12">


                        </div>


                        <br>
                        <div class="container">


                            <button type="button" class="btn btn-success" id="fetchStudents" class="submit"
                                style=" padding: 6px 10px;border-radius: 7px;">
                                Get students</button>
                            <button type="button" id="resetform" class="btn btn-warning mx-1 Reset"
                                style="padding: 6px 10px;border-radius: 7px;">Reset</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>



        <div class="getData">
            <h1 class="text-center heading">Your data </h1>
            <div class="content">
                <div class="alert alert-primary infoAlert" role="alert"
                    style="min-height: 100px; display: flex; margin-top: 8px;">
                    <div class="col-5 mx-auto stdFthMain">
                        <div class="col-3 stdFthAlert">
                            <!-- <h5>course : <b> <span id="courseName"></span> </h5> -->
                            <h5>Course : <b id="courseName"> </b> </h5>
                        </div>
                        <div class="col-3 stdFthAlert">
                            <h5>Semester : <b id="className"> </b></h5>
                        </div>
                    </div>
                    <div class="col-5 mx-auto stdFthMain">
                        <div class="col-3 stdFthAlert">

                            <h5>Subject : <b id="subjectName"> </b></h5>
                        </div>
                        <div class="col-3 stdFthAlert">
                            <h5>Session : <b id="sessionName"> </b> </h5>
                        </div>
                    </div>
                </div>
                <div class="categories"
                    style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap;">
                    <button class="btn btn-primary" id="fetchAttendence">Attendence</button>
                    <button class="btn btn-primary" id="fetchSessional">Sessional test</button>
                    <button class="btn btn-primary" id="fetchAssignments">Assignment</button>
                    <button class="btn btn-success" id="fetchAll">Total</button>
                </div>

                <div class="tableContent print-container">
                    <div class="tableContainer1">


                        <hr>

                        <table id="myTable" class="table table-bordered table-secondary border-dark table-hover">

                            <!-- data will be fetched dynamically  -->

                        </table>

                    </div>
                </div>

                <div class="button text-center" style="margin-top: 20px;margin-bottom:20px;" class="operationButtons">
                    <button class="btn btn-success text-center px-4" id="saveStudentsMarks"> Save </button>
                    <button class="btn btn-warning text-center px-4" id="" onclick="exportTableToExcel('myTable')">
                        Export to Excel </button>
                    <button class="btn btn-warning" onclick="window.print();"> Print Data </button>

                    <button class="btn btn-warning" id="openSummary"> Summary </button>

                    <!-- <button class="btn btn-success" data-modal-target="#modal"> Summary </button> -->
                </div>

            </div>
            <!-- <div class="modal" id="modal">
                <div class="modal-header">
                    <div class="title">Summary: </div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="Container table-responsive">

                        <table id="summaryTable" class="table table-bordered">

                        </table>
                        <div class="text-center">
                            <button data-close-button class="btn btn-success text-center px-4 my-4 close-button" id=""
                                style="min-width: 50px;">
                                Ok </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="overlay"></div> -->
        </div>
    </form>





    <!-- footer  -->
    <?php
    include '../partials/_footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="../script/script.js"></script>
    <script src="../script/script2.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
    function maxValCheck(object) {
        //console.log("function fired");
        if (object.value > object.max)
            object.value = parseInt(object.max);
        //console.log(parseInt(object.max));
    };

    function maxSessCheck(object) {
        //console.log("function fired");
        if (object.value > object.max)
            object.value = parseInt(object.max);
        //console.log(parseInt(object.max));
    };

    function maxAttCheck(object) {
        //console.log("function fired");
        if (object.value > object.max)
            object.value = parseInt(object.max);
        //console.log(parseInt(object.max));
    };

    function obtAttCheck(object) {
        //console.log("function fired");
        if (object.value > object.max)
            object.value = parseInt(object.max);
        //console.log(parseInt(object.max));
    };

setInterval(() => {
    

    // adding the all 3 types of assessement into total page
     function getTotalAssessment() {
        //console.log("function called");
        var val1;
        var val2;
        var val3;
        var total;
        $('#myTable tbody tr.rowzz').each(function() {
            //console.log("inner function reached");

            val1 = parseInt($(this).find("#val_1").html());
            val2 = parseInt($(this).find("#val_2").html());
            val3 = parseInt($(this).find("#val_3").html());
            //console.log(val1);
            //console.log(val2);
            //console.log(val3);
            total = val1 + val2 + val3;
           // console.log(total);
           $(this).find(".assessment_marks").html(total);
        });

    };
    getTotalAssessment();
}, 10);
    </script>



    <script>
    $('.getData').hide();

    // fetching dropdown data using ajax 

    $(document).ready(function() {
        // load data 
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
                    } else if (type == "courseDuration") {
                        $("#courseDuration").append(data);
                    } else if (type == "classes") {
                        //$("#class").html("");
                        $("#class").append(data);
                    } else if (type == "subject") {
                        $("#subject").html("");
                        $("#subject").append(data);
                    } else {
                        // $("#department").append(data);
                    }
                }
            });

        }
        loadData();
        // 
        // load data in combine form
        function loadStudentMarks(type, classs, course, duration, deptt, subject) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    id1: classs,
                    id2: course,
                    id3: duration,
                    id4: deptt,
                    id5: subject
                },
                success: function(data) {
                    //console.log(data);
                    $("#myTable").append(data);
                    $("#summaryTable").append(data);
                }
            });

        }

        // function to open summary page 
        function openSummary(type, deptt, course, courseDuration, className, subject) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    deptt: deptt,
                    course: course,
                    courseDuration: courseDuration,
                    className: className,
                    subject: subject
                },
                success: function(data) {
                    console.log(data);
                    window.location.replace(data);

                }
            });
        }


        var deptt_name = $("#department").val();
        //console.log(deptt_name);
        loadData("courses", deptt_name);
        // $("#department").on("change", function() {


        // });
        $("#courses").on("change", function() {
            var course_name = $("#courses").val();
            // for infoAlert banner data
            $('#courseName').html(course_name);
            //$("#courseDuration").append("");
            loadData("courseDuration", course_name);
        });
        $("#courseDuration").on("change", function() {
            var courseDuration = $("#courseDuration").val();
            // for infoAlert banner data
            $('#sessionName').html(courseDuration);

            loadData("classes", courseDuration);
        });
        $("#class").on("change", function() {
            var Class_name = $("#class").val();
            //console.log(Class_name);
            // for infoAlert banner data
            $('#className').html(Class_name);
            loadData("subject", Class_name);

            setInterval(function() {

                // for infoAlert banner data
                var subject_name = $("#subject").val();
                $('#subjectName').html(subject_name);
                //console.log(subject_name);

            }, 2000);
        });

        // TO FETCH STUDENTS ON SUBMIT BUTTON --------------------------------------------------
        $('#fetchStudents').on('click', function() {
            $('#myTable').html('');
            var courses = $('#courses').val();
            var classs = $('#class').val();
            var subject = $("#subject").val();
            var courseDuration = $('#courseDuration').val();
            var deptt_name = "<?php echo $_SESSION["deptt_name"] ?>";
            // console.log(courses);
            // console.log(classs);
            // console.log(deptt_name);
            if (classs != '' && courses != '' && courseDuration != '') {
                loadStudentMarks('getAll', classs, courses, courseDuration, deptt_name,
                    subject);
                // setTimeout(() => {
                //     getTotalAssessment();

                // }, 200);

                $('.getData').slideDown(1000);


            }



        });
        $('#fetchAll').on('click', function() {
            $('#myTable').slideUp(700);
            $('#myTable').html('');
            var courses = $('#courses').val();
            var classs = $('#class').val();
            var subject = $("#subject").val();
            var courseDuration = $('#courseDuration').val();
            var deptt_name = "<?php echo $_SESSION["deptt_name"] ?>";
            // console.log(courses);
            // console.log(classs);
            // console.log(deptt_name);
            if (classs != '' && courses != '' && courseDuration != '') {
                loadStudentMarks('getAll', classs, courses, courseDuration, deptt_name,
                    subject);
                // setTimeout(() => {
                //     getTotalAssessment();

                // }, 200);
                $('#myTable').slideDown(1000);
                //getTotalAssessment();

            }



        });


        // fetching assignments
        $('#fetchAssignments').on('click', function() {
            $('#myTable').slideUp(700);
            $('#myTable').html('');

            var courses = $('#courses').val();
            var classs = $('#class').val();
            var subject = $("#subject").val();
            var courseDuration = $('#courseDuration').val();
            var deptt_name = "<?php echo $_SESSION["deptt_name"] ?>";
            // console.log(courses);
            // console.log(classs);
            // console.log(deptt_name);
            if (classs != '' && courses != '' && courseDuration != '') {
                loadStudentMarks('getAssignments', classs, courses, courseDuration,
                    deptt_name,
                    subject);
                $('#myTable').slideDown(700);

            }
            assignFunc();
            clearInterval(interval_2);
            clearInterval(interval_3);




        });

        var assignFunc = function assignmentCalc() {
            var tempAssess;

            

        interval_1 = setInterval(function() {
                $('table .rowData').each(function() {
                    //console.log('assignment function');
                    var totalmark = 0;
                    var total;
                    $(this).find('.data').each(function() {
                        var marks = $(this).val();
                        //var marks = $(this).text();

                        totalmark += parseFloat(marks);

                    });
                    total = Math.ceil(totalmark / 2);
                    tempAssess = total;
                    //console.log(total);
                    //$(this).find('#totalMarks').val(totalmarks);
                    $(this).find('#totalMarks').html(total);
                });
            }, 50);
            $(this).find('#totalMarks').html(tempAssess);   
                   
    }


        // $('#myTable .rowData').each(function() {
        //     console.log('Entered in indp func.');
        //     $(this).find('.data').each(function() {
        //         var totalmarks = 0;
        //         $(this).on('change', function() {

        //             var marks = $(this).val();
        //             console.log(marks);
        //             totalmarks += parseFloat(marks);
        //         });

        //     });
        //     total = Math.ceil(totalmarks / 2);
        //     $(this).find('#totalMarks').html(total);
        // });



        // fetching sessionals
        $('#fetchSessional').on('click', function() {
            $('#myTable').slideUp(700);
            $('#myTable').html('');
            var courses = $('#courses').val();
            var classs = $('#class').val();
            var subject = $("#subject").val();
            var courseDuration = $('#courseDuration').val();
            var deptt_name = "<?php echo $_SESSION["deptt_name"] ?>";
            // console.log(courses);
            // console.log(classs);
            // console.log(deptt_name);
            if (classs != '' && courses != '' && courseDuration != '') {
                loadStudentMarks('getSessional', classs, courses, courseDuration,
                    deptt_name,
                    subject);

                $('#myTable').slideDown(700);
            }
            sessionalCalc();
            clearInterval(interval_1);
            clearInterval(interval_3);
        });

        function sessionalCalc() {
                var tempSess;
             interval_2 = setInterval(function() {
                $('table .rowData').each(function() {
                    //console.log('sessionals function');
                    var totalmarks = 0;
                    $(this).find('.data').each(function() {
                        var marks = $(this).val();
                        //var marks = $(this).text();

                        totalmarks += parseFloat(marks);

                    });
                    total = Math.ceil(totalmarks / 2);
                    tempSess = total;
                    
                    $(this).find('#totalMarks').html(total);
                });
            }, 50);
            $(this).find('#totalMarks').html(tempSess);
        };

        // fetching attendence
        $('#fetchAttendence').on('click', function() {
            $('#myTable').slideUp(700);
            $('#myTable').html('');
            var courses = $('#courses').val();
            var classs = $('#class').val();
            var subject = $("#subject").val();
            var courseDuration = $('#courseDuration').val();
            var deptt_name = "<?php echo $_SESSION["deptt_name"] ?>";
            if (classs != '' && courses != '' && courseDuration != '') {
                loadStudentMarks('getAttendence', classs, courses, courseDuration,
                    deptt_name,
                    subject);

                $('#myTable').slideDown(700);
            }
            attendenceCalc();
            clearInterval(interval_1);
            clearInterval(interval_2);

        });

        function attendenceCalc() {
            var Att;
             interval_3 = setInterval(function() {
                var max = $('#max_attendence').val();
                //console.log('Attendence function');
                $('table .rowData').each(function() {
                    
                    var marks2 = 0;


                    marks2 = $(this).find('.data2').val();
                    // console.log(marks2);
                    // console.log(max);
                    total = Math.ceil((marks2 * 100) / max);
                    //console.log(total);
                    if (total > '95') {
                        $(this).find('#totalMarks').html('8');
                        Att = 8;
                    } else if (total > '90') {
                        $(this).find('#totalMarks').html('7');
                        Att = 7;
                    } else if (total > '85') {
                        $(this).find('#totalMarks').html('6');
                        Att = 6;
                    } else if (total > '80') {
                        $(this).find('#totalMarks').html('5');
                        Att = 5;
                    } else if (total > '75') {
                        $(this).find('#totalMarks').html('4');
                        Att = 4;
                    } else if (total > '70') {
                        $(this).find('#totalMarks').html('3');
                        Att = 3;
                    } else if (total > '65') {
                        $(this).find('#totalMarks').html('2');
                        Att = 2;
                    } else if (total > '60') {
                        $(this).find('#totalMarks').html('1');
                        Att = 1;
                    } else {
                        $(this).find('#totalMarks').html('0');
                        Att = 0;
                    }
                    

                });
            }, 10);
            //$(this).find('#totalMarks').html(Att);
            // setTimeout(() => {
            //     $(this).find('#totalMarks').html(Att);
                
            // }, 10);

        };
    


        // to save updated marks of students -------------------------------------------------------


        $('#saveStudentsMarks').on('click', function() {
            var subject = $("#subject").val();

            var reg_no = [];
            var assignment_1 = [];
            var assignment_2 = [];
            var assignment_marks = [];

            var sessional_1 = [];
            var sessional_2 = [];
            var sessional_marks = [];

            var max_attendence = $('.max_attendence').val();
            //console.log(max_attendence);
            //var max_attendence = [];
            var obt_attendence = [];
            var attendence_marks = [];

            var assessment_marks = [];

            $('.registration_no').each(function() {
                reg_no.push($(this).text());
                //console.log($(this).text());
            });

            $('.assignment_1').each(function() {
                //console.log($(this).val());
                assignment_1.push($(this).val());
            });

            $('.assignment_2').each(function() {
                assignment_2.push($(this).val());
            });

            $('.assignment_marks').each(function() {
                assignment_marks.push($(this).text());
            });
            $('.sessional_1').each(function() {
                sessional_1.push($(this).val());
            });
            $('.sessional_2').each(function() {
                sessional_2.push($(this).val());
            });
            $('.sessional_marks').each(function() {
                sessional_marks.push($(this).text());
            });
            // $('.max_attendence').each(function() {
            //     max_attendence.push($(this).val());
            // });
            $('.obt_attendence').each(function() {
                //console.log($(this).val());
                obt_attendence.push($(this).val());
            });
            $('.attendence_marks').each(function() {
                attendence_marks.push($(this).text());
            });

            $('.assessment_marks').each(function() {
                assessment_marks.push($(this).text());
            });

            $.ajax({
                url: "../partials/_updateData.php",
                type: "POST",
                data: {
                    reg_no: reg_no,
                    assignment_1: assignment_1,
                    assignment_2: assignment_2,
                    assignment_marks: assignment_marks,
                    sessional_1: sessional_1,
                    sessional_2: sessional_2,
                    sessional_marks: sessional_marks,
                    max_attendence: max_attendence,
                    obt_attendence: obt_attendence,
                    attendence_marks: attendence_marks,
                    subject: subject,
                    assessment_marks: assessment_marks
                },
                success: function(data) {
                    alert(data);
                }
            });



            //saveData('saveAssessment', reg_no, assignment_1, assignment_2, assignment_marks);




        });
        // function to open summary page
        $('#openSummary').on('click', function() {
            var deptt = $("#department").val();
            var course = $("#courses").val();
            var courseDuration = $("#courseDuration").val();
            var className = $("#class").val();
            var subject = $("#subject").val();

            console.log(deptt);
            console.log(course);
            console.log(courseDuration);
            console.log(className);

            openSummary('summary', deptt, course, courseDuration, className, subject);
        });




    });
    </script>
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
    // $(document).ready(function() {
    //     $('#summaryTable thead').remove();
    //     $('#summaryTable tbody').remove();

    //     $('#summaryTable').DataTable({
    //         bSort: false,
    //         aoColumns: [{
    //             sWidth: "45%"
    //         }, {
    //             sWidth: "45%"
    //         }, {
    //             sWidth: "10%",
    //             bSearchable: false,
    //             bSortable: false
    //         }],
    //         // drawCallback: function() { // this gets rid of duplicate headers
    //         //     $('.dataTables_scrollBody thead tr').css({
    //         //         display: 'none'
    //         //     });
    //         // },
    //         "initComplete": function(settings, json) {
    //             $('.dataTables_scrollBody thead tr').css({
    //                 visibility: 'collapse'
    //             });
    //         },
    //         "scrollY": "1000px",
    //         "scrollCollapse": true,
    //         "info": true,
    //         "paging": true,
    //     });

    // // $('#summaryTable thead').last().remove();
    // // $('#summaryTable tbody').last().remove();
    // });

    // // heading to summary page 
    // // $('#').on('click', function() {

    // // var deptt = $("#department").val();
    // // var course = $("#courses").val();
    // // var courseDuration = $("#courseDuration").val();
    // // var Class = $("#class").val();
    // // var subject = $("#subject").val();

    // // window.location.href = "/page.html?cal=" + te + "&text2=" + text2 + "&text3=" + text3 + "&text4=" + text4;




    //});
    // 
    </script>
</body>

</html>