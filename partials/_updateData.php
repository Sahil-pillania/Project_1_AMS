<?php
include "_dbconnect.php";
// updating the assessment data of students into the database
if(isset($_POST["assignment_1"])){


      $reg_no =$_POST["reg_no"];
      $assignment_1 =$_POST["assignment_1"];
      $assignment_2 =$_POST["assignment_2"];
      $assignment_marks =$_POST["assignment_marks"];
      $subject = $_POST["subject"];
     //echo $subject;
//     echo $reg_no[0];
    $query = '';
    $row = 0;
      for($count = 0; $count<count($reg_no); $count++)
      {
      $item_reg_clean = mysqli_real_escape_string($conn, $reg_no[$count]);
      $item_mark1_clean = mysqli_real_escape_string($conn, $assignment_1[$count]);
      $item_mark2_clean = mysqli_real_escape_string($conn, $assignment_2[$count]);
      $item_total_clean = mysqli_real_escape_string($conn, $assignment_marks[$count]);
      // echo $item_total_clean;
      // echo $item_mark1_clean;
      // echo $item_mark2_clean;

             
            
            
                $query .= 'UPDATE `assignments` SET `assignment_1`="'.$item_mark1_clean.'",`assignment_2`="'.$item_mark2_clean.'",`assignment_marks`="'.$item_total_clean.'"  WHERE `assignments`.`registration_no`="'.$item_reg_clean.'" AND  `assignments`.`subject_name` =  "'.$subject.'";';
              $row +=1;   
              //echo $query; 

      }
       


      if($query != '')
      {
            if(mysqli_multi_query($conn, $query))
            {
            
            echo 'Data Updated Successfully. ';
            echo "\n";
            echo 'Total no of students updated : '.$row;
            }
            else
            {
            echo 'Error occured while updating assignments.';
            }
      }
      
}

if(isset($_POST["max_attendence"])){


      $reg_no =$_POST["reg_no"];
      $max_attendence =$_POST["max_attendence"];
      //$max_attendence = implode(',', $_POST["max_attendence"]);
      $obt_attendence =$_POST["obt_attendence"];
      $attendence_marks =$_POST["attendence_marks"];
      $subject = $_POST["subject"];
     //echo $max_attendence;
    $query = '';
    $row = 0;
      for($count = 0; $count<count($reg_no); $count++)
      {
      $item_reg_clean = mysqli_real_escape_string($conn, $reg_no[$count]);
      //$item_mark1_clean = mysqli_real_escape_string($conn, $max_attendence[$count]);
      $item_mark2_clean = mysqli_real_escape_string($conn, $obt_attendence[$count]);
      $item_total_clean = mysqli_real_escape_string($conn, $attendence_marks[$count]);
     

             
            
            
                $query .= 'UPDATE `attendence` SET `max_attendence`="'.$max_attendence.'",`obtained_attendence`="'.$item_mark2_clean.'",`attendence_marks`="'.$item_total_clean.'"  WHERE `attendence`.`registration_no`="'.$item_reg_clean.'"  AND  `attendence`.`subject_name` =  "'.$subject.'";';
              $row +=1;   
              //echo $query; 

      }
       


      if($query != '')
      {
            if(mysqli_multi_query($conn, $query))
            {
            
            echo 'Data Updated Successfully. ';
            echo "\n";
            echo 'Total no of students updated : '.$row;
            }
            else
            {
            echo 'Error occured while updating attendences.';
            }
      }
      
}
if(isset($_POST["sessional_1"])){


      $reg_no =$_POST["reg_no"];
      $sessional_1 =$_POST["sessional_1"];
      $sessional_2=$_POST["sessional_2"];
      $sessional_marks =$_POST["sessional_marks"];
      $subject = $_POST["subject"];
//     echo $assignment_2[0];
//     echo $reg_no[0];
    $query = '';
    $row = 0;
      for($count = 0; $count<count($reg_no); $count++)
      {
      $item_reg_clean = mysqli_real_escape_string($conn, $reg_no[$count]);
      $item_mark1_clean = mysqli_real_escape_string($conn, $sessional_1[$count]);
      $item_mark2_clean = mysqli_real_escape_string($conn, $sessional_2[$count]);
      $item_total_clean = mysqli_real_escape_string($conn, $sessional_marks[$count]);
     

             
            
            
                $query .= 'UPDATE `sessional_test` SET `sessional_1`="'.$item_mark1_clean.'",`sessional_2`="'.$item_mark2_clean.'",`sessional_marks`="'.$item_total_clean.'"  WHERE `sessional_test`.`registration_no`="'.$item_reg_clean.'" AND  `sessional_test`.`subject_name` =  "'.$subject.'";';
              $row +=1;   
              //echo $query; 

      }
       


      if($query != '')
      {
            if(mysqli_multi_query($conn, $query))
            {
            
            echo 'Data Updated Successfully. ';
            echo "\n";
            echo 'Total no of students updated : '.$row;
            }
            else
            {
            echo 'Error occured while updating sessionals.';
            }
      }
      
}
// for saving assessment total marks .
if(isset($_POST["assessment_marks"])){


      $reg_no =$_POST["reg_no"];
      $assessment_marks =$_POST["assessment_marks"];
      
      $subject = $_POST["subject"];
//     echo $assignment_2[0];
//     echo $reg_no[0];
    $query = '';
    $row = 0;
      for($count = 0; $count<count($reg_no); $count++)
      {
      $item_reg_clean = mysqli_real_escape_string($conn, $reg_no[$count]);
      $item_assessment_marks_clean = mysqli_real_escape_string($conn, $assessment_marks[$count]);
      

                $query.= "UPDATE `assessments` SET `Assessment_marks` = '$item_assessment_marks_clean' WHERE `assessments`.`registration_no` = '$item_reg_clean' AND  `assessments`.`subject_name` =  '$subject';";
                //$query.= "UPDATE `assessments` SET `assessment_marks` = '4' WHERE `assessments`.`sno` = 1;"
              $row +=1;   
              //echo $query; 

      }
       


      if($query != '')
      {
            if(mysqli_multi_query($conn, $query))
            {
            
            echo 'Assessment Marks Updated Successfully. ';
            echo "\n";
            echo 'Total no of students updated : '.$row;
            }
            else
            {
            echo 'Error occured while updating Assessments.';
            }
      }
      
}



    






?>