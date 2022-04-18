<?php
include '_dbconnect.php';
//fetching the data in modal
if(isset($_POST["id"])){

    $id = $_POST["id"];
    echo $id;


    $sql = "SELECT * FROM courses WHERE sno = {$id}";
    $result = mysqli_query($conn, $sql) or die("SQL query failed.");
    $output = "";
     if(mysqli_num_rows($result) > 0){

         while($row = mysqli_fetch_assoc($result)){

         $output .= '<tr>
                        <td>Department Name:</td>
                        <td><input type="text" id="edit_Deptt_name" value="'.$row['deptt_name'].'" readonly>
                        <input type="hidden" id="edit_id" value="'.$row['sno'].'" >                        
                        </td>
                    </tr>
                    <tr>
                        <td>Course Name:</td>
                        <td><input type="text" id="edit_course_name" value="'.$row['course_name'].'"></td>
                    </tr>
                    <tr>
                        <td>Course Code:</td>
                        <td><input type="text" id="edit_course_code" value="'.$row['course_code'].'" readonly></td>
                    </tr>
                    <tr>
                        <td>Course Level:</td>
                        <td><input type="text" id="edit_course_level" value="'.$row['level'].'"></td>
                    </tr>
                    <tr>
                    <td>Course duration:</td>
                    <td><input type="text" id="edit_course_duration" value="'.$row['duration'].'"></td>
                </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-success btn-sm" id="edit-submit" value="Save"></td>
                    </tr>';
     }

    }else{
        echo "<h2> No Record Found.</h2>";
    }
    echo $output;
}


// saving the updated data
else if(isset($_POST["edit_id"])){

            $edit_id = $_POST['edit_id'];
            $edit_Deptt_name = $_POST['edit_Deptt_name'];
            $edit_course_name = $_POST['edit_course_name'];
            $edit_course_code = $_POST['edit_course_code'];
            $edit_course_level = $_POST['edit_course_level'];
            $edit_course_duration = $_POST['edit_course_duration'];
            //echo $edit_course_code;


            $sql = "UPDATE courses SET `course_name` = '$edit_course_name', `duration` = '$edit_course_duration', `level` = '$edit_course_level' WHERE `sno` = '$edit_id' ";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo 'success';
            }else{
                echo 'error';
            }

}



?>