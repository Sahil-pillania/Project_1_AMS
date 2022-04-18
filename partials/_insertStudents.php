<?php

include '_dbconnect.php';
if(isset($_POST["reg_no"]))
{
 $reg_no = $_POST["reg_no"];
 $class_roll_no = $_POST["class_roll_no"];
 $university_roll_no = $_POST["university_roll_no"];
 $name = $_POST["name"];
 $email = $_POST["email"];
 $phone = $_POST["phone"];
 $class = $_POST["class"];
 //$teacher = $_POST["teacher"];
 $course = $_POST["course"];
 $courseDuration = $_POST["courseDuration"];
 $deptt = $_POST["deptt"];
 $subject_name = $_POST["subject_name"];
 //echo $subject_name[0];
 

// echo count($reg_no);
// echo count($reg_no);
// echo count($class_roll_no);
// echo count($name);
// echo count($phone);

 
 
 $row = 0;

$query = '';
for($count = 0; $count<count($reg_no); $count++)

      {
      $item_reg_clean = mysqli_real_escape_string($conn, $reg_no[$count]);
      $item_class_roll_clean = mysqli_real_escape_string($conn, $class_roll_no[$count]);
      $item_university_roll_clean = mysqli_real_escape_string($conn, $university_roll_no[$count]);
      $item_name_clean = mysqli_real_escape_string($conn, $name[$count]);
      $item_phone_clean = mysqli_real_escape_string($conn, $phone[$count]);
      $item_email_clean = mysqli_real_escape_string($conn, $email[$count]);
      $item_class_clean = mysqli_real_escape_string($conn, $class[$count]);
      //$item_teacher_clean = mysqli_real_escape_string($conn, $teacher[$count]);
      $item_course_clean = mysqli_real_escape_string($conn, $course[$count]);
      $item_courseDuration_clean = mysqli_real_escape_string($conn, $courseDuration[$count]);
      $item_deptt_clean = mysqli_real_escape_string($conn, $deptt[$count]);

            if($item_reg_clean != '' && $item_class_roll_clean != '' && $item_name_clean != '' && $item_email_clean != '' && $item_phone_clean != '')
            {
            $query .= '
            INSERT INTO `students` (`registration_no`, `class_roll_no`,`university_roll_no`, `name`, `phone_no`, `email`, `class`, `course_name`,`duration`, `deptt_name`) VALUES ("'.$item_reg_clean.'", "'.$item_class_roll_clean.'","'.$item_university_roll_clean.'", "'.$item_name_clean.'", "'.$item_phone_clean.'", "'.$item_email_clean.'", "'.$item_class_clean.'", "'.$item_course_clean.'","'.$item_courseDuration_clean.'","'.$item_deptt_clean.'"); 
            ';
            $row+=1;
            }
            else
            {
                  echo 'All Fields are Required';
                  exit;
            }

      }
      
      if($query != '')
      {
            //echo $query;
            if(mysqli_multi_query($conn, $query))
            {
            
            echo 'Data Inserted Successfully. ';
            echo 'No of Students inserted : '.$row;
            }
            else
            {
            echo 'Error occured in students table.';
            }
      }
      else
      {
            echo 'Query is empty';
      }
   }


?>
<?php

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
//             // $query2 = "INSERT INTO `assignments` (`registration_no`,`subject_name`) VALUES ('$item_reg_clean','$subject');";
//             // $result = mysqli_query($conn, $query2);
//             // if(result)
//             // {
//                     //$row2 +=1; 

//             //   }   
            
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

// ?>
<?php

// if(isset($_POST["reg_no"]))
// {
//    $reg_no = $_POST["reg_no"];
//    $subject_name = $_POST["subject_name"];
// //$row3 = 0;
// $query3 = '';
//   for($sub= 0; $sub<count($subject_name); $sub++)
//  {
//        $subject = mysqli_real_escape_string($conn, $subject_name[$sub]);
//        //$subject = $subject_name[$sub];
//       // echo $subject;
//    for($count = 0; $count<count($reg_no); $count++)
//       {
//       echo $item_reg_clean;
//       echo $subject;
//       $item_reg = mysqli_real_escape_string($conn, $reg_no[$count]);
//       // $item_course_clean = mysqli_real_escape_string($conn, $course[$count]);
//       // $item_deptt_clean = mysqli_real_escape_string($conn, $deptt[$count]);

//             if($item_reg != '')
//             {
            
//             $query3 .= "INSERT INTO `attendence` (`registration_no`,`subject_name`) VALUES ('$item_reg','$subject');";
//               //$row3 +=1;    
            
//             }
//             else
//             {
//                   echo 'All Fields are Required';
//                   exit;
//             }

//       }
      
//    }
//       if($query3 != '')
//       {
//          echo $query3;
//             if(mysqli_multi_query($conn, $query3))
//             {
            
//             echo 'Attendence Inserted Successfully. ';
//             //echo 'No of attendence regs inserted : '.$row3;
//             }
//             else
//             {
//             echo 'Error occured in 3rd file.';
//             }
//       }
//  }

// ?>

<?php

// if(isset($_POST["reg_no"]))
// {
// $reg_no = $_POST["reg_no"];
// $subject_name = $_POST["subject_name"];
// $query4 = '';
//   for($sub= 0; $sub<count($subject_name); $sub++)
//  {
//        $subject = mysqli_real_escape_string($conn, $subject_name[$sub]);
//        //$subject = $subject_name[$sub];
//        //echo $subject;
//    for($count = 0; $count<count($reg_no); $count++)
//       {
//          echo $item_reg_clean;
//          echo $subject;
//       $item_reg_cl = mysqli_real_escape_string($conn, $reg_no[$count]);
//       // $item_course_clean = mysqli_real_escape_string($conn, $course[$count]);
//       // $item_deptt_clean = mysqli_real_escape_string($conn, $deptt[$count]);

//             if($item_reg_cl != '')
//             {
            
//             $query4 .= "INSERT INTO `sessional_test` (`registration_no`,`subject_name`) VALUES ('$item_reg_cl','$subject');";
//               //$row4 +=1;    
            
//             }
//             else
//             {
//                   echo 'All Fields are Required';
//                   exit;
//             }

//       }
//    }
      
//       if($query4 != '')
//       {
//          echo $query4;
//             if(mysqli_multi_query($conn, $query4))
//             {
            
//             echo 'sessionals Inserted Successfully. ';
//             //echo 'No of sessional_test regs inserted : '.$row4;
//             }
//             else
//             {
//             echo 'Error occured in 4th file.';
//             }
//       }



// }
// else{
//       echo 'Registration number not set';
// }
      





?>