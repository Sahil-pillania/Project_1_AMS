<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
    
}

// welcome - <?php echo $_SESSION['userID']
//echo $_SESSION["deptt_name"];

?>
<?php
// variables
$Alert = false;
$Error = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // db connection 
    include '../partials/_dbconnect.php';
    $Deptt_name = $_POST['Deptt_name'];
    $Course_Name = $_POST['Course_Name'];
    $Course_Code = $_POST['Course_Code'];
    $Course_Duration = $_POST['Course_Duration'];
    //  $Course_level = $_POST['Course_Level'];
    $class = $_POST['class'];
    $Subject_Name = $_POST['Subject_Name'];
    $Subject_Code = $_POST['Subject_Code'];
    
    // echo $class;
    // echo $Subject_Name;
    // echo $Course_Name;
    // echo $Course_Duration;

    if($class == '1st Sem'){
        $class_id = "1";
        
    }else if($class == '3rd Sem'){
        
        $class_id = "3";
        
    }else if($class == '5th Sem'){
        $class_id = "5";
        
    }
    if($class == '2nd Sem'){
        $class_id = "2";
        
    }else if($class == '4th Sem'){
        
        $class_id = "4";
        
    }else if($class == '6th Sem'){
        $class_id = "6";
        
    }
    //echo $class_id;

    if(($Deptt_name || $Course_Name || $Course_Code || $Course_Duration || $class || $Subject_Name || $Subject_Code) == "" || NULL ){
        $Error = "Data couldn't be saved.All fields are mandatory. Try again";
    }
    else{

    mysqli_begin_transaction($conn);

    try{

        

       


         $sql = "INSERT INTO `subjects` ( `subject_name`, `subject_code`,`course_name`, `course_code`,`class`) VALUES ('$Subject_Name', '$Subject_Code','$Course_Name', '$Course_Code','$class_id')";
         $result = mysqli_query($conn, $sql);

         $sql2 = "INSERT INTO `classes` (`class_id`,`class`, `subject_name`, `course_name`, `duration`) VALUES ('$class_id','$class', '$Subject_Name', '$Course_Name', '$Course_Duration')";

        $result = mysqli_query($conn, $sql);
         $result2 = mysqli_query($conn, $sql2);


        mysqli_commit($conn);
        $Alert = "Subject has been saved successfully.";
        mysqli_close($conn);
    }
    catch(mysqli_sql_exception $exception){
        mysqli_rollback($conn);
        throw $exception;
        $Error = "Data couldn't be saved. Try again";
        //mysqli_close($conn);

    } 

}
 }
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>AMS | add Subjects</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    form.forms {
        width: 74%;
        /* margin: auto; */
    }
    #footer{
        margin-top:20px;
    }



    div.menu {
        min-height: 528px;
        margin: 0px;
    }

    .heading.head {
        padding-left: 12px;
    }

    .sideBar {
        margin-top: 1px;
    }

    .sideBar a li {
        margin-left: 12px;
    }
            @media (max-width: 992px){
            select.left, select.right{
                margin: auto;
            }
         div.containerMain {
             min-height: 550px;
        }
    }
  
    @media only screen and (max-width: 768px){
        div.containerMain {
             min-height: 550px;
        }
        div.mainData{
            width: 90vw;
        }
        select.deptt, select.course, select.class{
            width: 100%;
            margin: 0;
        }
        select.left{
            margin-right:0;
        }
        select.right{
            margin-left:0;
        }
        .subject{
            width:70%;
            margin:auto;
        }
        label.subject_name, div.buttons{
                margin-left: 15%;
        }
        
    }
        @media only screen and (max-width: 768px){
            select.left, select.right{
                margin: auto;
            }
            div.containerMain {
             min-height: 440px;
        }
        }
    </style>

</head>

