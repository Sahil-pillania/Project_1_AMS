<?php 

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
}

$class = $_GET['class'];
$courseDuration = $_GET['duration'];
$course = $_GET['course'];
$deptt = $_GET['deptt'];
//echo $courseDuration;
// echo $course;
// echo $deptt;
?>
<?php
// include '../partials/_dbconnect.php';
// $sql = "SELECT `subject_name`FROM `subjects` WHERE  `course_name`='$course'";
// $result = mysqli_query($conn, $sql);
// if($result)
// {
//     $sub_name = [];
//     //$row = mysqli_fetch_assoc($result);
//     $num = mysqli_num_rows($result);
//     while($row = mysqli_fetch_assoc($result))
//     {
//         array_push($sub_name,$row['subject_name']);
//         echo $row['subject_name'];
//     }
//     for($i=0; $i< count($sub_name); $i++)
//     {
//         echo $sub_name[$i];
//     }
//     print_r($sub_name);

// }
//exit;

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

    <title>Add Students || Students List</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    footer#footer {
        position: sticky;
        bottom: 0px;
    }
    </style>
</head>

<body style="background: white;">
    <?php include '../partials/_navbar.php';?>


    <div class="container" style="min-height:520px;">
        <h3 align="center"></h3>
        <br />
        <h3 align="center" class="heading"><u> Enter Students Details</h3></u>
        <br />

        <div class="table-responsive" style="border-radius: 15px;">
            <span id="error"></span>
            <table class="table table-bordered align-middle" id="crud_table">
                <tr>
                    <th width="5%" scope="col" class="table-dark">SNO</th>
                    <th width="20%" scope="col" class="table-dark" style="text-align:center">Reg_No</th>
                    <th width="10%" scope="col" class="table-dark" style="text-align:center">Class Roll No</th>
                    <th width="10%" scope="col" class="table-dark" style="text-align:center">University Roll No</th>
                    <th width="15%" scope="col" class="table-dark" style="text-align:center">Name</th>
                    <th width="15%" scope="col" class="table-dark" style="text-align:center">E-mail</th>
                    <th width="15%" scope="col" class="table-dark" style="text-align:center">Ph-No</th>
                    <th class="table-dark"></th>
                </tr>
                <tr style="line-height:2em;">
                    <td contenteditable="" class="sno">
                        <div class="text-center"><b>1</b></div>
                    </td>
                    <td contenteditable="true" class="reg_no"></td>
                    <td contenteditable="true" class="class_roll_no"></td>
                    <td contenteditable="true" class="university_roll_no"></td>
                    <td contenteditable="true" class="name"></td>
                    <td contenteditable="true" class="email"></td>
                    <td contenteditable="true" class="phone"></td>
                    <td></td>
                </tr>
            </table>
            <div align="right">
                <button type="button" name="add" id="add" class="btn btn-info btn-xs">+</button>
            </div>
            <div align="center">
                <button type="button" name="save" id="save" class="btn btn-success">Save</button>
            </div>
            <br />
            <!-- inserted data show here  -->
            <div id="inserted_item_dataa"></div>
        </div>
    </div>
    </form>
    </div>



    <?php include '../partials/_footer.php';?>

    <!-- javascipt section  -->
    <script src="../jquery/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        var count = 2;

        // fields add button triggering ---------
        $('#add').click(function() {
            //count = count + 1;
            var html_code = "<tr id='row" + count + "'>";
            html_code += "<td contenteditable='' class='sno'><div class='text-center'><b>" + count +
                "</b></div></td>";
            html_code += "<td contenteditable='true' class='reg_no'></td>";
            html_code += "<td contenteditable='true' class='class_roll_no'></td>";
            html_code += "<td contenteditable='true' class='university_roll_no'></td>";
            html_code += "<td contenteditable='true' class='name' ></td>";
            html_code += "<td contenteditable='true' class='email' ></td>";
            html_code += "<td contenteditable='true' class='phone' ></td>";
            html_code += "<td><button type='button' name='remove' data-row='row" + count +
                "' class='btn btn-danger btn-xs remove'>-</button></td>";
            html_code += "</tr>";
            $('#crud_table').append(html_code);
            count = count + 1;
        });

        $(document).on('click', '.remove', function() {
            var delete_row = $(this).data("row");
            $('#' + delete_row).remove();
        });


        // save button triggering --------------
        $('#save').click(function() {
            var subject_name = [];
            // Adding subject teachers here...
            <?php
               include '../partials/_dbconnect.php';
                $sql = "SELECT `subject_name`FROM `subjects` WHERE  `class`='$class'";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    $num = mysqli_num_rows($result);
                    while($row = mysqli_fetch_assoc($result))
                    {
            ?>
            subject_name.push("<?php echo $row['subject_name']; ?>");
            <?php
                        // array_push($subject_name,$row['subject_name']);
                        // echo $row['subject_name'];
                    } 
                }
            ?>
            for (i = 0; i < subject_name.length; i++) {
                //subject_name[i];
                console.log(subject_name[i]);
            }




            var reg_no = [];
            var class_roll_no = [];
            var university_roll_no = [];
            var name = [];
            var email = [];
            var phone = [];
            var classes = [];
            //var teacher = [];
            var course = [];
            var courseDuration = [];
            var deptt = [];

            // var class = '$_GET['class']';
            // var course = '$_GET['course']';
            // var deptt = '$_GET['deptt']';
            // console.log(deptt);
            // console.log(class);
            $('.reg_no').each(function() {
                reg_no.push($(this).text());
                console.log($(this).text());

                classes.push(<?php echo $_GET['class'] ?>);

                course.push("<?php echo $_GET['course'] ?>");
                deptt.push("<?php echo $_GET['deptt'] ?>");
                courseDuration.push("<?php echo $_GET['duration'] ?>");
            });
            $('.class_roll_no').each(function() {
                class_roll_no.push($(this).text());
            });
            $('.university_roll_no').each(function() {
                university_roll_no.push($(this).text());
            });
            $('.name').each(function() {
                name.push($(this).text());
            });
            $('.email').each(function() {
                email.push($(this).text());
            });
            $('.phone').each(function() {
                phone.push($(this).text());
            });
            // adding Students in students table
            $.ajax({
                url: "../partials/_insertStudents.php",
                method: "POST",
                data: {
                    reg_no: reg_no,
                    class_roll_no: class_roll_no,
                    university_roll_no: university_roll_no,
                    name: name,
                    email: email,
                    phone: phone,
                    subject_name: subject_name,
                    class: classes,
                    course: course,
                    deptt: deptt,
                    courseDuration: courseDuration
                },
                success: function(data) {
                    //alert(data);
                    if (data == 'Error occured in students table.') {
                        alert(data);
                    } else if (data == 'All Fields are Required') {
                        alert(data);
                    } else {
                        alert(data);
                        console.log(data);
                        $("td[contentEditable='true']").text("");
                        for (var i = 2; i <= count; i++) {
                            $('tr#' + i + '').remove();
                        }

                    }
                }
            });
            // adding regs in assignment table
            $.ajax({
                url: "../partials/_instAssign.php",
                method: "POST",
                data: {
                    reg_no: reg_no,
                    subject_name: subject_name,
                },
                success: function(data) {
                    //alert(data);
                    if (data == 'Error occured while updating assignment table.') {
                        alert(data);
                    }
                }
            });
            // adding regs in attendence table
            $.ajax({
                url: "../partials/_instAtt.php",
                method: "POST",
                data: {
                    reg_no: reg_no,
                    subject_name: subject_name,
                },
                success: function(data) {
                    //alert(data);
                    if (data == 'Error occured while updating attendence table.') {
                        alert(data);
                    }
                }
            });

            // adding regs in sessionals table
            $.ajax({
                url: "../partials/_instSess.php",
                method: "POST",
                data: {
                    reg_no: reg_no,
                    subject_name: subject_name,
                },
                success: function(data) {
                    //alert(data);
                    if (data == 'Error occured while updating sessionals table. ') {
                        alert(data);
                    }
                }
            });
            // adding regs in total assessment table
            $.ajax({
                url: "../partials/_instAssess.php",
                method: "POST",
                data: {
                    reg_no: reg_no,
                    subject_name: subject_name,
                },
                success: function(data) {
                    //alert(data);
                    if (data == 'Error occured while updating total assessment table. ') {
                        alert(data);
                    }
                }
            });



        });
    });
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../jquery/jquery-3.6.0.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>