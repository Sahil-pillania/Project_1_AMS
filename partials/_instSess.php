<?php
include '_dbconnect.php';
if(isset($_POST["reg_no"]))
{
$reg_no = $_POST["reg_no"];
$subject_name = $_POST["subject_name"];
$query4 = '';
  for($sub= 0; $sub<count($subject_name); $sub++)
 {
       $subject = mysqli_real_escape_string($conn, $subject_name[$sub]);
       //$subject = $subject_name[$sub];
       //echo $subject;
   for($count = 0; $count<count($reg_no); $count++)
      {
        
         echo $subject;
      $item_reg_cl = mysqli_real_escape_string($conn, $reg_no[$count]);

            if($item_reg_cl != '')
            {
            
            $query4 .= "INSERT INTO `sessional_test` (`registration_no`,`subject_name`) VALUES ('$item_reg_cl','$subject');";
              //$row4 +=1;    
            
            }
            else
            {
                  echo 'All Fields are Required';
                  exit;
            }

      }
   }
      
      if($query4 != '')
      {
         echo $query4;
            if(mysqli_multi_query($conn, $query4))
            {
            
            echo 'sessionals Inserted Successfully. ';
            //echo 'No of sessional_test regs inserted : '.$row4;
            }
            else
            {
            echo 'Error occured while updating sessionals table. ';
            }
      }



}
else{
      echo 'Registration number not set';
}
  
//mysqli_close($conn);

?>