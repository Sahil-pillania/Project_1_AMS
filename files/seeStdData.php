<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
}
$Alert = false;
$Error = false;
?>
<?php
      


$class = $_GET['class'];
$courseDuration = $_GET['duration'];
$course = $_GET['course'];
$deptt = $_GET['deptt'];
$subject = $_GET['subject'];
// echo $courseDuration;
// echo $course;
// echo $deptt;
// echo $class;
// echo $subject;



//     }
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

    <title>student data || list </title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">


    <style>
    /* table#summaryTable {
        font-size: 11px;
    }

    td {
        font-size: 0.7rem;
    } */

    .Cont {

        padding: 18px;
    }

    #summaryTable_wrapper {
        width: 95%;
    }

    #summaryTable {
        width: 75%;


    }

    table.dataTable tbody th,
    table.dataTable tbody td {
        padding: 8px 0px;
    }
    </style>

</head>

<body>
    <!-- Navbar -->
    <?php include '../partials/_navbar.php'?>

    <div class="nav-bar2 my-2">
        <?php include '../partials/_navbar2.php';?>
    </div>
    <div class="co">

        <div class="text-center">
            <h2 class="heading my-4" style="width: 95%; margin: auto;"><u><b>Summary</b></u></h2>
        </div>

        <div class="content my-2">
            <div class="alert alert-primary infoAlert" role="alert"
                style="min-height: 100px; display: flex; margin-top: 8px;width: 95%; margin: auto;">
                <div class="col-5 mx-auto stdFthMain">
                    <div class="col-3 stdFthAlert">
                        <!-- <h5>course : <b> <span id="courseName"></span> </h5> -->
                        <h5>Course : <?php echo $course ?> </b> </h5>
                    </div>
                    <div class="col-3 stdFthAlert">
                        <h5>Semester : <?php echo $class ?> </b></h5>
                    </div>
                </div>
                <div class="col-5 mx-auto stdFthMain">
                    <div class="col-3 stdFthAlert">

                        <h5>Subject : <?php echo $subject ?> </b></h5>
                    </div>
                    <div class="col-3 stdFthAlert">
                        <h5>Session : <?php echo $courseDuration ?> </b> </h5>
                    </div>
                </div>
            </div>
            <div class="Container Cont table-responsive">
                <div align="center">
                    <input type="text" name="search" id="search" class="form-control"
                        style="width:50%; border: 1px solid black;border-radius: 5px;" placeholder="Search box" />
                </div>
                <br /><br />



                <table id="summaryTable" class="table table-bordered table-striped table-hover " style="margin:auto;">
                    <thead>
                        <tr style="text-align: center;">

                            <th scope="col" width="5%">Sno</th>
                            <th scope="col" width="20%">Reg No</th>
                            <th scope="col" width="15%">Class Roll No</th>
                            <th scope="col" width="15%">Uni. Roll No</th>
                            <th scope="col" width="15%">Name</th>
                            <!-- <th scope="col" width="8%">Assignment 1</th>
                            <th scope="col" width="8%">Assignment 2</th> -->
                            <th scope="col" width="8%">Assignment total</th>
                            <!-- <th scope="col" width="8%">Sessional 1</th>
                            <th scope="col" width="8%">Sessional 2</th> -->
                            <th scope="col" width="8%">Sessional total</th>
                            <!-- <th scope="col" width="8%">Max attendence</th>
                            <th scope="col" width="8%">Obtained attendence</th> -->
                            <th scope="col" width="8%">Attendence total</th>
                            <th scope="col" width="8%">Total</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../partials/_dbconnect.php';
                        
                            $sql = "SELECT * FROM students s INNER JOIN assignments a ON s.registration_no = a.registration_no INNER JOIN attendence att ON s.registration_no = att.registration_no INNER JOIN sessional_test st ON s.registration_no = st.registration_no  WHERE a.subject_name ='$subject' AND st.subject_name ='$subject' AND att.subject_name ='$subject' AND class = '$class' AND course_name ='$course' AND duration ='$courseDuration' AND deptt_name ='$deptt' ";
                            //echo $sql;
                            $result = mysqli_query($conn, $sql) or die("Couldn't fetch data") ;
                            $rowCount = mysqli_num_rows($result);
                            //echo $rowCount;
                            if($result){
                            
                            $count =1;
                    while($row = mysqli_fetch_assoc($result))
                    {
                        
       
        echo " <tr style='text-align:center;'>
                            <td >{$count}</td>
                            <td class='registration_no'>{$row['registration_no']}</td>
                            <td>{$row['class_roll_no']}</td>
                            <td>{$row['university_roll_no']}</td>
                            <td>{$row['name']}</td>
                            
                            <td  id='val_1'>{$row['assignment_marks']}</td>
                            
                            <td  id='val_2'>{$row['sessional_marks']}</td>
                            
                            <td  id='val_3'>{$row['attendence_marks']}</td>
                            <td style='color: black;font-size: 20px;font-weight: 400;' id='totalAssessment' class='assessment_marks'>{$row['Assessment_marks']}</td>
                            
                        </tr>";
                        $count++;
                        }
                        }

                ?>
                        <!-- <td>{$row['assignment_1']}</td>
                            <td>{$row['assignment_2']}</td>
                            <td>{$row['sessional_1']}</td>
                            <td>{$row['sessional_2']}</td>
                            <td>{$row['max_attendence']}</td>
                            <td>{$row['obtained_attendence']}</td> -->
                    </tbody>
                </table>



            </div>
            <div class="text-center">
                <a type="button" value="Ok" class="btn btn-success" href="/AMS/files/addAssess.php">Ok</a>
            </div>




        </div>


        <!-- footer  -->
        <?php
    include '../partials/_footer.php';
    ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="../Dropdown-Table/ddtf.js"></script>
        <script>
        $('#summaryTable').ddTableFilter();
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="../jquery/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>i
        <script>
        // adding the all 3 types of assessement into total page
        function getTotalAssessment() {
            var val1;
            var val2;
            var val3;
            var total;

            $('#summaryTable tr').each(function() {

                val1 = parseInt($(this).find("#val_1").html());
                val2 = parseInt($(this).find("#val_2").html());
                val3 = parseInt($(this).find("#val_3").html());
                total = val1 + val2 + val3;
                $(this).find("#totalAssessment").html(total);
            });
        };
        getTotalAssessment();
        $(document).ready(function() {
            $('#search').keyup(function() {
                search_table($(this).val());
            });

            function search_table(value) {
                $('#summaryTable tbody tr').each(function() {
                    var found = 'false';
                    $(this).each(function() {
                        if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >=
                            0) {
                            found = 'true';
                        }
                    });
                    if (found == 'true') {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="../script/script.js"></script>
        <script src="../jquery/jquery-3.6.0.min.js">
        </script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script>
        // $(document).ready(function() {
        //     $('#summaryTable').DataTable();
        // });
        </script>
</body>

</html>