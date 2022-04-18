<?php
include '_dbconnect.php';
//fetching the data in modal
if(isset($_POST["id"])){

    $id = $_POST["id"];
    //echo $id;


    $sql = "SELECT * FROM users WHERE sno = {$id}";
    $result = mysqli_query($conn, $sql) or die("SQL query failed.");
    $output = "";
    $output2 = "";
     if(mysqli_num_rows($result) > 0){
      //  fetching all departments 
        $sql2 = "SELECT * FROM departments";
        $result2 = mysqli_query($conn, $sql2) or die("SQL query failed.");
        $rowCount = mysqli_num_rows($result2);
      
        // for($i=1; $i <=$rowCount; $i++){
          
        //  $output2 .= '<td>'. $row2['deptt_name'].'</td>' ;
        // }
        
        

         while($row = mysqli_fetch_assoc($result)){

         $output .= '<tr>
                        <td>User Name:</td>
                        <td><input type="text" id="edit_user_name" value="'.$row['user_name'].'">
                        <input type="hidden" id="edit_id" value="'.$row['sno'].'" >                        
                        </td>
                    </tr>
                    <tr>
                        <td>User Email:</td>
                        <td><input type="text" id="edit_user_email" value="'.$row['user_email'].'" readonly></td>
                    </tr>
                    <tr>
                        <td>User Password</td>
                        <td><div>
                        <span style="font-size: 12px;
                        color: red;
                        padding-bottom: 0px;
                        position: absolute;">Password must be changed. Enter new password.</span>
                        <input type="text" id="edit_user_password" value="" placeholder="Enter new password..."></td>
                        </div>
                    </tr>
                    <tr>
                        <td>User Type</td>
                        <td> 
                        <select id="myselection" class="mb-3" style="width: 50%;">
                        <option value="faculty">faculty</option>
                        <option value="HOD">HOD</option>
                        <option value="admin">admin</option>
                        </select>
                        </td>             
                   </tr>
                    <tr>
                    <td>Department Name</td>
                    <td> <select id="myselectionDeptt">
                    <option value="'.$row['deptt_name'].'">'.$row['deptt_name'].'</option>';
                    for($i=1; $i <=$rowCount; $i++){
                        $row2 =  mysqli_fetch_array($result2);
                     $output .= '<option value="'. $row2['deptt_name'].'">'. $row2['deptt_name'].'</option>' ;
                    }


                $output .= '</tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-success btn-sm" style="width:70px;" id="edit-user-submit" value="Save"></td>
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
            $edit_user_name = $_POST['edit_user_name'];
            //$edit_user_email = $_POST['edit_user_email'];
            $edit_user_password = $_POST['edit_user_password'];
            $edit_user_type = $_POST['edit_user_type'];
            $edit_Deptt_name = $_POST['edit_Deptt_name'];
           
            $hashed_password = password_hash($edit_user_password, PASSWORD_DEFAULT);


            $sql = "UPDATE users SET `user_name` = '$edit_user_name', `user_password` = '$hashed_password', `user_type` = '$edit_user_type',`deptt_name` = '$edit_Deptt_name'  WHERE `sno` = '$edit_id' ";

            $result = mysqli_query($conn, $sql);
            if($result){
                echo 'success';
            }else{
                echo 'error';
            }

}



?>