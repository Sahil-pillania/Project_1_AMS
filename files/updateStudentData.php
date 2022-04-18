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

    <title>All Department | List</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    .containerMain {
        display: flex;

    }

    .sidebar {
        width: 250px;
    }

    .mainData {
        width: 70vw;
        padding: 20px;
        position: relative;
        left: 60px;
        min-height: 500px;
        /* margin: auto; */
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
            <h2 class="text-center my-4 heading"><u> Enter the Registration Number</u></h2>
            <form id="form">
                <div class="row col-12 my-4">
                    <div class="col-md-12">
                        <!-- <div class="row"> -->
                        <div class="mb-3 col-md-12 department">

                            <select name="Deptt_name" class="department col-md-12 form-control" id="department">
                                <option value="<?php echo $_SESSION["deptt_name"] ?>">
                                    <?php echo $_SESSION["deptt_name"] ?></option>

                            </select>
                        </div>

                        <div class="invalid-feedback">
                            <!-- Please select a valid Department Name. -->
                        </div>
                    </div>
                </div>
                <div class="row col-12 my-4">
                    <div class="col-md-12 ">
                        <!-- <div class="row"> -->
                        <div class="mb-3 col-md-12">

                            <label for="reg"> Enter your Registration no.</label><br>
                            <input type="text" class="registration_no form-control" id="reg_no" required>
                        </div>

                        <div class="invalid-feedback">
                            <!-- Please select a valid Course Name. -->
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-success my-4 button" id="getStudent">Get Student</button>
                    <button class="btn btn-warning my-4 button" id="resetform">Refresh</button>

                </div>
        </div>
        </form>
    </div>


    </div>

    <div class="getData" style="width: 80%;
    margin: -100px auto;">
        <h1 class="text-center heading">Your data </h1>
        <button class="btn btn-primary" id="fetchAttendence">Attendence</button>
        <button class="btn btn-primary" id="fetchSessional">Sessional test</button>
        <button class="btn btn-primary" id="fetchAssignments">Assignment</button>
        <button class="btn btn-primary" id="fetchTotal">Total</button>
        <div class="tableContent">
            <div class="tableContainer1">


                <hr>

                <table class="table table-bordered table-secondary border-dark" id="myTable">

                    <!-- data will be fetched dynamically  -->

                </table>
                <div class="button text-center" style="margin-top: 20px;margin-bottom:20px;">
                    <button class="btn btn-success text-center px-4" id="saveStudentsMarks"> Save </button>

                </div>

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
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    <script>
    $('.getData').hide();

    // fetching dropdown data using ajax 

    $(document).ready(function() {
        // load data 
        function loadData(type, reg, deptt) {
            $.ajax({
                url: "../partials/_data_fetch.php",
                type: "POST",
                data: {
                    type: type,
                    reg_no: reg,
                    deptt_name: deptt
                },
                success: function(data) {

                    $("#myTable").append(data);

                }
            });

        }

        $('#getStudent').on('click', function() {
            var deptt_name = $("#department").val();
            var reg_no = $("#reg_no").val();

            loadData("getAtt", reg_no, deptt_name);
        });
    });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>