<body>
    <?php include '../partials/_navbar.php'?>

    <div class="containerMain">
        <div class="sidebar">
            <?php
            include '../partials/_sidebar.php';
            ?>
        </div>
        <div class="mainData mt-2">

            <?php
            if($Alert){
              echo '<div class="alert alert-success alert-dismissible d-flex align-items-center" role="alert" style="width: 800px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16" role="img" aria-label="Success:">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        <div style="margin-left:7px;">
                            ' . $Alert  .'
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                        </div>';

            }
            if($Error){
                echo '<div class="alert alert-danger alert-dismissible d-flex align-items-center" role="alert" style="justify-content: revert; width: 800px;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:" id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div style="margin-left:7px;">
                                ' . $Error .'
                            </div><button type="button" class="btn-close" data-bs-dismiss="alert" style="justify-content: space-around;" aria-label="Close"></button>
                            </div>';
            }
            
            
            ?>

            <form class="forms" method="POST" action="<?php $_SERVER['PHP_SELF'];?>" id="courseform">
                <h1 class="heading head my-4" style="width: 100%;text-align:center;"><u> Add Subjects</u></h1>
                <hr>
                <div class="row">

                    <div class="mb-3 col-md-12">
                        <!-- <?php
                        // linking database and fetching departments dynamic 
                            include '../partials/_dbconnect.php';
                            $sql2 = "Select * from departments";
                            $result2 = mysqli_query($conn, $sql2);
                            $rowCount = mysqli_num_rows($result2);
                        ?> -->

                        <select name="Deptt_name" class="col-md-12 form-control deptt" id="department">
                            <option value="">Select Department</option>

                            <!-- <option value="Department of Economics">Department of Computer Ecnomics</option> -->
                        </select>
                    </div>




                    <!-- dynamic course fields using ajax and jquery  -->
                    <div class="mb-3 col-md-12">


                        <select name="Course_Name" class="col-md-12 form-control course" id="courses">
                            <option value="">Select Course</option>

                            <!-- <option value="Department of Economics">Department of Computer Ecnomics</option> -->
                        </select>
                    </div>

                    <!-- <div class="col-md-12"> -->
                    <div class="col-md-6">
                        <div class="mb-3 col-md-6">

                            <select name="Course_Duration" class="col-md-12 form-control left" id="courseDuration">
                                <option value="">Course Duration</option>


                            </select>


                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="mb-3 col-md-6">
                            <select name="Course_Code" class="col-md-12 form-control right" id="courseCode">
                                <option value="">Course Code</option>
                            </select>
                        </div>
                    </div>
                    <!-- </div> -->
                    <div class="mb-3 col-md-12">
                        <select name="class" class="col-md-12 form-control class">
                            <option value="">Class</option>
                            <option value="1st Sem">1st Sem</option>
                            <option value="2nd Sem">2nd Sem</option>
                            <option value="3rd Sem">3rd Sem</option>
                            <option value="4th Sem">4th Sem</option>
                            <option value="5th Sem">5th Sem</option>
                            <option value="6th Sem">6th Sem</option>
                        </select>

                    </div>

                    <div class="mb-3 col-md-5">
                        <label for="" class="form-label subject_name">Subject Name</label>
                        <input type="text" class="form-control subject" id="Subject_Name" name="Subject_Name" placeholder="" />
                    </div>
                    <div class="mb-3 col-md-5">
                        <label for="" class="form-label subject_name">Subject Code</label>
                        <input type="text" class="form-control subject" id="Subject_Code" name="Subject_Code" placeholder="" />
                    </div>
                    <div class="buttons">
                        <button type="button" class="btn  btn-success fs-submit">Save</button>
                        <button class="btn  btn-warning" id="resetform">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="container" style="position:absolute;"></div> -->

    <?php
    include '../partials/_footer.php';
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/script.js">

    </script>

    <script>
    

    $(document).ready(function() {
        $(".fs-submit").click(function(e) {
            e.preventDefault();
            $("#courseform").submit();
        });


        // functions for fetching the data into the table 
        function loadData(type, id) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    id: id
                },
                success: function(data) {
                    //alert(data);
                    if (type == "coursesdept") {
                        $("#courses").append(data);
                    } else if (type == "courseCode") {
                        $("#courseCode").html(data);
                    } else if (type == "courseDuration") {
                        //alert(data);
                        $("#courseDuration").append(data);
                    } else {
                        $("#department").append(data);



                    }
                }
            });
        }

        function loadData2(type, id1, id2) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    id1: id1,
                    id2: id2
                },
                success: function(data) {
                    //alert(data);
                    if (type == "courseCode") {
                        $("#courseCode").html(data);
                    }
                }
            });
        }


        loadData("department", "nodata");


        $("#department").on("change", function() {
            var deptt_name = $("#department").val();
            loadData('coursesdept', deptt_name);
        });

        $("#courses").on("change", function() {
            var course_name = $("#courses").val();
            //alert(course_name);
            loadData("courseDuration", course_name);

        });
        $("#courseDuration").on("change", function() {
            var course_duration = $("#courseDuration").val();
            var course_name = $("#courses").val();
            loadData2("courseCode", course_name, course_duration);
        });



    });
    </script>

</body>

</html>