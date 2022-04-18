<?php


include '_dbconnect.php';

// if(isset($_POST["reg_no"]))
// {
//  $reg_no = $_POST["reg_no"];
//  $subject_name = $_POST["subject_name"];

// //$row2 = 0;
// $query2 = '';

//  for($sub= 0; $sub<count($subject_name); $sub++){
//        $subject = mysqli_real_escape_string($conn, $subject_name[$sub]);
       
//  for($count = 0; $count<count($reg_no); $count++)
//       {
//       $item_reg_clean = mysqli_real_escape_string($conn, $reg_no[$count]);
//       echo $item_reg_clean;
//       echo $subject;

//             if($item_reg_clean != '')
//             {
            
//             // $query2 .= "INSERT INTO `assignments` (`registration_no`,`subject_name`) VALUES ('$item_reg_clean','$subject');";

//             $query2 .= "INSERT INTO `assignments` ( `registration_no`, `subject_name`) VALUES ('$item_reg_clean', '$subject'); ";
              
            
//             }
//             else
//             {
//                   echo 'All Fields are Required';
//                   exit;
//             }

//       }
      
//    }
//       if($query2 != '')
//       {
//          echo $query2;
//             if(mysqli_multi_query($conn, $query2))
//             {
            
//             echo 'Assignment Inserted Successfully. ';
//             // echo 'No of Assignment regs inserted : '.$row2;
//             }
//             else
//             {
//             echo 'Error occured in 2nd file.';
//             }
//       }
// }

?>
<?php

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
      echo $item_reg;
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
         echo $query3;
            if(mysqli_multi_query($conn, $query3))
            {
            
            echo 'Attendence Inserted Successfully. ';
            //echo 'No of attendence regs inserted : '.$row3;
            }
            else
            {
            echo 'Error occured in 3rd file.';
            }
      }
 }

?>

<?php

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
         echo $item_reg_cl;
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
            echo 'Error occured in 4th file.';
            }
      }



}
else{
      echo 'Registration number not set';
}
  
//mysqli_close($conn);

?>