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

    <title>New Department | Add</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
 
    img {
        transition: .4s ease-in-out;
    }

    img.userImg:hover {
        transform: scale(1.2);
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

            <!-- Modal for editing  -->
 <div class="modals">
        <div id="modals-form">
            <h2>Edit Users</h2>
            <table cellpadding="10px" width="100%">
                
            <!-- data will be fetched dynamically here  -->
                
            </table>
            <div id="close-btn">X</div>

        </div>
</div>
        
        <div class="mainData">
            <h2 class="text-center my-4 heading"><u> List of All Users</u></h2>
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User email</th>
                        <th scope="col">User type</th>
                        <th scope="col">Department </th>
                        <th scope="col">Image</th>
                        <th scope="col" id="editHead">Edit</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                       include '../partials/_dbconnect.php';
                            $sql2 = "Select * from users ORDER BY deptt_name ASC";
                            $result2 = mysqli_query($conn, $sql2);
                            $rowCount = mysqli_num_rows($result2);
                            for($i=1; $i <=$rowCount; $i++){
                                   $row =  mysqli_fetch_array($result2);
                                   ?>

                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['user_email']; ?></td>
                        <td><?php echo $row['user_type']; ?></td>
                        <td><?php echo $row['deptt_name']; ?></td>
                        <td><img src="<?php echo $row['image_url']; ?>" alt="" width="115px"
                                style="border: 2px solid black;border-radius: 10px;" class="userImg"></td>
                        <td ><button class="edit-user-btn" data-eid='<?php echo $row['sno']; ?>'>Edit</button></td>


                    </tr>
                    <?php  } ?>
                </tbody>
            </table>

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
    <script src="../script/edit-delete2.js?$$REVISION$$"></script>

</body>

</html>