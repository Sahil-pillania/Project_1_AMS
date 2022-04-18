<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: ../index.php");
    exit;
}

?>
<?php
        $showAlert = false;
        $Error = false;
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            
        include '../partials/_dbconnect.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        
        //echo $terms;
        
        $sql = "INSERT into `queries` ( `first_name`, `last_name`, `email`, `phone`, `message`, `time`) VALUES ('$fname', '$lname', '$email',' $phone','$message', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
        }
        else{
            $Error = true;
        }

        
        }
        
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Queries</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <style>
    label {
        font-weight: 700;
        font-size: 18px;
    }

    /* .container1 {
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
    }

    .containerMain {
        display: flex;
        flex-direction: column;
        width: 900px;
    } */

    /* .btn-warning {
        transition: width 0.8s;
    }

    .btn-warning:hover {
        background: #12d9ed;
        color: black;
        width: 90px;
    } */

    /* form css  */
    .formBox {
        position: relative;
        width: 100%;
    }

    .formBox .row50 {
        display: flex;
        gap: 20px;
    }

    .inputBox {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
        width: 50%;
    }

    .formBox .row100 .inputBox {
        width: 100%;
    }

    .inputBox span {
        color: #18b7ff;
        margin-top: 10px;
        margin-bottom: 5px;
        font-weight: 500;
    }

    .inputBox input {
        padding: 10px;
        font-size: 1em;
        outline: none;
        border: 1px solid #333;
        border-radius: 8px;
    }

    .inputBox textarea {
        padding: 10px;
        font-size: 1em;
        outline: none;
        border: 1px solid #333;
        resize: none;
        min-height: 105px;
        margin-bottom: 10px;
        border-radius: 8px;

    }

    .inputBox input[type="submit"] {
        background: green;
        color: #fff;
        border: none;
        font-size: 1em;
        max-width: 120px;
        font-weight: 700;
        cursor: pointer;
        padding: 10px 12px;

    }

    .buttons input[type="submit"]:hover {
        background: orange;
    }

    .inputBox ::placeholder {
        color: rgba(0, 0, 0, 0.75);
    }
    </style>
</head>

<body>
    <?php include '../partials/_navbar.php'; ?>

    <div class="containerMain">
        <div class="sidebar">
            <?php include '../partials/_sidebar.php'; ?>
        </div>
        <div class="mainData">
            <?php
            if($showAlert){
               echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Successful</strong> Your message has been submitted. Thanks for contacting us.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
            }
            if($Error){
               echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error occured</strong> Your message couldn\'t be submitted. Please try again.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>';
            }
            ?>


            <form method="POST" action="/AMS/files/contactUs.php" id="form">
                <div class="text">
                    <h3 class="heading px-3 my-4"><u>:- Please submit your query/suggestion here...</u></h3>
                </div>
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span>First Name</span>
                            <input type="text" placeholder="Sahil" name="fname" required>
                        </div>
                        <div class="inputBox">
                            <span>last Name</span>
                            <input type="text" placeholder="Pillania" name="lname" required>
                        </div>
                    </div>
                    <div class=" row50">
                        <div class="inputBox">
                            <span>Email</span>
                            <input type="text" placeholder="Example@gmail.com" name="email" required>
                        </div>
                        <div class="inputBox">
                            <span>Contact No.</span>
                            <input type="text" placeholder="+91 9876543210" name="phone" required>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <span>message</span>
                            <textarea type="text" placeholder="Your message........" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="buttons">

                            <input type="Submit" value="Submit" class="btn btn btn-success mr-4">
                            <input type="Submit" value="Refresh" class="btn btn btn-warning mx-4" id="resetform">
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>


    <?php include '../partials/_footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../script/script.js">

    </script>

</body>

</html>