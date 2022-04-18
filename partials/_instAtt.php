<?php
include '_dbconnect.php';
if(isset($_POST["reg_no"]))
{
   $reg_no = $_POST["reg_no"];
   $subject_name = $_POST["subject_name"];
//$row3 = 0;
$query3 = '';
  for($sub= 0; $sub<count($subject_name); $sub++)
 {
       $subject = mysqli_real_escape_string($conn, $subject_name[$sub]);
       //$subject = $subject_name[$sub];
      // echo $subject;
   for($count = 0; $count<count($reg_no); $count++)
      {
      
      echo $subject;
      $item_reg = mysqli_real_escape_string($conn, $reg_no[$count]);
      // $item_course_clean = mysqli_real_escape_string($conn, $course[$count]);
      // $item_deptt_clean = mysqli_real_escape_string($conn, $deptt[$count]);

            if($item_reg != '')
            {
            
            $query3 .= "INSERT INTO `attendence` (`registration_no`,`subject_name`) VALUES ('$item_reg','$subject');";
              //$row3 +=1;    
            
            }
            else
            {
                  echo 'All Fields are Required';
                  exit;
            }

      }
      
   }
      if($query3 != '')
      {
         //echo $query3;
            if(mysqli_multi_query($conn, $query3))
            {
            
            echo 'Attendence Inserted Successfully. ';
            //echo 'No of attendence regs inserted : '.$row3;
            }
            else
            {
            echo 'Error occured while updating attendence table.';
            }
      }
 }

?>