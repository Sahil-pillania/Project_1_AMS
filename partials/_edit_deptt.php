<?php
include '_dbconnect.php';
//fetching the data in modal
if(isset($_POST["id"])){

    $id = $_POST["id"];
    //echo $id;


    $sql = "SELECT * FROM departments WHERE sno = {$id}";
    $result = mysqli_query($conn, $sql) or die("SQL query failed.");
    $output = "";
     if(mysqli_num_rows($result) > 0){

         while($row = mysqli_fetch_assoc($result)){

         $output .= '<tr>
                        <td>Department Name:</td>
                        <td><input type="text" id="edit_Deptt_name" value="'.$row['deptt_name'].'">
                        <input type="hidden" id="edit_id" value="'.$row['sno'].'" >                        
                        </td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-success btn-sm" id="edit-deptt-submit" value="Save" style="width: 60px;"></td>
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
         
            //echo $edit_course_code;


            $sql = "UPDATE departments SET `deptt_name` = '$edit_Deptt_name' WHERE `sno` = '$edit_id' ";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo 'success';
            }else{
                echo 'error';
            }

}



?>