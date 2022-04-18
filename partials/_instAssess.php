<?php
include '_dbconnect.php';
if(isset($_POST["reg_no"]))
{
 $reg_no = $_POST["reg_no"];
 $subject_name = $_POST["subject_name"];

//$row2 = 0;
$query2 = '';

 for($sub= 0; $sub<count($subject_name); $sub++){
       $subject = mysqli_real_escape_string($conn, $subject_name[$sub]);
       
 for($count = 0; $count<count($reg_no); $count++)
      {
      $item_reg_clean = mysqli_real_escape_string($conn, $reg_no[$count]);
      
      //echo $subject;

            if($item_reg_clean != '')
            {
            
            // $query2 .= "INSERT INTO `assignments` (`registration_no`,`subject_name`) VALUES ('$item_reg_clean','$subject');";

            $query2 .= "INSERT INTO `assessments` ( `registration_no`, `subject_name`) VALUES ('$item_reg_clean', '$subject'); ";
              
            
            }
            else
            {
                  echo 'All Fields are Required';
                  exit;
            }

      }
      
   }
      if($query2 != '')
      {
         //echo $query2;
            if(mysqli_multi_query($conn, $query2))
            {
            
            echo 'Assessments table updated Successfully. ';
            // echo 'No of Assignment regs inserted : '.$row2;
            }
            else
            {
            echo 'Error occured while updating assessments table. ';
            }
      }
}

?>